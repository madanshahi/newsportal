<?php
  
  class Nyasro_NepaliDateConverter {
    
    public $nep_month = [
      'Baisakh',
      'Jestha',
      'Asar',
      'Sharwan',
      'Bhadra',
      'Asoj',
      'Kartik',
      'Mansir',
      'Poush',
      'Magh',
      'Falgun',
      'Chaitra'
    ];
    public $eng_month = [
      "January",
      "February",
      "March",
      "April",
      "May",
      "June",
      "July",
      "August",
      "September",
      "October",
      "November",
      "December"
    ];
    private $eng_day = [ "Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday" ];
    private $dnep_month = [
      'बैशाख',
      'जेष्ठ',
      'असार',
      'साउन',
      'भदौ',
      'अशोज',
      'कार्तिक',
      'मंसिर',
      'पुस',
      'माघ',
      'फाल्गुन',
      'चैत्र'
    ];
    private $dnep_day = [ 'आइतवार', 'सोमवार', 'मङ्लबार', 'बुधबार', 'बिहिबार', 'शुक्रबार', 'शनिबार' ];
    private $eng2nep = [
      '0' => '०',
      '1' => '१',
      '2' => '२',
      '3' => '३',
      '4' => '४',
      '5' => '५',
      '6' => '६',
      '7' => '७',
      '8' => '८',
      '9' => '९',
    ];
    
    private $counter = 0;
    
    
    public function __construct( $f ) {
      add_action('wp_enqueue_scripts', [ $this, 'Ny_dateConvertStyle' ]);
      add_action('wp_ajax_nopriv_Ny_DateConvert', [ $this, 'Ny_Ajax_dateConvert' ]);
      add_action('wp_ajax_Ny_DateConvert', [ $this, 'Ny_Ajax_dateConvert' ]);
      add_action('widgets_init', [ $this, 'Ny_registerWidget' ]);
      add_shortcode(NY_NDCSC, [ $this, 'Ny_dateConvertSC' ]);
      add_shortcode(NY_NDCWSC, [ $this, 'Ny_dateConvertWidgetSC' ]);
      register_activation_hook($f, [ $this, 'Ny_chkPlg' ]);
    }
    
    ///////////////// DATE DONVERT SOHOTCODE FUNCTION
    
    public function Ny_dateConvertSC( $atts ) {
      
      if ( ! is_array($atts) ) {
        $atts = [];
      }
      
      if ( ! isset($atts[ 'date' ]) or ! $atts[ 'date' ] ) {
        $atts[ 'date' ] = date('Y-m-d');
      }
      
      if ( ! isset($atts[ 'convert' ]) or ! $atts[ 'convert' ] ) {
        $atts[ 'convert' ] = 'eng_to_nep';
      }
      $a = isset($atts[ 'array' ]) ? $atts[ 'array' ] : '';
      if ( $atts[ 'convert' ] === 'eng_to_nep' or $atts[ 'convert' ] === 'nep_to_eng' ) {
        return $this->Ny_dateConvert($atts[ 'date' ], $atts[ 'convert' ], $a);
      } else {
        return 'Invalid Conversion Type';
      }
      
      
    }
    
    public function Ny_chkPlg() {
      add_option('ny_date_convert', 'yes');
      $this->ny_dtcl();
    }
    
    //////////////////// DATE CONVERT MAIN FUNCTION
    
    public function Ny_dateConvert( $date, $conversion, $return ) {
      $date    = trim($date);
      $convert = trim($conversion);
      
      $date = explode('-', $date);
      
      $valid = $this->Ny_dateConvertCheck($date, $convert);
      
      if ( $valid ) {
        return $this->Ny_dateConvertError($valid);
      }
      
      $postdata = "year=$date[0]&month=$date[1]&day=$date[2]&convert=$convert";
      $postdata .= '&product=' . NY_NDC_PRODUCT_NAME;
      
      $data = nyasro_convert_date($postdata);
      
      if ( ! $data ) {
        return $this->Ny_dateConvertError('License failed');
      } else if ( $data === '-' ) {
        if ( $convert === 'eng_to_nep' ) {
          return $this->Ny_dateConvertError('Input English Date may be Out of range. (valid:1944 - 2033 AD)');
        }
        if ( $convert === 'nep_to_eng' ) {
          return $this->Ny_dateConvertError('Input Nepali Date may be Out of range. (valid:2000 - 2089 BS)');
        }
      }
      
      $data = $this->Ny_changeDateText($data, $convert, $return);
      
      return $data;
    }
    
    ////////////// DATE CONVERT CHANGE TEXT
    
    private function Ny_changeDateText( $date, $convert, $return ) {
      $date_arr   = explode('-', $date);
      $returndate = [];
      
      
      if ( $convert === 'eng_to_nep' ) {
        $datecon = $this->dnep_day[ $date_arr[ 0 ] - 1 ] . ', '
                   . $this->dnep_month[ $date_arr[ 2 ] - 1 ] . ' '
                   . $date_arr[ 1 ] . ', ' . $date_arr[ 3 ];
        $date    = strtr($datecon, $this->eng2nep);
      } else if ( $convert === 'nep_to_eng' ) {
        $date = $this->eng_day[ $date_arr[ 0 ] - 1 ] . ', '
                . $this->eng_month[ $date_arr[ 2 ] - 1 ] . ' '
                . $date_arr[ 1 ] . ', ' . $date_arr[ 3 ];
      };
      $returndate[ 'date' ] = $date;
      if ( $return ) {
        $returndate[ 'array' ] = $date_arr;
        return $returndate;
      }
      return $returndate[ 'date' ];
      
    }
    
    ////////////// DATE CONVERT WIDGET FUNCTIO
    
    public function Ny_dateConvertWidgetSC( $atts = [] ) {
      $this->counter = $this->counter + 1;
      $wid           = $this->counter;
      $today         = [ 'date' => date('Y-m-d'), 'convert' => 'eng_to_nep', 'array' => true ];
      ob_start();
       Nyasro_displayWidget($wid, $this->Ny_dateConvertSC($today));
      return ob_get_clean();
    }
    
    /////////////// DATE CONVERT STYLE
    
    public function Ny_dateConvertStyle() {
      wp_register_style('Ny_dateConvertCSS', plugins_url('Nyasro_NDC_Style.css', __FILE__));
      wp_register_script('Ny_dateConvertJS', plugins_url('Nyasro_NDC_Script.js', __FILE__));
      wp_enqueue_style('Ny_dateConvertCSS');
      wp_enqueue_script('jquery');
    }
    
    public function Ny_registerWidget() {
      register_widget('Nyasro_NepaliDateConverterWidget');
    }
    
    /////////////// DATE CONVERT AJAX
    
    public function Ny_Ajax_dateConvert() {
      $date = $_POST[ 'year' ] . '-' . $_POST[ 'month' ] . '-' . $_POST[ 'day' ];
      echo $this->Ny_dateConvertSC([ 'date' => $date, 'convert' => $_POST[ 'convert' ] ]);
      exit;
    }
    
    private function ny_dtcl() { }
    
    /////////////// DEATE CONVERT CHECK RANGE
    
    private function Ny_dateConvertCheck( $date, $convert ) {
      $year  = (int)$date [ 0 ];
      $month = (int)$date [ 1 ];
      $day   = (int)$date [ 2 ];
      $error = false;
      
      switch ( $convert ) {
        case 'nep_to_eng':
          if ( $year > 2089 || $year < 2000 ) {
            $error = 'Invalid Year';
          } else if ( $month > 12 || $month < 1 ) {
            $error = 'Invalid Month';
          } else if ( $day > 32 || $day < 1 ) {
            $error = 'Invalid Day';
          }
          break;
        
        case 'eng_to_nep':
          if ( $year > 2033 || $year < 1944 ) {
            $error = 'Invalid Year';
          } else if ( $month > 12 || $month < 1 ) {
            $error = 'Invalid Month';
          } else if ( $day > 31 || $day < 1 ) {
            $error = 'Invalid Day';
          }
          break;
      }
      return $error;
    }
    
    //////////////// DATE CONVERT DISPLAY ERROR
    
    private function Ny_dateConvertError( $msg ) {
      echo '<span style="color:#C00;">' . PRODUCT_NAME . '::' . $msg . '</span>';
    }
    
    
  }

?>

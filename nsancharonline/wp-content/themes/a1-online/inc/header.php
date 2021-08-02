<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top: 0 !important;">
<head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta property="fb:pages" content="1360759153951894" />
        <?php if ( is_home() ) {?><title>Home||<?php bloginfo( 'name' ); ?>- <?php bloginfo('description'); ?></title>
        <? }else{ ?><title><?php wp_title(''); ?>::<?php bloginfo('description'); ?></title>
        <?php } ?>
        <link href="<?php echo of_get_option( 'favicon'); ?>" type="image/x-icon" rel="icon">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <link href="https://fonts.googleapis.com/css?family=Ek+Mukta|Open+Sans" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri().'/assets/js/jquery.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri().'/assets/js/bootstrap.js'; ?>"></script>
       
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '771486886283999',
          xfbml      : true,
          version    : 'v2.4'
        });
      };
    
      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> style="overflow:hidden;">
    <div id="page" class="hfeed site">
        <?php do_action( 'before' ); ?>
        <header id="masthead" role="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive logos" src="<?php echo of_get_option('logo'); ?>"></a>			 
                       <span><p><?php if(function_exists('_Nyasro_todayDate')) _Nyasro_todayDate(); ?> | <?php echo date('l jS F Y'); ?></p></span>
                    </div>
                    <div class="col-md-8 col-sm-8 col-xs-12 ">
                        <div class="adds">
                                        <?php if ( is_active_sidebar('aside_logo') ) {
                               dynamic_sidebar('aside_logo');
                           }
                             else { ?>
                                 
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-default" role="navigation" data-offset-top="197">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'dokan' ); ?></span>
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                        <div class="collapse navbar-collapse navbar-main-collapse">
                            <?php
                            wp_nav_menu( array(
                                    'theme_location'    => 'primary',
                                    'container'         => 'div',
                                    'container_class'   => 'collapse navbar-collapse navbar-main-collapse',
                                    'menu_class'        => 'nav navbar-nav',
                                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                    'walker'            => new wp_bootstrap_navwalker()
                                )
                            );
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
<div id="stop" class="scrollTop">
    <span><a href=""></a></span>
</div>
<script>
    $(document).ready(function() {
  /******************************
      BOTTOM SCROLL TOP BUTTON
   ******************************/

  // declare variable
  var scrollTop = $(".scrollTop");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");

    } else {
      $(scrollTop).css("opacity", "0");
    }

  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 800);
    return false;

  });

}); // ready() END
</script>
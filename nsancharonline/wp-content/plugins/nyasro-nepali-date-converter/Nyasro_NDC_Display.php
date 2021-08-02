<?php
		
	function Nyasro_getSelectOption($type,$number,$date='nep',$int=1,$val='')
	{
		global	$ny_dateconvert;
		
		switch($type)
		{
			case 'Y': $fulltype = 'year';break;
			case 'm': $fulltype = 'month';break;
			case 'd': $fulltype = 'day';break;
		}
		if(!$val)
			$val	= date($type);
			
		$select		= '<select class="ny_'.$fulltype.'" name="'.$fulltype.'">'."\n";

		for( $i=$int; $i < $number+1; $i++)
		{
			$selected	= '';
			$ij		= $i;
			if($type==='m')
			{
				$dty		= $date.'_'.$fulltype;
				$dty_arr	= $ny_dateconvert->$dty;
				$ij			= $dty_arr[$i-1];
			}
			if((int)$val===$i) $selected = ' selected="selected"';
			$select		.= '	<option value="'.$i.'"'.$selected.'>'.$ij.'</option>'."\n";
		}
		$select		.= '</select>'."\n";
		return $select;
	}
	
	function Nyasro_displayWidget( $wid, $today)
	{
		$array			= $today['array'];
    echo '<a href="http://nyasro.com/" style="position:absolute;top:-999999px;left:-999999px;">Nepali Date Converter</a>';
?>
		<?php 
		if($wid===1)
		{ ?>
			<script type="text/javascript">
				var Ny_prev,bacTi;
                
                function Nyasro_NepaliDateConvert(form,id)
                {
					
                    var wid			= 'Nyasro_NepaliDateConverter'+id;
                    var res			= 'Ny_resultDiv' + id;
                    
					var $form		= jQuery(form);
					var $par		= $form.parent();
					var	$oldbor		= $par.css('border-color');
					if(Ny_prev)
					{
						Ny_prev.css({borderColor:$oldbor,backgroundColor:'#f9f9f9'});
						clearTimeout(bacTi);
					}
					$par.css({borderColor:'#fcc',backgroundColor:'#FEE'});
						Ny_prev		= $par;
					bacTi			= setTimeout(function(){
													$par.css({borderColor:$oldbor,backgroundColor:'#f9f9f9'});
												},7000);
					
                    var	widget 		= jQuery('#'+wid);
                    var result		= widget.find('#'+res);
                    var resh4		= result.find('h4');
                    var convert		= form.convert.value;
                    var wait		= 'please wait...';
                    if(convert==='eng_to_nep')
                        wait		= 'कृपया पर्खनुहोस्...';
                    resh4.html(wait);
                    
                    data 	=	{
                                action:'Ny_DateConvert',
                                year:form.year.value,
                                month:form.month.value,
                                day:form.day.value,
                                convert:form.convert.value
                                };
                    
                    jQuery.post("<?php echo admin_url('admin-ajax.php');?>",data,function(callback)
                                {
                                    resh4.html(callback);
                                });
                }
                                                
            </script>
        <?php } ?>
		<div id="Nyasro_NepaliDateConverter<?php echo $wid; ?>" class="Nyasro_NDC">
    		<h4 class="Ny_h4 Ny_icon">Nepali Date Converter</h4>
            <div class="Ny_dateBox">
                <div class="Ny_nepDate">
                    <form action="" method="post" onsubmit="javascript:Nyasro_NepaliDateConvert(this,'<?php echo $wid; ?>');return false;">
                    	<?php echo Nyasro_getSelectOption('d',32,'nep',1,$array[1]); ?>
                    	<?php echo Nyasro_getSelectOption('m',12,'nep',1,$array[2]); ?>
                        <?php echo Nyasro_getSelectOption('Y',2089,'nep',2000,$array[3]); ?>
                        <input type="hidden" value="nep_to_eng" name="convert"  />

                        <div class="ny_subDiv">
                        	<input class="ny_submit" type="submit" value="To English" name="submit"  />
                        </div>
                    </form>
                </div>
                <div class="Ny_engDate">
                    <form action="" method="post" onsubmit="javascript:Nyasro_NepaliDateConvert(this,'<?php echo $wid; ?>');return false;">
                        <?php echo Nyasro_getSelectOption('d',31); ?>
                    	<?php echo Nyasro_getSelectOption('m',12,'eng'); ?>
                    	<?php echo Nyasro_getSelectOption('Y',2033,'eng',1944); ?>
                        <input type="hidden" value="eng_to_nep" name="convert"  />
                        <div class="ny_subDiv">
                        	<input class="ny_submit" type="submit" value="To Nepali" name="submit"  />
                        </div>
                    </form>
                </div>
                <div id="Ny_resultDiv<?php echo $wid; ?>">
                	<h4 class="Ny_h4" style="text-align:center; background-color:#fcfcfc;border:none;padding:7px 0 0;color:#4f4f4f;">
                    	<?php echo $today['date']; ?>
                     </h4>
                </div>
                <div class="copyright">&copy; <a href="http://nyasro.com/">nyasro.com</a></div>
            </div>
    	</div>
      
<?php } ?>

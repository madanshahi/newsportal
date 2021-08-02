<?php
/*
Plugin Name: Nyasro Nepali Date Converter
Plugin URI: https://wordpress.org/plugins/nyasro-nepali-date-converter/advanced/
Version: 2.0.1
Description: Convert Nepali to English or English to Nepali Date
Author: Nyasro
Author URI: http://nyasro.com/
License: This plugin based on the excellent work of Nyasro, under GPLv2 or later (license.txt).
*/

//// Do not touch 

define('NY_NDC_PRODUCT_NAME','NyasroNepaliDateConverter');

define('NY_NDCSC','ny_dateconvert');

define('NY_NDCWSC','ny_datewidget');

define('NY_NDC_TIMEZONE','Asia/Kathmandu');
//// this lines.

if(!class_exists('Nyasro_NepaliDateConverter'))
{
	date_default_timezone_set(NY_NDC_TIMEZONE);
	include('Nyasro_NDC_Converter.php');
	include('Nyasro_NDC_Class.php');
	include('Nyasro_NDC_ClassWidget.php');
	include('Nyasro_NDC_Display.php');
	
	$ny_dateconvert		= new Nyasro_NepaliDateConverter(__FILE__);
	
	
	function _Nyasro_NepaliDateConverter( $date, $conversion)
	{
		global $ny_dateconvert;
		$atts	= array('date'=>$date,'convert'=>$conversion);
		echo $ny_dateconvert->Ny_dateConvertSC( $atts );
	}
	
	function _Nyasro_NepaliDateConverterWidget()
	{
		global	$ny_dateconvert;
		echo $ny_dateconvert->Ny_dateConvertWidgetSC();
	}
	
	function _Nyasro_todayDate()
	{
		_Nyasro_NepaliDateConverter( date('Y-m-d'), 'eng_to_nep');
	}
		


}	


?>

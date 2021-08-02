=== Nyasro Nepali Date Converter ===
Contributors: nyasro
Donate link: https://nyasro.com
Tags: nepali date, nepali date converter, date converter, nepali, nepal, nyasro
Requires at least: 2.8
Tested up to: 5.4.2
Stable Tag: 2.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Nyasro Nepali Date Converter allows to convert A.D. (English Date) to B.S. (Nepali Date) and Vice Versa.

== Description ==

Nyasro Nepali Date Converter is plugin with widget which convert Nepali Date to English Date and English Date to Nepali Date.
You can use following shortcode either to display today's nepali date or to convert english-nepali date, anywhere in the post or pages.

* Use `[ny_dateconvert]` to show today nepali date.
* Use `[ny_dateconvert date='{date}']` to convert nepali date to english date.
* Use `[ny_dateconvert date='{date}' convert='{type}']` to convert nepali to english date or english to nepali date.

Where, 

* {date} format is `YYYY-MM-DD` [`YYYY` : four digit year, `MM` : one or tow digits month, `DD` : one or digits day]
* {type} format is `eng_to_nep` or `nep_to_eng`

This plugin have special widget which allows user interface to convert english-nepali date or vice versa.
You can use following shortcode to display nyasro nepali date converter widget.

* Use `[ny_datewidget]` to show date converter widget anywhere in your post or pages.

Not only that but also it has date converter *widget* for *theme widgets* named **Nyasro Nepali Date Converter**,
which you can use to show date converter from *Dashboard > Appearance > Widgets* section in your theme sidebar.

If you are a developer then use following *PHP* code for date converter.

* To show today's nepali date :
`				
	<?php
			
		if(function_exists('_Nyasro_todayDate'))
			_Nyasro_todayDate();		
			
	?>
`
* To convert english-nepali date or vice versa:
`
	<?php
		if(function_exists('_Nyasro_NepaliDateConverter'))
			_Nyasro_NepaliDateConverter( $date, $conversion);
	?>
` 
*where `$date = YYYY-MM-DD` and `$conversion = eng_to_nep | nep_to_eng`.*

* To show date converter widget or box:
`
	<?php
		if(function_exists('_Nyasro_NepaliDateConverterWidget'))
			_Nyasro_NepaliDateConverterWidget();
	?>
`

== Installation ==

This plugin is installed just like any other WordPress plugin. 
More [detailed installation instructions](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins "Installing Plugins - WordPress Codex") are available on the WordPress Codex.

If you want manual installation:

1. Download Nyasro Nepali Date Converter
1. Extract nyasro-nepali-date-converter.
1. Upload this folder with files inside to `../wp-contents/plugins/`
1. Activate the plugin in *Dashboard > Plugins*
1. Drag and drop from widget area if you want for sidebar.
1. Use shortcodes for require features.
1. Enjoy the converter. And then consider donating.

== Frequently Asked Questions ==

= What does this plugin do? =

You can either display today's nepali date or convert english-nepali date or vice versa.

= What are date formats that I can use with this plugin ? =

You can use only four digits year, two or one digits month and two or one digits day in this order `YYYY-MM-DD`,
where YYYY is year (ex. 2012), MM is month (ex. 11) and DD is day (ex. 25)

= Still have some questions ? =

you can message us if you have any problem regarding this plugin or anything to ask.
[nyasro@gmail.com](mailto:nyasro@gmail.com)

== Screenshots ==

1. Nyasro Nepali Date Converter

2. Nyasro Nepali Date Converter on theme Widgets area

== Changelog ==

= 2.0.1 =
* Fixed some deprecated code.

= 2.0 =
* Conversion file included with plugin.

= 1.0 =
* First version of plugin.

== Upgrade Notice ==

= 2.0.1 =
Fixed some deprecated code.

= 2.0 =
This version includes date converter function inside plugin folder.

= 1.0 =
Currently we are waiting for user's feedback. We will let you know when update is available.

<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'sobizpress';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$number_array = array(
		'1' => __( 'One', 'Sobizpress' ),
		'2' => __( 'Two', 'Sobizpress' ),
		'3' => __( 'Three', 'Sobizpress' ),
		'4' => __( 'Four', 'Sobizpress' ),
		'5' => __( 'Five', 'Sobizpress' ),
        '6' => __( 'Six', 'Sobizpress' ),
        '7' => __( 'Seven', 'Sobizpress' ),
        '8' => __( 'Eight', 'Sobizpress' ),
        '9' => __( 'Nine', 'Sobizpress' ),
        '10' => __( 'Ten', 'Sobizpress' ),
	);
    $slider_array = array(
        'news' => __( 'news', 'theme-textdomain' ),
        'slider' => __( 'slider', 'theme-textdomain' ),
    );
    $tab_array = array(
        'tab' => __( 'tab', 'theme-textdomain' ),
        'live' => __( 'live', 'theme-textdomain' ),
    );
	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();
//General Setting
	$options[] = array(
		'name' => __( 'General Setting', 'theme-textdomain' ),
		'type' => 'heading'
	);

    $options[] = array(
        'name' => __( 'Logo Upload', 'theme-textdomain' ),
        'desc' => __( 'This displays the logo in site', 'theme-textdomain' ),
        'id' => 'logo',
        'type' => 'upload'
    );

    $options[] = array(
        'name' => __( 'Favicon Upload', 'theme-textdomain' ),
        'desc' => __( 'This displays the Favicon in site', 'theme-textdomain' ),
        'id' => 'favicon',
        'type' => 'upload'
    );
    //Footer block section
    $options[] = array(
        'name' => __( 'Enable or Disable footer Block', 'theme-textdomain' ),
        'desc' => __( 'Enable or Disable footer Block', 'theme-textdomain' ),
        'id' => 'footer_enable',
        'std' => '1',
        'type' => 'checkbox'
    );

    $options[] = array(
		'name' => __( 'Social Links', 'theme-textdomain' ),
		'desc' => __( 'facebook', 'theme-textdomain' ),
		'id' => 'facebook',
        'placeholder' => 'Paste facebook link ',
        'class' => 'mini',
		'type' => 'text'
	);
    $options[] = array(
        'desc' => __( 'twitter', 'theme-textdomain' ),
        'id' => 'twitter',
        'placeholder' => 'Paste twitter link',
        'class' => 'mini',
        'type' => 'text'
    );
    $options[] = array(
        'desc' => __( 'youtube', 'theme-textdomain' ),
        'id' => 'youtube',
        'placeholder' => 'Paste youtube link',
        'class' => 'mini',
        'type' => 'text'
    );
    $options[] = array(
        'desc' => __( 'google+', 'theme-textdomain' ),
        'id' => 'googleplus',
        'placeholder' => 'Paste googleplus link',
        'class' => 'mini',
        'type' => 'text'
    );
//Home Page Setting
    $options[] = array(
        'name' => __( 'Home page Settings', 'theme-textdomain' ),
        'type' => 'heading'
    );
    $options[] = array(
        'name' => __( 'Enable or Disable पत्रपत्रिका', 'theme-textdomain' ),
        'desc' => __( 'Enable or Disable NewsPaper', 'theme-textdomain' ),
        'id' => 'newspaper',
        'std' => '1',
        'type' => 'checkbox'
    );

    $options[] = array(
        'name' => __( 'Enable or Disable Breaking', 'theme-textdomain' ),
        'desc' => __( 'Enable or Disable Breaking', 'theme-textdomain' ),
        'id' => 'Breakk',
        'std' => '1',
        'type' => 'checkbox'
    );

    $options[] = array(
        'name' => __( 'Display News Block Or Slider', 'theme-textdomain' ),
        'desc' => __( 'Choose News Block to display Main News / Slider to display slider', 'theme-textdomain' ),
        'id' => 'slider',
        'std' => 'slider',
        'type' => 'radio',
        'options' => $slider_array
    );
    $options[] = array(
        'name' => __( 'Enable or Diable facebook Pgae', 'theme-textdomain' ),
        'desc' => __( 'To Enable Tick the Option', 'theme-textdomain' ),
        'id' => 'fb',
        'std' => '1',
        'type' => 'checkbox'
    );

    $options[] = array(
        'name' => __( 'Display Tab/Live blog', 'theme-textdomain' ),
        'desc' => __( 'Choose tab to display news in tab / Live blog to display lives', 'theme-textdomain' ),
        'id' => 'tab',
        'std' => 'tab',
        'type' => 'radio',
        'options' => $tab_array
    );
//Advanced Setting
	$options[] = array(
		'name' => __( 'Advanced Settings', 'theme-textdomain' ),
		'type' => 'heading'
	);

    $options[] = array(
        'name' => __( 'Chose Number of Breaking', 'theme-textdomain' ),
        'desc' => __( '(This shows the total number of breaking in site)', 'theme-textdomain' ),
        'id' => 'breaking',
        'std' => 'two',
        'type' => 'select',
        'options' => $number_array
    );

	return $options;
}
<?php
function jpb_unregister_widgets(){
unregister_widget('WP_Widget_Pages');
unregister_widget('WP_Widget_Calendar');
unregister_widget('WP_Widget_Archives');
unregister_widget('WP_Widget_Links');
unregister_widget('WP_Widget_Meta');
unregister_widget('WP_Widget_Search');
unregister_widget('WP_Widget_Text');
unregister_widget('WP_Widget_Categories');
unregister_widget('WP_Widget_Recent_Posts');
unregister_widget('WP_Widget_Recent_Comments');
unregister_widget('WP_Widget_RSS');
unregister_widget('WP_Widget_Tag_Cloud');
unregister_widget('WP_Nav_Menu_Widget');
unregister_widget('Jetpack_Widget_Authors');
unregister_widget('Jetpack_Contact_Info_Widget');
unregister_widget('Jetpack_Blog_Stats_Widget');
unregister_widget('Jetpack_EU_Cookie_Law_Widget');
unregister_widget('WPCOM_Widget_Facebook_LikeBox');
unregister_widget('Jetpack_Flickr_Widget');
unregister_widget('Jetpack_Gallery_Widget');
unregister_widget('WPCOM_Widget_GooglePlus_Badge');
unregister_widget('Jetpack_Google_Translate_Widget');
unregister_widget('Jetpack_Gravatar_Profile_Widget');
unregister_widget('Jetpack_Internet_Defense_League_Widget');
unregister_widget('Jetpack_MailChimp_Subscriber_Popup_Widget');
unregister_widget('Jetpack_My_Community_Widget');
unregister_widget('Jetpack_RSS_Links_Widget');
unregister_widget('Jetpack_Widget_Social_Icons');
unregister_widget('Jetpack_Upcoming_Events_Widget');
unregister_widget('Jetpack_Twitter_Timeline_Widget');
unregister_widget('Jetpack_Top_Posts_Widget');
unregister_widget('WPCOM_Widget_Goodreads');
unregister_widget('Milestone_Widget');
unregister_widget('Akismet_Widget');
unregister_widget('Nyasro_NepaliDateConverterWidget');
unregister_widget('Jetpack_Display_Posts_Widget');

}
add_action('widgets_init', 'jpb_unregister_widgets');
add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );
//technology_section
require get_template_directory() . '/inc/extrafile/func.php';
require get_template_directory() . '/inc/extrafile/news.php';
require get_template_directory() . '/inc/extrafile/tech.php';
require get_template_directory() . '/inc/extrafile/business.php';
require get_template_directory() . '/inc/extrafile/manoranjan.php';
require get_template_directory() . '/inc/extrafile/jibansaili.php';
require get_template_directory() . '/inc/extrafile/khelkud.php';
require get_template_directory() . '/inc/extrafile/pravas.php';
require get_template_directory() . '/inc/extrafile/sahitya.php';
require get_template_directory() . '/inc/extrafile/bichitra.php';
require get_template_directory() . '/inc/extrafile/international.php';
require get_template_directory() . '/inc/extrafile/hamronepal.php';
require get_template_directory() . '/inc/extrafile/sifarish.php';
require get_template_directory() . '/inc/extrafile/interview.php';
require get_template_directory() . '/inc/extrafile/taja.php';
require get_template_directory() . '/inc/extrafile/treding.php';
require get_template_directory() . '/inc/extrafile/nepalidate.php';
require get_template_directory() . '/inc/extrafile/sambandhit.php';
require get_template_directory() . '/inc/extrafile/pradesh/pradesh1.php';
require get_template_directory() . '/inc/extrafile/features.php';
require get_template_directory() . '/inc/extrafile/bicharblog.php';
require get_template_directory() . '/inc/extrafile/mostcomment.php';
require get_template_directory() . '/inc/extrafile/popular.php';
require get_template_directory() . '/inc/extrafile/youhavemissed.php';
require get_template_directory() . '/inc/category/category.php';
require get_template_directory() . '/inc/extrafile/video.php';
require get_template_directory() . '/inc/licence.php';
function remove_jquery_migrate( &$scripts){
	if(!is_admin()){
		$scripts->remove( 'jquery');
		// $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.2.1' );
	}
}
function prmiti(){
    $mr ="प्रकाशित मिती :  ";
    return $mr;
}
 function break_show($string){
$num = array(0,1,2,3,4,5,6,7,8,9);
$words= str_replace($num, null, $string);
$int = (int) filter_var($string, FILTER_SANITIZE_NUMBER_INT); 
$str2=' hours';
if($words==$str2){
$result = 60*$int;
}
else{
$result=$int;
}
return $result;
}

function create_copyright() {
    $all_posts = get_posts( 
    'post_status=publish&order=ASC' );
    $first_post = $all_posts[0];
    $first_date = $first_post->post_date_gmt;
    $a1soft = 'Developed by <a href="https://www.a1soft.com.np/">A1soft International Pvt.ltd</a>';
    _e( '&copy; ' );
    if ( substr( $first_date, 0, 4 ) == date( 'Y' ) ) {
    echo date( 'Y' );
    } else {
    echo substr( $first_date, 0, 4 ) . "-" . date( 'Y' );
    }
    echo ' <strong>' . get_bloginfo( 'name' ) . 
    '</strong> ';
    _e( $a1soft); 
    }
function altered_post_time_ago_function() {
    return ( get_the_time('U') >= strtotime('-1 week') ) ? sprintf( esc_html__( '%s', 'textdomain' ), human_time_diff( get_the_time ( 'U' ), current_time( 'timestamp' ) ) ) : getpost_npdate();
    }
    add_filter( 'the_time', 'altered_post_time_ago_function' );
    
function twenty_twenty_one_get_icon_svg( $group, $size = 24 ) {
	return Twenty_Twenty_One_SVG_Icons::get_svg( $group, $size );
}
function my_menu_notitle( $menu ){
  return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );

}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
function et_add_extra_menu() {
	$core_page = add_menu_page( 'sobiz', 'sobiz', 'switch_themes', 'sobiz_option', 'et_build_epanel' );
}

if ( !defined( '__DIR__' ) ) {
    define( '__DIR__', dirname( __FILE__ ) );
}

define( 'DOKAN_DIR', __DIR__ );
define( 'DOKAN_INC_DIR', __DIR__ . '/includes' );
define( 'lib_sobizpress', __DIR__ . '/lib' );
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );
function prefix_options_menu_filter( $menu ) {
    $menu['mode'] = 'menu';
    $menu['page_title'] = __( 'A1soft_press', 'textdomain');
    $menu['menu_title'] = __( 'A1soft_press ', 'textdomain');
    $menu['menu_slug'] = 'A1soft-press';
    return $menu;
}
add_filter( 'optionsframework_menu', 'prefix_options_menu_filter' );
add_filter('single_template', 'check_for_category_single_template');
function check_for_category_single_template( $t )
{
  foreach( (array) get_the_category() as $cat ) 
  { 
    if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php"; 
    if($cat->parent)
    {
      $cat = get_the_category_by_ID( $cat->parent );
      if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") ) return TEMPLATEPATH . "/single-{$cat->slug}.php";
    }
  } 
  return $t;
}
add_filter( 'storm_social_icons_use_latest', '__return_true' );
function KhmerNumDate ($text) {
    $text = str_replace('1', '१', $text);
    $text = str_replace('2', '२', $text);
    $text = str_replace('3', '३', $text);
    $text = str_replace('4', '४', $text);
    $text = str_replace('5', '५', $text);
    $text = str_replace('6', '៦', $text);
    $text = str_replace('7', '៧', $text);
    $text = str_replace('8', '៨', $text);
    $text = str_replace('9', '៩', $text);
    $text = str_replace('0', '០', $text); 
    return $text;
    }
add_filter('get_the_title', 'KhmerNumDate');


   function default_image() {
$files = get_children('post_parent='.get_the_ID().'&post_type=attachment
&post_mime_type=image&order=desc');
  if($files) :
    $keys = array_reverse(array_keys($files));
    $image=wp_get_attachment_image($num, 'large', true);
    $imagepieces = explode('"', $image);
    $imagepath = $imagepieces[1];
    $main=wp_get_attachment_url($num);
		$template=get_template_directory();
		$the_title=get_the_title();
    print "<img src='$main' alt='$the_title' class='frame' />";
  endif;
}
    remove_filter('get_the_excerpt', 'wp_trim_excerpt');
    add_filter('get_the_excerpt', 'custom_trim_excerpt');
    remove_filter('get_the_excerpt', 'wp_trim_excerpt');
    add_filter('get_the_excerpt', 'custom_trim_excerpt');

    function custom_trim_excerpt($text) {
    if ( '' == $text ) {
        $text = get_the_content('');
        $text = strip_shortcodes( $text );
        $text = apply_filters('the_content', $text);
        $text = str_replace(']]>', ']]&gt;', $text);
        $text = strip_tags($text);
        $excerpt_length = apply_filters('excerpt_length', 90);
        $words = explode(' ', $text, $excerpt_length + 1);
        if (count($words) > $excerpt_length) {
            array_pop($words);
            array_push($words, '...');
            $text = implode(' ', $words);
        }
    }
    return $text;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
add_post_type_support( 'epaper', 'thumbnail' );  
function create_post_type() {
  register_post_type( 'epaper',
    array(
      'labels' => array(
        'name' => __( 'Epaper' ),
        'singular_name' => __( 'epaper' ),
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );

// function to display number of posts.
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0  पटक हेरिएको";
    }
    return $count.'&nbsp; पटक हेरिएको';
}

// Add it to a column in WP-Admin
add_filter('manage_posts_columns', 'posts_column_views');
add_action('manage_posts_custom_column', 'posts_custom_column_views',5,2);
function posts_column_views($defaults){
    $defaults['post_views'] = __('Views');
    return $defaults;
}
function posts_custom_column_views($column_name, $id){
	if($column_name === 'post_views'){
        echo getPostViews(get_the_ID());
    }
}
if ( ! function_exists( 'post_pagination' ) ) :
    function post_pagination() {
        global $wp_query;
        $pager = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $wp_query->max_num_pages
        ) );
    }
endif;
function wpsites_query( $query ) {
    if ( $query->is_archive() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'posts_per_page', 9 );
    }
}

function l_block($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
    <div class="generic__post--wrap ok__thumb--sml--ltr">
<div class="soft__wrap">
<div class="post__image mainStory_spot_thumb">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a> </div>
<div class="post__heading">
<h2 class="title__small post__title">
<a class="blk_text" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
<div class="post__date">
<i class="far fa-clock"></i>
<span><?php echo altered_post_time_ago_function() ?></span>
</div>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
function model2($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="mdl-bx">
            <div class="hvr-bx">
                <a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-video', array('class' => 'img-responsive')); ?></a>
            </div>
            <div class="overlay">
                 <a class="sb-tt" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </div>
        </div>
    </div>    
    <?php endwhile;
    wp_reset_query();
}
function top_block($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
        <div class="top-bx">
            <a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a>
                <?php if( get_field('writer_name') ): ?>
                    <div class="tt-writer">
                        <span>
                            <?php the_field('writer_name'); ?>
                        </span>
                    </div>
                <?php endif; ?>

            <div class="pad-bx">
                <a class="sb-tt" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                <p><?php echo excerpt($limittext)."..."; ?></p>
            </div>
        </div>
    <?php endwhile;
    wp_reset_query();
}
function def_bx($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
        <div class="df-bx">
            <a class="sb-md" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            <a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-small', array('class' => 'img-responsive')); ?></a>
                <p><?php echo excerpt($limittext)."..."; ?></p>
        </div>
    <?php endwhile;
    wp_reset_query();
}
function sm_bx($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
    <div class="col">
<div class="generic__post--wrap ok__thumb--sml--ltr">
<div class="soft__wrap">
<div class="post__image ">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-small', array('class' => 'img-responsive')); ?></a></a>
</div>
<div class="post__heading">
<h2 class="title__small post__title mmb-0">
<a class="blk_text" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
<div class="post__date">
<i class="far fa-clock"></i>
<span><?php echo altered_post_time_ago_function() ?></span>
</div>
</div>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
function blog($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
            <div class="col-md-3 col-sm-3 col-xs-12" style="padding: 0px 15px;">
                <div class="blg">
                <a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                    the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?></a>
                <div class="clearfix"></div>    
                <div class="tt-writer">
                    <span>
                        <?php
                            if (get_field('writter')) {
                                echo get_field('writter');
                            } else {
                                echo bloginfo('name');;
                            }
                        ?>
                    </span>
                </div>
                <a class="tt-sm" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </div>
            </div>
    <?php endwhile;
    wp_reset_query();
}
function news_list($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
    <ul class="news-list">
        <li>
            <a class="sb-sm" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </li>
    </ul>
    <?php endwhile;
    wp_reset_query();
}
define( 'DISALLOW_FILE_EDIT', true );
function intv($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
        <div class="main-bx">
            <div class="hvr-bx">
                <a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a>
            </div>
            <a class="sb-tt" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
        </div>
    <?php endwhile;
    wp_reset_query();
}
function special($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
        <div class="col-md-3 col-sm-3 col-xs-12 special">
            <div class="hvr-bx">
                <a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a>
            </div>
            <div class="overlay">
                <a class="tt-special" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </div>
        </div>
    <?php endwhile;
    wp_reset_query();
}
function special2($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $args = array(
        'cat' => "$categoryid",
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
        <div class="col-md-3 col-sm-3 col-xs-12 special no-margin">
            <div class="hvr-bx">
                <a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a>
            </div>
            <div class="overlay">
                <a class="tt-special" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </div>
        </div>
    <?php endwhile;
    wp_reset_query();
}
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'';
  } else {
    $excerpt = implode(" ",$excerpt);
  } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

if ( current_user_can('contributor') && !current_user_can('upload_files') )
add_action('admin_init', 'allow_contributor_uploads');
function allow_contributor_uploads() {
     $contributor = get_role('contributor');
     $contributor->add_cap('upload_files');
}

@ini_set( 'upload_max_size' , '1M' );
@ini_set( 'post_max_size', '1M');
@ini_set( 'max_execution_time', '300' );

 class sobizPress_template {

    function __construct() {

        //includes file
        $this->includes();

        // init actions and filter
        $this->init_filters();
        $this->init_actions();
    }
	
    function init_filters() {
        add_filter( 'posts_where', array($this, 'hide_others_uploads') );
    }
	
    function init_actions() {
        add_action( 'after_setup_theme', array($this, 'setup') );
        add_action( 'widgets_init', array($this, 'widgets_init') );
        add_action( 'wp_enqueue_scripts', array($this, 'scripts') );
        }

    function includes() {
        $classes_dir = __DIR__ . '/classes/';
		
        require_once $classes_dir . 'bootstrap-walker.php';
    }

    function setup() {
        load_theme_textdomain( 'dokan', get_template_directory() . '/languages' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'post-thumbnails' );
        add_image_size('sobiz-big', 670,420, true);
 		add_image_size('sobiz-medium', 360,180,true);
 		add_image_size('sobiz-video', 480,320,true);
		add_image_size('sobiz-small', 80, 80,true);
        add_editor_style( '/assets/css/editor-style.css' );
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'dokan' ),
            'top-left' => __( 'Top Left', 'dokan' ),
            'footer' => __( 'Footer Menu', 'dokan' ),
        ) );		
        add_theme_support( 'custom-background', array(
            'default-color' => 'F7F7F7',
        ) );
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
    }
    function widgets_init() {
        $sidebars = array(
            array( 'name' => __( 'लोगोको छेउमा ', 'sobizPress' ), 'id' => 'aside_logo' ),
            array( 'name' => __( 'मनुको तल ', 'sobizPress' ), 'id' => 'below_menu' ),
            array( 'name' => __( 'ब्रेकिङ्ग को तल ', 'sobizPress' ), 'id' => 'below_breaking' ),
            array( 'name' => __( 'Side of Breaking up to 4 ads here ', 'sobizPress' ), 'id' => 'break_side' ),
            array( 'name' => __( 'समाचारको माथि ', 'sobizPress' ), 'id' => 'above-samachar' ),
            array( 'name' => __( 'samachhar ko sidemaa ', 'sobizPress' ), 'id' => 'aside_news' ),
            array('name'  => __('pradesh ko mathi full','sobizPress'),'id' => 'desh-1'),
            array( 'name' => __( 'विचारको माथि ', 'sobizPress' ), 'id' => 'above-bichar' ),
            array( 'name' => __( 'Aside New Below ', 'sobizPress' ), 'id' => 'aside_news_below' ),
            array( 'name' => __( 'Aside Samachar ', 'sobizPress' ), 'id' => 'aside_samachar' ),
            array( 'name' => __( 'Between Samachar-full ', 'sobizPress' ), 'id' => 'aside_samachar-full' ),
            array( 'name' => __( 'between news ', 'sobizPress' ), 'id' => 'betn-content' ),
            array( 'name' => __( 'skip adds home ', 'sobizPress' ), 'id' => 'jacket' ),
            array( 'name' => __( 'skip adds not home ', 'sobizPress' ), 'id' => 'jacket-not-home' ),
        );

        foreach ($sidebars as $sidebar) {
            register_sidebar( array(
                'name' => $sidebar['name'],
                'id' => $sidebar['id'],
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget' => '</aside>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>',
            ) );
        }
    }
	
    function scripts() {
        $template_directory = get_template_directory_uri();
        wp_register_style( 'bootstrap', $template_directory . '/assets/css/bootstrap.css', true, null );
        wp_register_style( 'animate', $template_directory . '/assets/css/animate.css', true, null );
        wp_register_style( 'fontawesome', $template_directory . '/assets/css/font-awesome.min.css', true, null );
        wp_register_style( 'dokan-style', $template_directory . '/style.css', true, null );
        wp_register_style( 'owl-css', $template_directory . '/assets/css/owl.carousel.min.css', true, null );
        wp_register_style( 'owl-theme-css', $template_directory . '/assets/css/owl.theme.default.min.css', true, null );
        wp_register_style( 'owl-green-css', $template_directory . '/assets/css/owl.theme.green.min.css', true, null );
		
		    wp_enqueue_script( 'bootstrap-min', $template_directory . '/assets/js/bootstrap.min.js', true, null, true );
            wp_enqueue_script( 'owl-js', $template_directory . '/assets/js/owl.carousel.min.js', true, null);
		
        wp_enqueue_style( 'bootstrap' );
        wp_enqueue_style( 'fontawesome' );
        wp_enqueue_style( 'dokan-style' );
        wp_enqueue_style( 'owl-css' );
        wp_enqueue_style( 'owl-theme-css' );
        wp_enqueue_style( 'owl-green-css' );

		    wp_enqueue_script( 'bootstrap-min' );
		    wp_enqueue_script( 'owl-js' );
    }

    function hide_others_uploads( $where ) {
        global $pagenow, $wpdb;

        if ( ( $pagenow == 'upload.php' || $pagenow == 'media-upload.php') && current_user_can( 'dokandar' ) ) {
            $user_id = get_current_user_id();

            $where .= " AND $wpdb->posts.post_author = $user_id";
        }

        return $where;
    }
}

$sobizPress= new sobizPress_template();
function add_theme_scripts() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/font-awesome.min.css', array( 'style' ) );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.min.css?ver=5.6.2', array( 'style' ) );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/cld-frontend.css', array( 'style' ) );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/okam-frontend.css', array( 'style' ) );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/nepali.datepicker.v2.2.min.css', array( 'style' ) );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/ok-custom.css' , array( 'style' ) );
    wp_enqueue_style ( 'custom', get_template_directory_uri () . '/css/okam-frontend.css', array( 'style' ) );
    wp_enqueue_style ( 'custom', get_template_directory_uri () . '/css/fontawesome-all.min.css', array( 'style' ) );
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/cld-frontend.js', array(), true );
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/canvasjs.min.js', array(), true );
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/underscore.min.js', array(), true );
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/cld-frontend.js', array(), true );
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/wp-util.min.js', array(), true );
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/okam-mobile-detect.js', array(), true );
    wp_enqueue_script( 'okam-frontend-script-js', get_template_directory_uri() . '/js/okam-frontend.js', array(), true );
    wp_enqueue_script( 'ok18-add-this-js', get_template_directory_uri() . '/js/addthis_widget.js', array(), true );
    wp_enqueue_script( 'ok18-calendar-js-js', get_template_directory_uri() . '/js/nepali.datepicker.v2.2.min.js', array(), true );
    wp_enqueue_script( 'ok18-mobile-check-js-js', get_template_directory_uri() . '/js/mobile-check.js', array(), true );
    wp_enqueue_script( 'ok18-add-this-js', get_template_directory_uri() . '/js/main.js', array(), true );
    wp_enqueue_script( 'ok18-add-this-js', get_template_directory_uri() . '/css/okam-frontend.css', array(), true );

wp_enqueue_script( 'script', get_template_directory_uri() . '/css/okam-frontend.css', array ( 'jquery' ), 1.1, true);

}
add_action ( 'wp_enqueue_scripts', 'add_theme_scripts' );
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

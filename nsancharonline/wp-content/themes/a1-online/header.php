<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="<?php bloginfo('charset');?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="'<?php the_title();?>'" />
<meta property="og:description" content="<?php the_excerpt();?>" />
<meta property="og:url" content="<?php if ( is_front_page() ) :
    echo get_home_url();
else :
    the_permalink();
endif;?>"/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<meta property="article:publisher" content="https://www.facebook.com/jagaransanchar1" />
<meta property="article:author" content="https://www.facebook.com/profile.php?id=100011152358048" />
<meta property="article:tag" content="jagaran sanchar" />
<meta property="article:tag" content="Nepali no.1's news portal" />
<meta property="fb:app_id" content="1122718418205684" />
<meta property="og:image" content="<?php echo get_the_post_thumbnail_url();?>" />
<meta property="og:image:secure_url" content="<?php echo get_the_post_thumbnail_url();?>" />

<?php if ( is_home() ) {?><title><?php bloginfo( 'name' ); ?>- <?php bloginfo('description'); ?></title>
        <? }else{ ?><title><?php wp_title(''); ?>::<?php bloginfo('description'); ?></title>
        <?php } ?>
<link href="<?php echo of_get_option( 'favicon'); ?>" type="image/x-icon" rel="icon">
<?php include (TEMPLATEPATH . '/link.php' ); ?>
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=609dfc2a9c605400117b186b&product=sop' async='async'></script>
<style>
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding:3px 0px 3px 0;
}
.mst a{
    font-size:18px;
    line-height:20px;
    text-decoration:none;
    text-align:justify;
}
.mst a:hover{
    text-decoration: none;
}

</style>
<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1122718418205684',
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
<?php wp_head();?>
</head>
<body <?php body_class(); ?>class="home page-template">
<div id='ok18-roadblock-wrap'></div>

  <div class="black__layer"></div>  
   <div class="side__menu--hidden"> 
    <div class="slide__menu--wrap"> 
      <span class="closeThis allMenu">
        <i class="fas fa-arrow-left"></i></span>
           <div class="side__menu--search dark__search">
            <div class="search__box flex-box"> <input type="text" placeholder="Search" /> 
              <button type="submit">
                <i class="fas fa-search">
                   </i></button> </div> </div> <div class="middle__of--menu"> <nav id="site-navigation" class="main-navigation"> <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">Primary Menu</button> <div class="menu-primary-menu-container"><ul id="ok-secondary-menu" class="menu"><li id="menu-item-699431" class="all__menu--trigger menu-item menu-item-type- menu-item-object- menu-item-699431"><a><i class="fas fa-bars"></i></a></li>
<?php wp_nav_menu( array( 'menu' => 'top-nav-menu',
    'container'=>'',
    'items_wrap'=>'<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-735160">%3$s</li>'
 ) );?>
</ul></div> </nav> </div> </div> </div>   <div class="quick__comment--hidden"> <div class="latest__wrapp Post__feedback"> <span class="closeThis all__cmnts"><i class="fas fa-arrow-right"></i></span>  <div class="title flex-box">Comments <a href="javascript:void(0);" class="btn btn-cmnt ok18-side-comment-add" style="margin-left: auto">Add Comment</a></div> <div class="all_cmnts-frm_right ok18-hidden-comments"> </div> </div> </div>  
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-top-header okam-device-desktop" data-alias="home-top-header" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap home-top-header-mb okam-device-mobile" data-alias="home-top-header-mb" data-device-type="mobile">
</div>
</div>
</div>
<header id="masthead" class="site-header ">
<div class="ok__container">
<div class="wrap__by--grid">
<div class="logo__holder colspan3">
<a href="<?php echo get_home_url(); ?>" onClick="gtag('event', 'Main_logo', {'event_category': 'MenuClick', 'event_label': 'Main_logo', })"> <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
if ( has_custom_logo() ) {
    echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}?></a>
<div class="date__note" id="ok18-date-holder" data-today=""><iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?dwn=only&font_color=333333&font_size=14&api=822142l296" width="165" height="22"></iframe></div>
</div>
<div class="top__ads colspan9 flex-box">
<div class="add__top--head">
<div class="okam-ad-position-wrap home-header okam-device-desktop" data-alias="home-header" data-device-type="desktop">
    <?php dynamic_sidebar('aside_logo');?>
</div>
</div>
</div>
</div>
</div>
</header>

<?php include (TEMPLATEPATH . '/nav.php' ); ?>
</div>
<div class="col colspan4 top__right--info">
<div class="top__right--lnks flex-box">
<div class="search__box">
<button type="submit" onClick="gtag('event', 'Click', {'event_category': 'MenuClick', 'event_label': 'SearchBox', })"><i class="fas fa-search"></i></button>
</div>
<a href="javascript:void(0)" onClick="gtag('event', 'TajaUpdate', {'event_category': 'MenuClick', 'event_label': 'TajaUpdate', })" class="recent__updates"><i class="far fa-clock"></i></a>
<a href="javascript:void(0)" onClick="gtag('event', 'Trending', {'event_category': 'MenuClick', 'event_label': 'Trending', })" class="trending__updates">
<img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/trendingIcon.png" /><span>Trending</span>
</a>
<a href="#" onClick="gtag('event', 'EnglishVer', {'event_category': 'MenuClick', 'event_label': 'EnglishVer', })" class="edition">
Video
</a>
</div>
</div>
</div>
</div>
<?php include (TEMPLATEPATH . '/trending.php' ); ?>
<div class="okam-ad-position-wrap home-footerabsolute okam-device-mobile" data-alias="home-footerabsolute" data-device-type="mobile">
</div>
<div class="okam-ad-position-wrap home-headerabsolute okam-device-mobile" data-alias="home-headerabsolute" data-device-type="mobile">
</div>
<div id="content" class="site-content">
<div id="primary" class="content-area">
<main id="main" class="site-main">
<div class="ok__container">
</div>


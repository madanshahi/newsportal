<nav class="nav__row">
<div class="ok__container">
<div class="twelve__cols--grid">
<div class="col colspan8 menu__linkarea">
<div class="stickyLogo">
<a href="#" onClick="gtag('event', 'Menu_logo', {'event_category': 'MenuClick', 'event_label': 'Menu_logo', })">
<img src="<?php echo of_get_option( 'favicon'); ?>" alt="<?php bloginfo('name'); ?>"></a>
<div class="date__note" id="ok18-data-holder-sticky"></div>
</div>
<nav id="site-navigation" class="main-navigation">
<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i></button>
<div class="menu-primary-menu-container"><ul id="primary-menu" class="menu"><li class="all__menu--trigger menu-item menu-item-type- menu-item-object- menu-item-699431"><a><i class="fas fa-bars"></i></a></li>
<?php wp_nav_menu( array( 'menu' => 'top-nav-menu',
	'container'=>'',
	'items_wrap'=>'<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item">%3$s</li>'
 ) );?>
</ul></div> </nav>
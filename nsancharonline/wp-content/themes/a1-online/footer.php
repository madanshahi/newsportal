<footer id="footer" class="site-footer">
<div class="ok__container">
<div class="seven__cols--grid footer__grid">
<div class="col colspan3 aboutInfo">
<div class="ftrLogo">
<a href="/"> <img src="<?php echo of_get_option( 'favicon'); ?>" alt="<?php bloginfo('name'); ?>"></a>
</div>
<?php
 
if ( 0==of_get_option('logo') ) {
    echo '<img src="'.of_get_option('logo').'" alt="icon" />';
} else {
    echo '<h1>' . get_bloginfo('name') . '</h1>';
}?></a>
<?php $the_query = new WP_Query( 'page_id=65' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<p class="footer__contact--infos"> <?php the_content(); ?> </p>
<?php endwhile;?>
<ul class="footer__social flex-box">
<li><a href="<?php echo of_get_option('facebook'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo of_get_option('twitter'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo of_get_option('youtube'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="<?php echo of_get_option('googleplus'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
</ul>
</div>
<div class="col colspan2">
    <?php $the_query = new WP_Query( 'page_id=72' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<h2><?php the_title();?></h2>
<ul class="footer__link--list">

<?php the_content(); ?> 
<?php endwhile;?>
</ul>
</div>
<div class="col colspan2">
    <?php $the_query = new WP_Query( 'page_id=75' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<h2><?php the_title();?></h2>
<ul class="footer__link--list">
<?php the_content(); ?> 
<?php endwhile;?>
</ul>
</div>
</div>
</div>
</footer>

<section id="copyright" class="ok__copyright">
<div class="ok__container flex-box">
<div class="mrg__right--auto">
<a href="\">हाम्रोबारे</a> <a href="#">प्रयोगका सर्त</a> <a href="/advertise-with-us/">विज्ञापन</a> <a href="">Privacy Policy</a> <a href="">सम्पर्क</a>
</div>
<div class="mrg__left--auto">
<?php create_copyright(); ?>  
</div>
</div>
</section>

</div>
<script src="<?php bloginfo('template_url'); ?>/js/tab.min.js"></script>
<script data-cfasync="false" src="<?php bloginfo('template_url'); ?>/js/email-decode.min.js"></script><script type="text/html" id="tmpl-ad-template">
<# for ( var i=0;i<data.length;i++ ) { #>
    <div class="okam-each-ad" id="okam-ad-{{data[i].ad_id}}" data-verification="{{data[i].verification}}">
        <# if(data[i].ad_type == 'external'){ #>
        <div class="ok18-third-party-ad" data-ad-url="{{data[i].ad_script}}" data-loaded='no'></div> 
        <# }else{ #>
        <a href="{{data[i].ad_url}}" target="_blank"><img src="{{data[i].ad_image}}" alt="{{data[i].ad_alt}}"/></a>
        <# } #> 
    </div>
    <# } #></script><script type="text/html" id="tmpl-roadblock-template"><div class="ok_roadblock"data-roadblock-id="{{data.roadblock_id}}"data-verification="{{data.verification}}">
    <div class="flex-box">
        <div class="ok_rb_addWrap">
            <div><img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/logoMain.png" class="logo"/></div>
            <div class="ok_rb_advtitle">
                Advertisement
                <span class="ok_roadblok_skip">skip this</span>
            </div>
            <# if(data.device_type == 'desktop') { #>
            <div class="ok_rb_img_desktop"><a href="{{data.ad_url}}" target="_blank" class="ok-rb-link"><img src="{{data.ad_image}}" class="roadImg" alt="{{data.ad_alt}}"/></a></div>
            <# }else{ #>
            <div class="ok_rb_img_small_devices"><a href="{{data.ad_url}}" target="_blank"  class="ok-rb-link"><img src="{{data.ad_image}}" class="roadImg" alt="{{data.ad_alt}}"/></a></div>
            <# } #>
            <span class="ok_roadblock_today" style="display:none;">{{data.today}}</span>
        </div>
    </div>
</div></script> <input type="hidden" id="ok18-roadblock-type" value="home" />
<script type="text/html" id="tmpl-most-commented-list">    <# for ( var i=0;i<data.length;i++ ) { #>
        <li>
            <span class="shard_number">
                {{data[i].comments_number_nepali}}
                <span>प्रतिक्रिया</span>
            </span>
            <a class="blk_text" href="{{data[i].post_link}}">{{data[i].post_title}}</a>
        </li>
        <# } #>
    </script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/wp-embed.min.js?ver=5.6.2' id='wp-embed-js'></script>


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/tab.min.js"></script>


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 30,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    })
</script>
<style>
   #footer strong{
        color:white;
    }
</style>
<?php wp_footer();?>
</body>
</html>
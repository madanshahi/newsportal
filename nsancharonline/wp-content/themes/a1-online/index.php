<?php get_header(); ?>
<?php if ( 0 == of_get_option('Breaking') &&$rp<420) { ?>
<section>
<?php
 $args = array(
                        'posts_per_page' => 3,
                        'meta_query'    => array(
                            array(
                                'key'  => 'Priority',
                                'value'     => '"Breaking"',
                                'compare'   => 'LIKE',
                            )
                        )
                    );
                          $arr_posts = new WP_Query( $args );
 
                          if ( $arr_posts->have_posts()) :
                        
                        while ( $arr_posts->have_posts() ) :
                          $arr_posts->the_post();
   if($rp<420) { ?>                                                 
<div class="ok__container">
<?php if($rp<420) { ?>
<div class="ok__bises--2 ok__bises--3 relative">

<div class="item">
    <?php $rp= break_show(altered_post_time_ago_function());
?>
<div class="item__wrap">
<a href="<?php the_permalink();?>" class="title__medium" rel="bookmark"><?php if($rp<420){the_title();} ?></a>

<div class="post__info flex-box">
    <?php if($rp<420) { ?>
<div class="author__wrap">
<span class="author__img"><img src="<?php if($rp<420){echo of_get_option( 'favicon');} ?>" alt="<?php bloginfo('name'); ?>"></span>
<label>
<?php if( get_field('writer_name')&&$rp<420 ): echo the_field('writer_name'); endif; ?></label>
</div>
<div class="post__time">
<i class="far fa-clock"></i>
<span> <strong><?php if($rp<420){echo altered_post_time_ago_function(); }?></strong></span>
</div>
<div class="post__comments">
<i class="far fa-comments"></i>
<span><strong><?php echo get_comments_number( $post_id ); ?></strong></span>
</div>
<?php } else { ?>
<?php } ?>
</div>
</div>
</div>
<?php $break_options = get_field('break_options');if( $break_options && in_array('image', $break_options)&&$rp<420 ) { ?>
<div class="item hasImg">
<?php $break_options = get_field('break_options');
                               if( $break_options && in_array('image', $break_options)&&$rp<420 ): ?>
                                    <a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('biggest',array('class' => 'img-responsive')); }
                                        else { ?><img src="https://www.onlinekhabar.com/wp-content/uploads/2021/04/Online-Khabar-Nepal-P.-L-1230x100px.gif'; ?>" alt="<?php the_title(); ?>" /><?php } ?></a>
                                        <?php endif; ?>
</div>
<?php } else { ?>
<?php } ?>
<?php $break_options = get_field('break_options');
                                if( $break_options && in_array('content', $break_options)&&$rp<420 ): ?>
                                    <p><?php echo excerpt(55); ?>...</p>
                                <?php endif; ?>
                                    
</div>
<?php } else { ?>
<?php } ?>
</div><?php } else { ?>
<?php } ?>
<?php 
$i++;
endwhile;
endif; ?>
</section>
<?php } else { ?>
<?php } ?>
<div class="ok-live2-wrap">
<div class="ok-live2-title"></div>
<div class="ok-live2-script"></div>
</div>



<section class="bg__lightgrey-x-2 main_story_sectn">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<div class="ok__news--wrap">

<div class="five__cols--grid mainNews_both-wrap">
<div class="col colspan3 spot">
<?php big_block(-100,1,0,60);?>
<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap home-after-mukhaya-hightlights-news-mb okam-device-mobile" data-alias="home-after-mukhaya-hightlights-news-mb" data-device-type="mobile">
</div>
</div>
</div>
</div>
<div class="col colspan2">
<?php l_block(-100,5,0,60);?>
</div>
</div>

</div>


<div class="side__add">
<div class="side__add--wrap medium">
<div class="okam-ad-position-wrap home-mukhya-right okam-device-desktop" data-alias="home-mukhya-right" data-device-type="desktop">
     <?php dynamic_sidebar('break_side');?>
</div>
<div class="okam-ad-position-wrap home-after-mukhya-mobile okam-device-mobile" data-alias="home-after-mukhya-mobile" data-device-type="mobile">
</div>
</div>
</div>

</div>
</div>
</section> 




<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-mukhya okam-device-desktop" data-alias="home-after-mukhya" data-device-type="desktop">
    <?php dynamic_sidebar('above-samachar');?>
</div>
</div>
</div>


<section class="section ok__news--sectn">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<div class="ok__news--wrap">
<h2 class="title__medium cat__title">
<span>समाचार</span>
<span class="right">
<a href="/content/news" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="three__cols--grid">
<div class="col colspan3">
<?php news_block(2,1,0,55);?>
</div>
<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap home-aftersamachar-half1 okam-device-desktop" data-alias="home-aftersamachar-half1" data-device-type="desktop">
</div>
</div>
</div>
<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap home-aftersamachar-half1-mb okam-device-mobile" data-alias="home-aftersamachar-half1-mb" data-device-type="mobile">
</div>
</div>
</div>
<?php news_sm(2,3,0,55);?>

</div>

</div>


<div class="side__add">
<div class="side__add--wrap square">
<div class="okam-ad-position-wrap home-samachar-right okam-device-desktop" data-alias="home-samachar-right" data-device-type="desktop">
    <?php dynamic_sidebar('aside_news');?>
</div>
</div>
</div>

</div>
</div>
</section>


<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-samachar-after okam-device-desktop" data-alias="home-samachar-after" data-device-type="desktop">
    <?php dynamic_sidebar('aside_samachar-full');?>
</div>
</div>
</div>
<div class="ok18-m-square-ad">
<div class="okam-ad-position-wrap home-in-between-samachar okam-device-mobile" data-alias="home-in-between-samachar" data-device-type="mobile">
</div>
</div>



<section class="section bg__lightgrey-x-2 ok__news--sectn">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<div class="ok__news--wrap">

<div class="two__cols--grid">
<?php sm_bx(27,10,1,12);?>
</div>

<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-above-desh-half-row okam-device-desktop" data-alias="home-above-desh-half-row" data-device-type="desktop">
</div>
</div>
</div>
</div>


<div class="side__add">
<div class="side__add--wrap square">
<div class="okam-ad-position-wrap home-samachar-right2 okam-device-desktop" data-alias="home-samachar-right2" data-device-type="desktop">
    <?php dynamic_sidebar('aside_news_below');?>
</div>
</div>
</div>

</div>
</div>
</section>


<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-above-corona okam-device-desktop" data-alias="home-above-corona" data-device-type="desktop">
</div>
</div>
</div>
<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-above-covid-mobile okam-device-mobile" data-alias="home-above-covid-mobile" data-device-type="mobile">
</div>
</div>
</div>
 




<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-above-desh-row okam-device-desktop" data-alias="home-above-desh-row" data-device-type="desktop">
    <?php dynamic_sidebar('desh-1');?>
</div>
<div class="okam-ad-position-wrap home-above-desh-row-mobile okam-device-mobile" data-alias="home-above-desh-row-mobile" data-device-type="mobile">
    <?php dynamic_sidebar('desh-1');?>
</div>
</div>
</div>
<section class="covid-section">
<div class="ok__container">
<h3><span>लोकदर्पन टि.भी </span>
<a href="/content/corona-feature" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</h3>
<div class="flex-box"><?php
$args = array(
        'cat' => "2",
        'posts_per_page' => 4,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>
<div class="covid-col">
<div>
<a href="<?php the_permalink() ?>"></a><?php has_post_thumbnail();
                the_post_thumbnail('big', array('class' => 'img-responsive')); ?> <div class="post__heading">
<h2 class="title__small post__title">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
</div>
</div>
</div>
<?php endwhile;
    wp_reset_query();
?>
</div>
</div>
</section>

<section class="section ok__country--sectn">
<div class="ok__container">
<div class="ok__news--category has_side-bar">
<div class="ok__news--wrap ok18-category-fetch-outer-wrap">
<h2 class="title__medium cat__title">
<span>देश</span>
<img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/ajax-loader.gif" class="ok18-ajax-loader" />
<span class="right ok18-category-fetch-wrap">
<a href="javascript:void(0);" class="read__all ok18-category-ajax-fetch-trigger ok18-active-category" onclick="openCity('active')">देश</a>
<a href="javascript:void(0);" class="read__all ok18-category-ajax-fetch-trigger" onclick="openCity('pradesh1')">प्रदेश १</a>
<a href="javascript:void(0);" class="read__all ok18-category-ajax-fetch-trigger" onclick="openCity('pradesh2')">प्रदेश २</a>
<a href="javascript:void(0);" class="read__all ok18-category-ajax-fetch-trigger" onclick="openCity('pradesh3')">प्रदेश ३</a>
<a href="javascript:void(0);" class="read__all ok18-category-ajax-fetch-trigger" onclick="openCity('pradesh4')">प्रदेश ४</a>
<a href="javascript:void(0);" class="read__all ok18-category-ajax-fetch-trigger" onclick="openCity('pradesh5')">प्रदेश ५</a>
<a href="javascript:void(0);" class="read__all ok18-category-ajax-fetch-trigger" onclick="openCity('pradesh6')">प्रदेश ६</a>
<a href="javascript:void(0);" class="read__all ok18-category-ajax-fetch-trigger" onclick="openCity('pradesh7')">प्रदेश ७</a>
<a href="/category/news/desh-samachar" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>
<div id="active" class="ok18-category-ajax-news-wrap"style="display:block">
<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php include (TEMPLATEPATH . '/pradesh/active.php' ); ?>
</div>
<div id="pradesh1" class="ok18-category-ajax-news-wrap" style="display:none">
<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php include (TEMPLATEPATH . '/pradesh/pradesh1.php' ); ?>
</div>

<div id="pradesh2" class="ok18-category-ajax-news-wrap" style="display:none">
<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php include (TEMPLATEPATH . '/pradesh/pradesh2.php' ); ?>
</div>

<div id="pradesh3" class="ok18-category-ajax-news-wrap"style="display:none">
<div class="ok__container">
<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php include (TEMPLATEPATH . '/pradesh/pradesh3.php' ); ?>
</div>
</div>
<div id="pradesh4" class="ok18-category-ajax-news-wrap"style="display:none">
<div class="ok__container">
<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php include (TEMPLATEPATH . '/pradesh/pradesh4.php' ); ?>
</div>
</div>
<div id="pradesh5" class="ok18-category-ajax-news-wrap"style="display:none">
<div class="ok__container">
<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php include (TEMPLATEPATH . '/pradesh/pradesh5.php' ); ?>
</div>
</div>
<div id="pradesh6" class="ok18-category-ajax-news-wrap"style="display:none">
<div class="ok__container">
<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php include (TEMPLATEPATH . '/pradesh/pradesh6.php' ); ?>
</div>
</div>
<div id="pradesh7" class="ok18-category-ajax-news-wrap"style="display:none">
<div class="ok__container">
<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php include (TEMPLATEPATH . '/pradesh/pradesh7.php' ); ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="okam-ad-position-wrap home-abovetrending-mobile okam-device-mobile" data-alias="home-abovetrending-mobile" data-device-type="mobile">
</div>
</section>

<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-desh-row okam-device-desktop" data-alias="home-after-desh-row" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap home-after-desh-row-mobile okam-device-mobile" data-alias="home-after-desh-row-mobile" data-device-type="mobile">
</div>
</div>
</div>
 


<div class="feature__lists">
<div class="ok__container">
<div class="ok__news--category">
<h2 class="title__medium cat__title">
<span>फिचर</span>
<a href="/content/feature-samachar" class="read__all--dot read__all--dot--white">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</h2>

<div class="owl-carousel1">
<div class="two__cols--grid">
<?php feature_bx(2,4,1,12);?>
</div>
</div>

</div>
</div>
</div>


<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-featured okam-device-desktop" data-alias="home-after-featured" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap home-after-featured-mobile okam-device-mobile" data-alias="home-after-featured-mobile" data-device-type="mobile">
</div>
</div>
</div>
 

<section class="suchana_prabidhi">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<div class="ok__news--wrap">
<h2 class="title__medium cat__title">
<span>सूचना-प्रविधि</span>
<span class="right">
<a href="/content/technology-news" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="five__cols--grid">
<div class="col colspan3 ">
<?php tech_block(-100,1,0,60);?>
<div class="col colspan2">
<?php technews_block(-100,4,0,60);?>

</div>
</div>

<div class="col colspan4">
<div class="left_add">
<div class="okam-ad-position-wrap home-in-between-suchanaprabidhi okam-device-mobile-desktop" data-alias="home-in-between-suchanaprabidhi" data-device-type="mobile-desktop">
</div>
</div>
</div>
</div>

<div class="okam-ad-position-wrap home-above-bichar-mobile okam-device-mobile" data-alias="home-above-bichar-mobile" data-device-type="mobile">
</div>

<div class="side__add">
<div class="cards side_card bichar-only-in-mobile">
<div class="title flex-box">
विचार
<span class="right">
<a href="/content/opinion" class="read__all--dot read__all--dot--white">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</div>
<?php bichar_block(-100,12,0,60);?>
<div class="okam-ad-position-wrap home-above-blog-mobile okam-device-mobile" data-alias="home-above-blog-mobile" data-device-type="mobile">
</div>
<div class="title blogtitle flex-box">
ब्लग
<span class="right">
<a href="/content/blog" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</div>
<?php blog_sm(-100,2,0,60);?>
</div>
<div class="cards side_card">
<div class="title">धेरै कमेन्ट गरिएका</div>
<br>
<?php mostcomment_block(-100,5,0,60);?>
</div>
</div>

</div>
</div>
</section>


<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-suchana-pribidhi okam-device-desktop" data-alias="home-after-suchana-pribidhi" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap home-after-suchana-pribidhi-mobile okam-device-mobile" data-alias="home-after-suchana-pribidhi-mobile" data-device-type="mobile">
</div>
</div>
</div>
 



<section class="section ok__interview">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<div class="ok__news--wrap">
<h2 class="title__medium cat__title">
<span>अन्तर्वार्ता</span>
<span class="right">
<a href="/content/interview" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="four__cols--grid">
<?php interview_block(-100,1,0,60);?>
<?php interview_sm(-100,4,0,60);?>
<div class="col colspan4">
<div class="left_add">
<div class="okam-ad-position-wrap home-in-between-interview okam-device-desktop" data-alias="home-in-between-interview" data-device-type="desktop">
</div>
</div>
</div>
</div>

</div>

<div class="okam-ad-position-wrap home-above-mosts-shared-mobile okam-device-mobile" data-alias="home-above-mosts-shared-mobile" data-device-type="mobile">
</div>

<div class="side__add">
<div class="cards side_card">
<div class="title flex-box">
विचार
<span class="right">
<a href="/content/opinion" class="read__all--dot read__all--dot--white">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</div>
<?php bichar_block(-100,4,0,60);?>
<div class="okam-ad-position-wrap home-above-blog-mobile okam-device-mobile" data-alias="home-above-blog-mobile" data-device-type="mobile">
</div>
<div class="title blogtitle flex-box">
ब्लग
<span class="right">
<a href="/content/blog" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</div>
<?php blog_sm(-100,2,0,60);?>
</div>
</div>

</div>
</div>
</section> 

<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-above-business okam-device-desktop" data-alias="home-above-business" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap home-above-business-mobile okam-device-mobile" data-alias="home-above-business-mobile" data-device-type="mobile">
</div>
</div></div>

<section class="section ok__business--sectn">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<h2 class="title__medium cat__title">
<span>बिजनेस</span>
<span class="right">
<a href="#" class="read__all">अर्थनीति </a>
<a href="" class="read__all">पर्यटन</a>
<a href="#" class="read__all">रोजगार</a>
<a href="#" class="read__all">बैँक / वित्त</a>
<a href="#" class="read__all">अटो</a>
<a href="#यर बजार</a>
<a href="#" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>
<div class="ok__news--wrap">

<div class="six__cols--grid">
<div class="col colspan3 ">
<?php business_block(-100,1,0,60);?>
</div>
<div class="okam-ad-position-wrap home-after-business-firstphase-mobile okam-device-mobile" data-alias="home-after-business-firstphase-mobile" data-device-type="mobile">
</div>
<div class="col colspan3">
<?php business_sm(-100,4,0,60);?>
</div>
</div>

<div class="okam-ad-position-wrap home-after-business-left okam-device-mobile-desktop" data-alias="home-after-business-left" data-device-type="mobile-desktop">
</div>
</div>


<div class="side__add">
<div class="cards side_card">
<ul class="business_side">
<?php business_smside(-100,6,0,60);?>
</ul>
</div>
<div class="okam-ad-position-wrap home-after-business-right okam-device-desktop" data-alias="home-after-business-right" data-device-type="desktop">
</div>
</div>

</div>
</div>
</section>


<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-business okam-device-desktop" data-alias="home-after-business" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap home-after-business-mobile okam-device-mobile" data-alias="home-after-business-mobile" data-device-type="mobile">
</div>
</div>
</div> 




<section class="section ok__entertainment">
<div class="ok__container">
<div class="ok__news--category">

<div class="ok__news--wrap">
<h2 class="title__medium cat__title">
<span>मनोरञ्जन</span>
<span class="right">
<a href="#" class="read__all">गशिप</a>
<a href="#" class="read__all">फ्रेस फेस</a>
<a href="#" class="read__all">बलिउड / हलिउड</a>
<a href="#" class="read__all">भिडियो</a>
<a href="#" class="read__all">ग्यालरी</a>
<a href="#" class="read__all">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="six__cols--grid">
<div class="col colspan2">
<?php mano_block(-100,1,0,60);?>
</div>
<div class="col colspan2">
<div class="">
<?php mano_sm(-100,5,0,60);?>
</div>
</div>
<div class="col colspan2 rowspan2">
<div class="">
<?php mano_smside(-100,1,0,60);?>
</div>
</div>
<div class="col colspan4">
<div class="okam-ad-position-wrap home-inbetween-entertainment okam-device-mobile-desktop" data-alias="home-inbetween-entertainment" data-device-type="mobile-desktop">
</div>
</div>

</div>

</div>
</div>
</div>
</section>

<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-entertainment okam-device-mobile-desktop" data-alias="home-after-entertainment" data-device-type="mobile-desktop">
</div>
</div>
</div>




<section class="section ok__lifestyle--sectn" style="background:#f9e6e4; ">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<div class="ok__news--wrap">
<h2 class="title__medium cat__title">
<span>स्वास्थ्य-जीवनशैली</span>
<span class="right">
<a href="#" class="read__all">आयुर्वेद</a>
<a href="#" class="read__all"> कभर स्टोरी</a>
<a href="#" class="read__all">खाना</a>
<a href="#" class="read__all">गृह सजावट</a>
<a href="#" class="read__all">फिटनेस</a>
<a href="#" class="read__all">फेसन</a>
<a href="#" class="read__all">यौन स्वास्थ्य</a>
<a href="#" class="read__all">सौन्दर्य</a>
<a href="#s" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-inbetween-lifestyle okam-device-mobile-desktop" data-alias="home-inbetween-lifestyle" data-device-type="mobile-desktop">
</div>
</div>
<div class="seven__cols--grid">
<div class="col colspan3 ">
<?php jiban_block(-100,1,0,60);?>
</div>
<div class="col colspan2">
<?php jiban_sm(-100,4,0,60);?>
</div>
<div class="col colspan2">
<div class="cards side_card">
<div class="">
<?php jiban_smside(-100,2,0,60);?>
<div class="okam-ad-position-wrap home-lifestyle-small-right okam-device-mobile-desktop" data-alias="home-lifestyle-small-right" data-device-type="mobile-desktop">
</div>
</div>
</div>
</div>
</div>

</div>



</div>
</div>
</section>

<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-lifestyle okam-device-desktop" data-alias="home-after-lifestyle" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap home-after-lifestyle-mobile okam-device-mobile" data-alias="home-after-lifestyle-mobile" data-device-type="mobile">
</div>
</div></div> 

<section class="section ok__sport--sectn">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<div class="ok__news--wrap">
<h2 class="title__medium cat__title">
<span>खेलकुद</span>
<span class="right">
<a href="/sports" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="two__cols--grid">
<?php khel_block(-100,2,0,60);?>
<?php khel_sm(-100,4,0,60);?>
</div>

<div class="col colspan4 mt-20">
<div class="left_add">
<div class="okam-ad-position-wrap home-in-between-sports okam-device-mobile-desktop" data-alias="home-in-between-sports" data-device-type="mobile-desktop">
</div>
</div>
</div>
</div>


<div class="side__add">
<div class="cards side_card">
<div class="title">सिफारिस </div>
<div class="most_recomenede_side">
<?php sifarish_block(-100,6,0,60);?>
</div>
</div>
</div>

</div>
</div>
</section>

<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-khulkud okam-device-desktop" data-alias="home-after-khulkud" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap home-after-khulkud-mobile okam-device-mobile" data-alias="home-after-khulkud-mobile" data-device-type="mobile">
</div>
</div>
</div>
<section class="section ok__country--sectn home_prabas mobile_twocolgrid mt-30">
<div class="ok__container">
<div class="ok__news--category has_side-bar">

<div class="ok__news--wrap">
<h2 class="title__medium cat__title">
<span>प्रवास</span>
<span class="right">
<a href="/content/prabhas" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php prvas_block(-100,1,0,60);?>
<?php prvas_sm(-100,4,0,60);?>
<div class="col colspan4">
<div class="left_add">
<div class="okam-ad-position-wrap home-in-between-prabash okam-device-mobile-desktop" data-alias="home-in-between-prabash" data-device-type="mobile-desktop">
</div>
</div>
</div>
<?php prvas_smside(-100,4,0,60);?>
</div>

</div>


<div class="side__add">
<div class="cards side_card">
<div class="title flex-box">अन्तराष्ट्रिय<span class="right">
<a href="/content/international" class="read__all--dot read__all--dot--white">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span></div>
<div class="sport_side">
<?php international_block(-100,1,0,60);?>
<?php international_sm(-100,4,0,60);?>
</div>
</div>
<div class="okam-ad-position-wrap home-below-international-news okam-device-desktop" data-alias="home-below-international-news" data-device-type="desktop">
</div>
</div>

</div>
</div>
</section>

<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-prabash okam-device-desktop" data-alias="home-after-prabash" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap home-after-prabash-prabash okam-device-mobile" data-alias="home-after-prabash-prabash" data-device-type="mobile">
</div>
</div></div> 


<section class="section ok__country--sectn ok__sahitya mobile_twocolgrid">
<div class="ok__container">
<div class="ok__news--category has_side-bar sahitya_news">

<div class="ok__news--wrap">
<h2 class="title__medium cat__title">
<span>साहित्य</span>
<span class="right">
<a href="/content/literature" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="four__cols--grid">
<div class="col colspan2 rowspan2">
<?php sahitya_block(-100,1,0,60);?>
</div>
<?php sahitya_sm(-100,4,0,60);?>
</div>
</div>
<div class="okam-ad-position-wrap home-after-sathiye-mobile okam-device-mobile" data-alias="home-after-sathiye-mobile" data-device-type="mobile">
</div>

<div class="side__add">
<div class="cards side_card">
<div class="title flex-box">साहित्यिक गतिविधि
</div>
<ul class="business_side">
<?php sahitya_smside(-100,8,0,60);?>
<li>
</ul>
</div>
</div>

</div>
</div>
</div>
</section>
<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-above-bichitra okam-device-desktop" data-alias="home-above-bichitra" data-device-type="desktop">
</div>
</div></div> 


<section class="section ok__wonderworld--sectn">
<div class="ok__container">
<div class="ok__news--category">

<div class="ok__news--wrap">
<h2 class="title__medium cat__title">
<span>विचित्र संसार</span>
<span class="right">
<a href="#" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="seven__cols--grid">
<div class="col colspan3 ">
<?php bichitra_block(-100,1,0,60);?>
</div>
<div class="col colspan2">
<?php bichitra_sm(-100,4,0,60);?>
</div>
<div class="col colspan2">
<div class="cards side_card">
<ul class="business_side">
<?php bichitra_smside(-100,6,0,60);?>
</ul>
</div>

<div class="okam-ad-position-wrap home-bichitrasansar-right okam-device-desktop" data-alias="home-bichitrasansar-right" data-device-type="desktop">
</div>
</div>
</div>

</div>

</div>
</div>
</section>


<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap home-after-bichitrasansar okam-device-mobile-desktop" data-alias="home-after-bichitrasansar" data-device-type="mobile-desktop">
</div>
</div>
</div>
 




<div class="Beautiful__nepal">
<div class="ok__container">
<div class="ok__news--category">
<h2 class="title__medium cat__title">
<span>राम्रो नेपाल</span>
<span class="right">
<a href="#" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</span>
</h2>

<div class="four__cols--grid">
<?php hamronepal_block(-100,4,0,60);?>
</div>

</div>
</div>
</div>
 
</main>
</div>
</div>
<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("ok18-category-ajax-news-wrap");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>
<?php get_footer();?>

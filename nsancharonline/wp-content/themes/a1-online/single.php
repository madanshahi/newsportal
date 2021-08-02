<?php get_header();?>
<section class="ok__details--read">
<div class="ok__container">

<div class="nws__title--card">
<div class="custom_breadcrumb">
<a href="<?php get_home_url();?>">होमपेज / </a>
</div>
<?php while (have_posts()) : the_post(); setpostviews(get_the_ID());?>
<h2 class="mb-0"><?php the_title();?></h2>
<h3 class="post__subtitle"> </h3>
<div class="ok__container">
<div class="add__fullwidth">
<div class="okam-ad-position-wrap single-after-news-title okam-device-desktop" data-alias="single-after-news-title" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap single-after-news-title-mb okam-device-mobile" data-alias="single-after-news-title-mb" data-device-type="mobile">
</div>
</div>
</div>

<div class="details__info">
<div class="post__info flex-box">
<div class="author__wrap">
<span class="author__img"><img src="<?php echo of_get_option( 'favicon'); ?>" alt="<?php bloginfo('name'); ?>"></span>
<label><?php if( get_field('writer_name') ): echo the_field('writer_name'); endif; ?></label>
</div>
<div class="post__time">
<span><?php echo prmiti(); if (function_exists('getpost_npdate')){getpost_npdate();} ?> </span> </div>
<span class="comment_count"></span>
<span class="nof-comment">
<a href="javascript:void(0)" class="toggle_cmnt"><span class="comment_box1"><strong><?php echo Convert_Nos(get_comments_number( $post_id )); ?> प्रतिक्रिया </strong></span></a>
</span>
<div class="shares">
<span class="share__this"> <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END --> </span>
</div>
</div>
</div>
</div>
<style>
.comment_box1{
    margin-top: 0;
    background-color: #e9eef3;
    padding: 2px 15px;
    border-radius: 2px;
    min-width: 88px;
    position: relative;
    text-align: center;
    line-height: 34px;

}
</style>

<div class="ok__news--category details__content has_side-bar">

<div class="ok__news--wrap">

<div class="three__cols--grid">
<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap singlepage-abovemainphoto okam-device-desktop" data-alias="singlepage-abovemainphoto" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap single-above-main-photo okam-device-mobile" data-alias="single-above-main-photo" data-device-type="mobile">
</div>
</div>
</div>
<div class="col colspan3 dtl-img">
<?php has_post_thumbnail();
                the_post_thumbnail(); ?>
<div class="pc"></div>
</div>
<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap single-after-news-firstphoto okam-device-desktop" data-alias="single-after-news-firstphoto" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap single-after-main-photo okam-device-mobile" data-alias="single-after-main-photo" data-device-type="mobile">
</div>
</div>
</div>
<div class="col colspan3 main__read--content ok18-single-post-content-wrap">
<p><?php the_content();?></p>
</div>
<div class="ok18-related-posts-wrap" style="display:none;">
</div>
<div class="ok18-inbetween-ad" style="display:none;">
<div class="okam-ad-position-wrap single-inbetween-stories okam-device-mobile-desktop" data-alias="single-inbetween-stories" data-device-type="mobile-desktop">
</div>
<div class="okam-ad-position-wrap single-in-between-mobile-new okam-device-mobile" data-alias="single-in-between-mobile-new" data-device-type="mobile">
</div>
</div>
<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap single-after-content okam-device-desktop" data-alias="single-after-content" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap single-after-content-mobile okam-device-mobile" data-alias="single-after-content-mobile" data-device-type="mobile">
</div>
</div>
</div>
<div class="col colspan3 post_ftr">
<div class="flex-box">
<div class="add_this_ftr">
<div class="addthis_jumbo_share"></div>
</div>
<div class="ftr_tags">
<span>
<a href="#">काठमाडौं उपत्यका</a>
<a href="#">कोरोना भाइरस</a>
</span>
</div>
</div>
</div>
<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap single-above-emoji-mobile okam-device-mobile" data-alias="single-above-emoji-mobile" data-device-type="mobile">
</div>
<div class="okam-ad-position-wrap single-above-emoji okam-device-desktop" data-alias="single-above-emoji" data-device-type="desktop">
</div>
</div>
</div>
<?php endwhile;?>
<div class="col colspan3 emo_sectn">
<h4>यो खबर पढेर तपाईलाई कस्तो महसुस भयो ?</h4>
<!-- ShareThis BEGIN -->
<div class="sharethis-inline-reaction-buttons"></div>
<!-- ShareThis END -->

</div>

<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap singlenews-afteremoji okam-device-desktop" data-alias="singlenews-afteremoji" data-device-type="desktop">
</div>
<div class="okam-ad-position-wrap singlenews-afteremoji-mobile okam-device-mobile" data-alias="singlenews-afteremoji-mobile" data-device-type="mobile">
</div>
</div>
</div>



<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap singlenews-afternews okam-device-mobile-desktop" data-alias="singlenews-afternews" data-device-type="mobile-desktop">
</div>
</div>
</div>



<div class="ok__news--wrap colspan3 Post__feedback ok18-comment-wrap">
<h2 class="title__medium cat__title">
<span>प्रतिक्रिया</span>
<span class="right">
<a href="#" class="read__all ok-comment-count ok18-comments-count"></a>
</span>
</h2>

<div class="three__cols--grid">
<div class="colspan3">

<div id="horizontalTab">
<ul>
<li><a href="#tab-3" id="ok18-reply-form-tab-trigger">प्रतिक्रिया</a></li>
</ul>
<div id="tab-3">
<div class="comment__wrap">
<?php
if ( comments_open() || get_comments_number() ) :
     comments_template();
 endif; ?>
</div>
</div>
</div>

</div>
</div>

</div>
<div class="col colspan3">
<div class="left_add okam-device-desktop">
</div>
<div class="left_add okam-device-mobile">
</div>
</div>

<div class="ok__news--wrap colspan3 innterTrendingLeft">
<h2 class="title__medium cat__title">
<span>&#2335;&#2381;&#2352;&#2375;&#2344;&#2381;&#2337;&#2367;&#2329;</span>
<span class="right">

</span>
</h2>
<div class="two__cols--grid trendleftwrap">
<?php trend_single(-100,6,0,60);?>
</div>
</div>


<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap single-after-news2 okam-device-mobile-desktop" data-alias="single-after-news2" data-device-type="mobile-desktop">
</div>
<div class="okam-ad-position-wrap single-after-news2-mobile okam-device-mobile" data-alias="single-after-news2-mobile" data-device-type="mobile">
</div>
</div>
</div>


<div class="ok__news--wrap colspan3 relatedPostsDtl">
<h2 class="title__medium cat__title">
<span>&#2360;&#2350;&#2381;&#2348;&#2344;&#2381;&#2343;&#2367;&#2340; &#2326;&#2357;&#2352;</span>
<span class="right">

</span>
</h2>

<div class="three__cols--grid">
<?php RelatedPost() ?>
</div>

</div>


<div class="colspan3 tribox-add flex-box">
<span class="advName">Advertisment</span>
<div class="adBox">
<div class="okam-ad-position-wrap single-after-trending okam-device-mobile-desktop" data-alias="single-after-trending" data-device-type="mobile-desktop">
</div>
</div>
</div>


<div class="ok__news--wrap colspan3 relatedPostsDtl ok18-lokpriye-wrap">
<h2 class="title__medium cat__title ok18-lokpriye-head">
<span>लोकप्रिय<img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/ajax-loader.gif" class="ok18-ajax-loader" /></span>
<span class="right">
<a href="javascript:void(0);" class="read__all ok18-detail-popular ok18-popular-active" data-popular-duration="day">२४ घण्टा</a>
<a href="javascript:void(0);" class="read__all ok18-detail-popular" data-popular-duration="week">यो साता </a>
<a href="javascript:void(0);" class="read__all ok18-detail-popular" data-popular-duration="month">यो महिना</a>
</span>
</h2>

<div class="three__cols--grid ok18-lokpriye-posts-wrap">
<?php popular_block(-100,6,0,60);?>
</div>

</div>




<div class="col colspan3">
<div class="left_add">
<div class="okam-ad-position-wrap single-after-lokpriya-mobile okam-device-mobile" data-alias="single-after-lokpriya-mobile" data-device-type="mobile">
</div>
</div>
</div>

</div>

</div> 

<aside id="secondary" class="widget-area side__add">
<div class="side__add--wrap square">
<div class="okam-ad-position-wrap single-sidebar okam-device-desktop" data-alias="single-sidebar" data-device-type="desktop">
</div>
</div>
<div class="most_recomenede_side side_bar_posts recomended">
<div class="title">सिफारिस</div>
<?php sifarish_block(-100,6,0,60);?>
</div>
<div class="side__add--wrap square">
<div class="okam-ad-position-wrap single-sidebar2 okam-device-desktop" data-alias="single-sidebar2" data-device-type="desktop">
</div>
</div>
<div class="most_recomenede_side side_bar_posts mostCommented">
<div class="title">धेरै कमेन्ट गरिएका </div>
<?php mostcomment_block(-100,8,0,60);?>
</div>
<div class="side__add--wrap square">
<div class="okam-ad-position-wrap single-sidebar3 okam-device-desktop" data-alias="single-sidebar3" data-device-type="desktop">
</div>
</div>
<div class="side__add--wrap square">
<a href="https://www.genesiswtech.com/" target="_blank">&nbsp;</a>
<div class="okam-ad-position-wrap single-sidebar4 okam-device-desktop" data-alias="single-sidebar4" data-device-type="desktop">
</div>
</div>

</aside>

</div>
</div>
</section>


<div class="feature__lists">
<div class="ok__container">
<h2 class="title__medium cat__title">
<span>छुटाउनुभयो कि?</span>
<a href="/content/donotmissed" class="read__all--dot">
<span>सबै</span>
<span class="dot_wrap">
<span></span>
<span></span>
<span></span>
</span>
</a>
</h2>
<div class="ok__news--category">

<div class="four__cols--grid">
<?php misseddPost() ?>
</div>

</div>
</div>
</div>

</main>
</div>
</div>

<?php get_footer();?>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script type="text/html" id="tmpl-ad-template">
<# for ( var i=0;i<data.length;i++ ) { #>
    <div class="okam-each-ad" id="okam-ad-{{data[i].ad_id}}" data-verification="{{data[i].verification}}">
        <# if(data[i].ad_type == 'external'){ #>
        <div class="ok18-third-party-ad" data-ad-url="{{data[i].ad_script}}" data-loaded='no'></div> 
        <# }else{ #>
        <a href="{{data[i].ad_url}}" target="_blank"><img src="{{data[i].ad_image}}" alt="{{data[i].ad_alt}}"/></a>
        <# } #> 
    </div>
    <# } #></script><script type="text/html" id="tmpl-comment-template">
<# if(data.comments.length>0) { #>

<# if(data.parent!=0) { #>

<a href="javascript:void(0);" class="ok18-hide-replies">Hide Replies</a>

<# } #>
<#   for ( var i=0;i<data.comments.length;i++ ) {
    if(data.comments[i].like_count >5 && data.comments[i].like_count>data.comments[i].dislike_count){
    var highlight_class = 'ok-good-comment';
    }else if(data.comments[i].dislike_count >5 && data.comments[i].like_count<data.comments[i].dislike_count){
        var highlight_class = 'ok-bad-comment';
        }else{
        var highlight_class = '';
        }
        #>

        <div class="comment__wrap flex-box ok18-main-comment-outer-wrap {{highlight_class}}">
            <div class="aut_img">
                <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/userIcon.png">
            </div>
            <div class="comment_wrp ok18-main-comment-wrap" data-comment-id="{{data.comments[i].comment_id}}">
                <div class="name">{{data.comments[i].comment_author}} </div>
                <div class="date">{{data.comments[i].comment_nepali_date}}</div>
                <div class="comments">
                    {{data.comments[i].comment_text}}
                </div>
                <div class="comments_ftr flex-box">
                                            <span class="icon-nmr-text">
                            <i class="fas fa-comment-alt"></i>
                            <span class="numr">{{data.comments[i].replies_number}}</span>
                            <a href="javascript:void(0);" class="ok-comment-replies-trigger" data-comment-id="{{data.comments[i].comment_id}}">Comments</a>
                            <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/ajax-loader.gif" class="ok18-ajax-loader"/>
                        </span>
                    
                    <div class="cld-like-wrap  cld-common-wrap">
                        <span class="icon-nmr-text">
                            <a href="javascript:void(0);" class="cld-like-trigger cld-like-dislike-trigger" title="Like" data-comment-id="{{data.comments[i].comment_id}}" data-trigger-type="like">
                                <i class="fas fa-thumbs-up"></i>
                            </a>
                            <span class="cld-like-count-wrap cld-count-wrap numr">{{data.comments[i].like_count}}</span>
                            <a href="javascript:void(0);">Likes</a>
                        </span>
                    </div>
                    <div class="cld-dislike-wrap  cld-common-wrap">
                        <span class="icon-nmr-text">

                            <a href="javascript:void(0);" class="cld-dislike-trigger cld-like-dislike-trigger" title="Dislike" data-comment-id="{{data.comments[i].comment_id}}" data-trigger-type="dislike">
                                <i class="fas fa-thumbs-down"></i>
                            </a>
                            <span class="cld-dislike-count-wrap numr cld-count-wrap">{{data.comments[i].dislike_count}}</span>
                            <a href="javascript:void(0);">Dislikes</a>
                        </span>
                    </div>
                    <span class="icon-nmr-text report">
                        <i class="fas fa-flag"></i>
                        <a href="javascript:void(0);" class="ok-comment-report-trigger" data-comment-id="{{data.comments[i].comment_id}}">Report</a>
                    </span>
                    <# if(data.comment_parent!=0) { #>
                    <a href="javascript:void(0);" class="btn btn-see ok-comment-reply-form-trigger" data-comment-id="{{data.comments[i].comment_id}}">जवाफ दिनुहोस्</a>
                    <#    } #>
                </div>
                <div class="ok18-comment-replies-wrap">
                    
<# if(data.comments[i].child_comments.length>0) { #>



<a href="javascript:void(0);" class="ok18-hide-replies">Hide Replies</a>


<#   for ( var j=0;j<data.comments[i].child_comments.length;j++ ) { #>

    <div class="comment__wrap flex-box ok18-main-comment-outer-wrap">
        <div class="aut_img">
            <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/userIcon.png">
        </div>
        <div class="comment_wrp ok18-main-comment-wrap" data-comment-id="{{data.comments[i].child_comments[j].comment_id}}">
            <div class="name">{{data.comments[i].child_comments[j].comment_author}} </div>
            <div class="date">{{data.comments[i].child_comments[j].comment_nepali_date}}</div>
            <div class="comments">
                {{data.comments[i].child_comments[j].comment_text}}
            </div>
            <div class="comments_ftr flex-box">
                                    <span class="icon-nmr-text">
                        <i class="fas fa-comment-alt"></i>
                        <span class="numr">{{data.comments[i].child_comments[j].replies_number}}</span>
                        <a href="javascript:void(0);" class="ok-comment-replies-trigger" data-comment-id="{{data.comments[i].child_comments[j].comment_id}}">Comments</a>
                        <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/ajax-loader.gif" class="ok18-ajax-loader"/>
                    </span>
                
                <div class="cld-like-wrap  cld-common-wrap">
                    <span class="icon-nmr-text">
                        <a href="javascript:void(0);" class="cld-like-trigger cld-like-dislike-trigger" title="Like" data-comment-id="{{data.comments[i].child_comments[j].comment_id}}" data-trigger-type="like">
                            <i class="fas fa-thumbs-up"></i>
                        </a>
                        <span class="cld-like-count-wrap cld-count-wrap numr">{{data.comments[i].child_comments[j].like_count}}</span>
                        <a href="javascript:void(0);">Likes</a>
                    </span>
                </div>
                <div class="cld-dislike-wrap  cld-common-wrap">
                    <span class="icon-nmr-text">

                        <a href="javascript:void(0);" class="cld-dislike-trigger cld-like-dislike-trigger" title="Dislike" data-comment-id="{{data.comments[i].child_comments[j].comment_id}}" data-trigger-type="dislike">
                            <i class="fas fa-thumbs-down"></i>
                        </a>
                        <span class="cld-dislike-count-wrap numr cld-count-wrap">{{data.comments[i].child_comments[j].dislike_count}}</span>
                        <a href="javascript:void(0);">Dislikes</a>
                    </span>
                </div>
                <span class="icon-nmr-text report">
                    <i class="fas fa-flag"></i>
                    <a href="javascript:void(0);" class="ok-comment-report-trigger" data-comment-id="{{data.comments[i].child_comments[j].comment_id}}">Report</a>
                </span>

            </div>
        </div>

    </div>

    <#    } #>
    <# }  #>
                </div>
            </div>
            <# if(data.comment_parent!=0) { #>

            <div class="ok18-comment-reply-form-wrap" style="display:none;">
                <span class="ok18-comment-reply-close"><i class="fas fa-times"></i></span>
                <form class="ok18-comment-form">
                    <div class="form_field">
                        <div class="frm_row">
                            <label>पुरानाम *</label>
                            <input type="text" class="ok18-fullname" name="fullname">
                        </div>

                        <div class="frm_row">
                            <label>इमेल *</label>
                            <input type="email" class="ok18-comment-email" name="email">
                        </div>

                        <div class="frm_row">
                            <label>प्रतिकृया *</label>
                            <textarea class="ok18-comment-message" name="comment_message"></textarea>
                        </div>
                        
<div class="okc-captcha-wrap">
            <span class="okc-question"></span>
        <input type="text" name="captcha_answer" class="okc-captcha-answer" data-field-key="captcha_answer"/>
        <a href="javascript:void(0);" class="okc-captcha-reload"><img src="https://www.onlinekhabar.com/wp-content/plugins/ok-captcha/images/reload.png"/></a>
        <img src="https://www.onlinekhabar.com/wp-content/plugins/ok-captcha/images/ajax-loader.gif" class="okc-ajax-loader" style="display: none;"/>
        <input type="hidden" name="captcha_id" value="718821" class="okc-captcha-id"/>
    </div>
                        <a href="javascript:void(0);" class="btn btn-see cmnt-sbmt ok18-comment-submit-trigger">पठाउनुहोस</a>
                        <img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/ajax-loader.gif" class="ok18-ajax-loader"/>
                        <div class="ok18-comment-response"></div>
                        <input type="hidden" class="ok18-post-url" value="https://www.onlinekhabar.com/2021/04/948523" name="comment_url"/>
                        <input type="hidden" class="ok18-comment-parent" value="{{data.comments[i].comment_id}}" name="comment_parent"/>
                    </div>
                </form>
            </div>
            <#    } #>
        </div>

        <#    } #>
        <# }  #>
</script><script type="text/html" id="tmpl-emoji-template">    <div class="emowrap">
        <span class="percent ok18-emoji-happy-per">{{data.happy}}%</span>
        <span class="emoji ok18-emoji-trigger" data-emoji="happy" data-post-id="948523" data-emoji-count=""><img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-happy.png"></span>
        <h2>खुसी </h2>
    </div>  
        <div class="emowrap">
        <span class="percent ok18-emoji-sad-per">{{data.sad}}%</span>
        <span class="emoji ok18-emoji-trigger" data-emoji="sad" data-post-id="948523" data-emoji-count=""><img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-sad.png"></span>
        <h2>दुःखी </h2>
    </div>  
        <div class="emowrap">
        <span class="percent ok18-emoji-amused-per">{{data.amused}}%</span>
        <span class="emoji ok18-emoji-trigger" data-emoji="amused" data-post-id="948523" data-emoji-count=""><img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-amused.png"></span>
        <h2>अचम्मित </h2>
    </div>  
        <div class="emowrap">
        <span class="percent ok18-emoji-excited-per">{{data.excited}}%</span>
        <span class="emoji ok18-emoji-trigger" data-emoji="excited" data-post-id="948523" data-emoji-count=""><img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-excited.png"></span>
        <h2>उत्साहित </h2>
    </div>  
        <div class="emowrap">
        <span class="percent ok18-emoji-angry-per">{{data.angry}}%</span>
        <span class="emoji ok18-emoji-trigger" data-emoji="angry" data-post-id="948523" data-emoji-count=""><img src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/img/emo-angry.png"></span>
        <h2>आक्रोशित </h2>
    </div>  
    </script><script type="text/html" id="tmpl-roadblock-template"><div class="ok_roadblock"data-roadblock-id="{{data.roadblock_id}}"data-verification="{{data.verification}}">
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
</div></script> <input type="hidden" id="ok18-main-post-id" value="948523" />
<input type="hidden" id="ok18-roadblock-type" value="single" />
<script type="text/html" id="tmpl-most-commented-list">        <# for ( var i=0;i<data.length;i++ ) { #>
            <div class="generic__post--wrap ok__thumb--sqr--ltr">
                <div class="soft__wrap">
                    <div class="post__image">
                        {{data[i].comments_number_nepali}}
                        <span class="comment_box">प्रतिक्रिया</span>
                    </div>
                    <div class="post__heading">
                        <h2 class="title__small post__title">
                            <a class="blk_text" href="{{data[i].post_link}}">{{data[i].post_title}}</a>
                        </h2>
                    </div>
                </div>
            </div>
            <# } #>
            </script><script type='text/javascript' src='https://www.onlinekhabar.com/wp-includes/js/wp-embed.min.js?ver=5.6.2' id='wp-embed-js'></script>

<script type="text/javascript" src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/js/tab.min.js"></script>

<script type="text/javascript" src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/js/jquery.min.js"></script>

<script type="text/javascript" src="https://www.onlinekhabar.com/wp-content/themes/onlinekhabar-2018/js/owl.carousel.min.js"></script>
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
</body>
</html>
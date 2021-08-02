<?php
function big_block($categoryid,$limit=null,$offset=null,$limittext = null)
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
    <div class="generic__post--wrap mainStory_spot_thumb">
<div class="soft__wrap">
<div class="post__image">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a>
</div>
<div class="post__heading">
<h2 class="title__regular post__title">
<a class="sb-tt" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
<div class="post__date">
<i class="far fa-calendar-alt"></i>
<span><?php echo altered_post_time_ago_function() ?></span>
<i class="far fa-comment-alt"></i>
<span><strong>0</strong></span>
</div>
</div>
 </div>
</div>
    <?php endwhile;
    wp_reset_query();
}
function news_block($categoryid,$limit=null,$offset=null,$limittext = null)
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
    <div class="generic__post--wrap ok__spot--news">
<div class="post__heading">
<h2 class="title__regular post__title">
<a class="sb-tt" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
</div>
<div class="soft__wrap flex-box">
<div class="post__image news_spot_thumb">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a> </div>
<div class="post__info">
<div class="post__date">
<i class="far fa-calendar-alt"></i>
<span><?php echo altered_post_time_ago_function() ?></span>
</div>
<p><?php echo excerpt($limittext)."..."; ?></p>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
function news_sm($categoryid,$limit=null,$offset=null,$limittext = null)
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
<div class="generic__post--wrap ok__thumb--regular">
<div class="soft__wrap">
<div class="post__image ">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a> </div>
<div class="post__heading mpt-20">
<h2 class="title__small post__title">
<a class="sb-tt" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
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
<?php
function sahitya_block($categoryid,$limit=null,$offset=null,$limittext = null)
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
    <div class="generic__post--wrap ok__spot--country">
<div class="soft__wrap">
<div class="post__image news_spot_thumb">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a></a> </div>
<div class="post__heading">
<h2 class="title__regular post__title">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
</div>
<div class="post__info">
<p><?php echo excerpt($limittext)."..."; ?></p>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
function sahitya_sm($categoryid,$limit=null,$offset=null,$limittext = null)
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
<div class="generic__post--wrap ok__thumb--default">
<div class="soft__wrap">
<div class="post__image ">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?> </div>
<div class="post__heading">
<h2 class="title__small post__title">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
</div>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
function sahitya_smside($categoryid,$limit=null,$offset=null,$limittext = null)
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
    <li>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</li>
    <?php endwhile;
    wp_reset_query();
}
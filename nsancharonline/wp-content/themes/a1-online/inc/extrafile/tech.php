<?php
function technews_block($categoryid,$limit=null,$offset=null,$limittext = null)
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
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
function tech_block($categoryid,$limit=null,$offset=null,$limittext = null)
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
<div class="post__image mainStory_spot_thumb">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a> </div>
<div class="post__heading for_it">
<h2 class="title__regular post__title">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h2>
<h3 class="sub_title">
</h3>
</div>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
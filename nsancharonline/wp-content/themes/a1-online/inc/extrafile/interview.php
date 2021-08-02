<?php
function interview_block($categoryid,$limit=null,$offset=null,$limittext = null)
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
    <div class="col colspan4">
<div class="cover_collection flex-box">
<div class="cvr_text">
<i class="fas fa-quote-left"></i>
<a href="<?php the_permalink() ?>">&#8216;<?php the_title(); ?>&#8217;</a>
</div>
<div class="cvr_img">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a> </div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
function interview_sm($categoryid,$limit=null,$offset=null,$limittext = null)
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
    <div class="col colspan2 mb-30">
<div class="generic__post--wrap ok__thumb--sml--ltr">
<div class="soft__wrap">
<div class="post__image ">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?> </div>
<div class="post__heading">
<h2 class="title__small post__title">
<a class="blk_text" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<i class="fas fa-quote-right"></i>
</h2>
</div>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}

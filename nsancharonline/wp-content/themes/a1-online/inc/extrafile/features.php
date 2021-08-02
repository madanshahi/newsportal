<?php
function feature_bx($categoryid,$limit=null,$offset=null,$limittext = null)
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


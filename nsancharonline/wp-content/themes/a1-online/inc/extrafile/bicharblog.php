<?php
function bichar_block($categoryid,$limit=null,$offset=null,$limittext = null)
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
    <div class="think">
<div class="post">
<div class="summery">
<a href="#">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
<span><?php if( get_field('writer_name') ): echo the_field('writer_name'); endif; ?></span>
</div>
<div class="img_holder">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a>  </div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
function blog_sm($categoryid,$limit=null,$offset=null,$limittext = null)
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
    <div class="think">
<div class="post">
<div class="summery">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</div>
<div class="img_holder">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?> </a></div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}

<?php
function hamronepal_block($categoryid,$limit=null,$offset=null,$limittext = null)
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
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?> </div>
<div class="post__heading img_gal_title">
<i class="fas fa-file-image"></i>
<h2 class="title__small post__title">
<a href="<?php the_permalink() ?>"><?php the_title(); ?> &#8230;.</a>
</h2>
</div>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
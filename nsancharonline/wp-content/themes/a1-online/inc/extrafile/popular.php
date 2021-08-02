<?php
function popular_block($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $popularpost = array( 'posts_per_page' => $limit,
     'meta_key' => 'post_views_count',
      'orderby' => 'meta_value_num',
       'order' => 'DESC'   );
    $records = new WP_Query($popularpost);
    while ($records->have_posts()): $records->the_post(); ?>
    <div class="col">
<div class="generic__post--wrap ok__thumb--regular">
<div class="soft__wrap">
<div class="post__image ">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('sobiz-big', array('class' => 'img-responsive')); ?></a> </div>
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
?>

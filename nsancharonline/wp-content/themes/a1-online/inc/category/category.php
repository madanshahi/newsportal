<?php
function category_block($limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $current_cat_ID = get_query_var('cat');
    $args = array(
        'cat'=>$current_cat_ID,
        'posts_per_page' => $limit,
        'orderby' => 'post_date',
        'order' => 'desc',
        'post_status' => 'publish',
        'offset' => $offset
    );
    $records = new WP_Query($args);
    while ($records->have_posts()): $records->the_post(); ?>


<div class="relative list__post show_grid--view">
<div class="item hasImg">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('big', array('class' => 'img-responsive')); ?></a> </div>
<div class="item">
<div class="item__wrap">
<a href="<?php the_permalink() ?>" class="title__regular"><?php the_title(); ?></a>
<p><?php the_excerpt($limittext); ?>
</p>
<div class="post__info flex-box">
<div class="post__time">
<i class="far fa-clock"></i>
<span><strong>10</strong></span>
<span>११ मिनेट</span>
</div>
<div class="post__comments">
<i class="far fa-comment"></i>
<span><strong></strong></span>
</div>
</div>
</div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}

<?php
function mostcomment_block($categoryid,$limit=null,$offset=null,$limittext = null)
{
    wp_reset_query();
    $limittext = !empty($limittext) ? $limittext : 90;
    $query = array( 'orderby' =>'comment_count',
    'posts_per_page' => $limit,
    'order' => 'desc',
        'post_status' => 'publish',
     );
    $records = new WP_Query($query);
    while ($records->have_posts()): $records->the_post(); ?>
    <div class="col-sm-12">
    <div class="row">
<div class="col-md-5 col-sm-5 col-xs-5"> <img src="https://pics.freeicons.io/uploads/icons/png/10685308661585492606-512.png" alt="Snow" style="width:100%; padding:5px;">
<div class="centered"><p style="color:#0e5dae; text-align:center;font-size:16px;"><strong><?php echo convert_Nos(get_comments_number( $post_id )); ?></strong><br>प्रतिक्रिया</p></div>
</div>
<div class="col-md-7 col-sm-7 col-xs-7 mst"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
</div>
</div>
    <?php endwhile;
    wp_reset_query();
}
?>

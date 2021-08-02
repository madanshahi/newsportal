<?php
function RelatedPost(){
        $orig_post = $post;
        global $post;
        $tags = wp_get_post_tags($post->ID);
 
        if ($tags) {
            $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
            $args=array(
                'tag__in' => $tag_ids,
                'post__not_in' => array($post->ID),
                'posts_per_page'=>4, // Number of related posts to display.
                'caller_get_posts'=>1
            );
 
        $my_query = new wp_query( $args );
 
        while( $my_query->have_posts() ) {
            $my_query->the_post();
        ?>
 
 <div class="col">
<div class="generic__post--wrap ok__thumb--regular">
<div class="soft__wrap">
<div class="post__image ">
<a href="<?php the_permalink() ?>"><?php has_post_thumbnail();
                the_post_thumbnail('big', array('class' => 'img-responsive')); ?>
</div>
<div class="post__heading">
<h2 class="title__small post__title">
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
 
        <?php }
        }
        $post = $orig_post;
        wp_reset_query();
    }
        ?>
    

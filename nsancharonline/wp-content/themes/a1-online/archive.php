<?php get_header();
  $i = 1;
?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="content" class="site-content" role="main">
                    <div class="tit"><div class="cat-head"><a><?php $curr_cat = get_category( $cat ); $cat_name = ( $curr_cat ) ? $curr_cat->cat_name : 'No Category Found!!'; echo $cat_name;' हरु' ?></a></div></div>
                    <?php while (have_posts()) : the_post(); ?>			
        				<div class="archiv-bx">
        				    <div class="row">
        				        <div class="col-md-4 col-sm-4 col-xs-12">
            				        <?php if( get_field('video') ): ?><div class="responsive-video"><?php the_field('video'); ?></div><?php endif;?>
                                     <a href="<?php the_permalink() ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail('sobiz-big',array('class' => 'img-responsive')); }
                                         else { ?> <?php } ?></a>
            				    </div>
            				    <div class="col-md-8 col-sm-8 col-xs-12">
            				        <a class="mn-tt"><?php the_title(); ?></a>
            			             <p><?php echo excerpt(35); ?>...</p>
            			             <span class="read all"><a href="<?php the_permalink();?>">पुरा पढ्नुहोस</a></span>

            				    </div>
        				    </div>
        				</div>
                    <?php endwhile; ?>
                    <div id="navigation">
                        <ul class = "pagination pagination-lg">
                            <li><?php post_pagination(); ?></li>
                        </ul>
                    </div>
                </div><!-- #content .site-content -->
            </div>
        </div>
    </div>
</section>
<section id="primary" class="content-area col-md-12">

</section><!-- #primary .content-area -->
<?php get_footer(); ?>
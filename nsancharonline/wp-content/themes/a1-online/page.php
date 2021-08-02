<?php
/**
 * The Template for displaying all single posts.
 * 
 * @package _bootstraps
 * @package _bootstraps - 2013 1.0
 */
get_header();
?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-9 col-xs-12">
                <div id="content" class="site-content" role="main">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php the_title(); ?></h1>
                            </header><!-- .entry-header -->
                            <div class="entry-content">
                                <?php the_content(); ?>
                                <?php wp_link_pages( array('before' => '<div class="page-links">' . __( 'Pages:', 'dokan' ), 'after' => '</div>') ); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-<?php the_ID(); ?> -->
                    <?php endwhile; // end of the loop. ?>
                </div><!-- #content .site-content -->
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
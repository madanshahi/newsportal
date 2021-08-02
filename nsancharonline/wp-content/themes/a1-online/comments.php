<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		;
		?>
		<h5 class="comments-title">
			<?php if ( '1' === $twenty_twenty_one_comment_count ) : ?>
				<?php esc_html_e( '1 प्रतिक्रिया', 'twentytwentyone' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone' ) ),
					esc_html( number_format_i18n( $twenty_twenty_one_comment_count ) )
				);
				?>
			<?php endif; ?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 30,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		

		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'twentytwentyone' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php
	comment_form(
		array(
			'logged_in_as'       => null,
			'title_reply'        => esc_html__( 'प्रतिकृया थप्नुहोस्', 'twentytwentyone' ),
			'title_reply_before' => '<h5 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h5>',
		)
	);
	?>

</div><!-- #comments -->
<style>
#author, #email { 
font-family: "Open Sans", "Droid Sans", Arial;
font-style:italic;
color:#1d1d1d; 
letter-spacing:.1em;
} 
#url  { 
color: #1d1d1d;
font-family: "Luicida Console", "Courier New", "Courier", monospace; 
}
</style>

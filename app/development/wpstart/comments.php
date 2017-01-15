<?php
/**
 * Comments Template
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<?php do_action('wpstart_comments_before'); ?>

<div id="comments" class="comments-area">
	<?php if ( post_password_required() ) : ?>
	<p class="no-password"><?php _e( 'Protected Comments: Please enter your password to view comments.', 'wpstart' ); ?></p>
</div>
<?php 
return; 
endif; ?>

	<?php if ( have_comments() ) : ?>
	<h3 id="comments-title">
		<?php 
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number(), 'wpstart' ), 
				number_format_i18n( get_comments_number()), '<em>' . get_the_title() . '</em>' ); 
		?>
	</h3>
	
	<ol class="comment-list">
		<?php
			wp_list_comments( array(
				'avatar_size' => 64,
			) );
		?>
	</ol>
	
	<?php
	// Are there comments to navigate through?
	if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
	?>
	<div class="navigation comment-navigation" role="navigation">
		<h2 class="screen-reader-text sr-only"><?php _e( 'Comment navigation', 'krusze' ); ?></h2>
		<div class="nav-links">
			<div class="nav-previous"><?php previous_comments_link( __( 'Older Comments', 'krusze' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments', 'krusze' ) ); ?></div>
		</div><!-- .nav-links -->
	</div><!-- .comment-navigation -->
	<?php
	endif;

	else : // if there are no comments
	
		if ( ! comments_open() && get_comments_number() ) : // if comments are closed ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'wpstart' ); ?></p>
		<?php endif; // end comments_open() ?>

	<?php endif; // end have_comments() ?>

	<?php 
	$comments_args = array(
		// redefine your own textarea (the comment body)
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'wpstart' ) . ' <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
	);
	comment_form($comments_args); ?>
</div>

<?php do_action('wpstart_comments_after'); ?>
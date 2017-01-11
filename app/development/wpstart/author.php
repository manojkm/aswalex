<?php
/**
 * Author Template
 * This template is used when an author page is shown.
 *
 * @package WordPress
 * @subpackage WPstart
 */
get_header(); ?>

<?php do_action('wpstart_container_before'); ?>

<?php do_action('wpstart_container_top'); ?>

	<?php do_action('wpstart_main_before'); ?>
	
	<?php do_action('wpstart_main_top'); ?>
				
		<?php if ( have_posts() ) : ?>
		
		<?php do_action('wpstart_entry_loop_before'); ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		<?php do_action('wpstart_entry_loop_after'); ?>
		
		<?php else : ?>
			
			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

	<?php do_action('wpstart_main_bottom'); ?>
	
	<?php do_action('wpstart_main_after'); ?>
	
	<?php get_sidebar(); ?>

<?php do_action('wpstart_container_bottom'); ?>

<?php do_action('wpstart_container_after'); ?>

<?php get_footer(); ?>
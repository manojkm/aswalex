<?php
/**
 * Sidebar widget area.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<?php do_action('wpstart_sidebars_before'); ?>

<?php if ( is_active_sidebar( 'sidebar-1' ) && wpstart_post_layout() != 'one-column' ) : ?>
<div id="sidebar-primary" class="sidebar sidebar-primary" role="complementary">
	<?php do_action('wpstart_sidebar_top'); ?>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php do_action('wpstart_sidebar_bottom'); ?>
</div><!-- #sidebar-primary -->
<?php endif; ?>
		
<?php do_action('wpstart_sidebars_after'); ?>
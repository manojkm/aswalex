<?php
/**
 * Sidebar footer widget area.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<?php if ( is_active_sidebar( 'footer' ) ) : ?>
	<div id="sidebar-footer" class="sidebar sidebar-footer">
		<?php dynamic_sidebar( 'footer' ); ?>
	</div><!-- .sidebar-footer -->
<?php endif; ?>
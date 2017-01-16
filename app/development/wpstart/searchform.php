<?php
/**
 * Template for displaying search forms.
 *
 * @package WordPress
 * @subpackage WPstart
 */
?>

<form role="search" method="get" class="search-form" action="<?php esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text sr-only"><?php _x( 'Search for:', 'label', 'wpstart' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'wpstart' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'wpstart' ); ?>" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'wpstart' ); ?>" />
</form>
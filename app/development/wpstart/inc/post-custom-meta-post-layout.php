<?php
/**
 * Adds post layout options on posts and pages.
 *
 * @package WordPress
 * @subpackage WPstart
 */
 
// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * wpstart_post_layout_add_meta_box
 * Adds a box to the side column on the Page and Post edit screens.
 */
function wpstart_post_layout_add_meta_box() {
	$post_types = array( 'page', 'post' );
	
	foreach ( $post_types as $post_type ) {
		add_meta_box( 
			'wpstart_post_layout', 
			__( 'Post layout', 'wpstart' ), 
			'wpstart_post_layout_callback', 
			$post_type, 
			'side', 
			'default' 
		);
    }
}
add_action( 'add_meta_boxes', 'wpstart_post_layout_add_meta_box' );

/**
 * Prints the box content.
 */
function wpstart_post_layout_callback() {
	// Add a nonce field so we can check for it later.
	wp_nonce_field( 'wpstart_post_layout', 'wpstart_post_layout_nonce' );
	
	global $post;
	$custom        = ( get_post_custom( $post->ID ) ? get_post_custom( $post->ID ) : false );
	$post_layout        = ( isset( $custom['_wpstart_post_layout'][0] ) ? $custom['_wpstart_post_layout'][0] : 'default' );
	$valid_post_layouts = wpstart_valid_post_layouts();
	?>
	<p>
		<label><input type="radio" name="_wpstart_post_layout" <?php checked( 'default' == $post_layout ); ?> value="default" />
		<?php esc_html_e( 'Default', 'wpstart' ); ?></label><br />
		<?php foreach( $valid_post_layouts as $slug => $name ) { ?>
			<label><input type="radio" name="_wpstart_post_layout" <?php checked( $slug == $post_layout ); ?> value="<?php echo esc_attr( $slug ); ?>" />
			<?php echo esc_html( $name ); ?></label><br />
		<?php } ?>
	</p>
<?php
}

/**
 * When the post is saved, saves our custom data.
 */
function wpstart_post_layout_save_meta_box_data() {
	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	// Verify that the nonce is valid.
	if ( ! isset( $_POST['wpstart_post_layout_nonce'] ) && ! wp_verify_nonce( $_POST['wpstart_post_layout_nonce'] ) ) {
		return;
	}

	// Check the user's permissions.
	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}
	
	global $post;
	if( !isset( $post ) || !is_object( $post ) ) {
		return;
	}
	$valid_post_layouts = wpstart_valid_post_layouts();
	$post_layout        = ( isset( $_POST['_wpstart_post_layout'] ) && array_key_exists( $_POST['_wpstart_post_layout'], $valid_post_layouts ) ? $_POST['_wpstart_post_layout'] : 'default' );

	update_post_meta( $post->ID, '_wpstart_post_layout', $post_layout );
}

// Hook the save post layout post custom meta data into
// publish_{post-type}, draft_{post-type}, and future_{post-type}
add_action( 'publish_post', 'wpstart_post_layout_save_meta_box_data' );
add_action( 'publish_page', 'wpstart_post_layout_save_meta_box_data' );
add_action( 'draft_post', 'wpstart_post_layout_save_meta_box_data' );
add_action( 'draft_page', 'wpstart_post_layout_save_meta_box_data' );
add_action( 'future_post', 'wpstart_post_layout_save_meta_box_data' );
add_action( 'future_page', 'wpstart_post_layout_save_meta_box_data' );


/**
 * wpstart_valid_post_layouts
 * Get valid post layouts.
 */
function wpstart_valid_post_layouts() {
	$post_layouts = array(
		'one-column'			=> __( 'One column', 'wpstart' ),
		'two-columns-right-sidebar'	=> __( 'Two columns, right sidebar', 'wpstart' ),
		'two-columns-left-sidebar'	=> __( 'Two columns, left sidebar', 'wpstart' )
	);

	return apply_filters( 'wpstart_valid_post_layouts', $post_layouts );
}

/**
 * wpstart_post_layout
 * Get current post layout.
 */
function wpstart_post_layout() {
	// 404 pages
	if( is_404() ) {
		return 'default';
	}
	$post_layout = '';
	
	$valid_post_layouts = wpstart_valid_post_layouts();

	global $post;
	$post_layout_meta_value = ( false != get_post_meta( get_the_ID(), '_wpstart_post_layout', true ) ? get_post_meta( get_the_ID(), '_wpstart_post_layout', true ) : 'default' );
	$post_layout_meta       = ( array_key_exists( $post_layout_meta_value, $valid_post_layouts ) ? $post_layout_meta_value : 'default' );	
	
	if( 'default' != $post_layout_meta ) {
		$post_layout = $post_layout_meta;
	} else {
		$post_layout = 'default';	
	}

	return apply_filters( 'wpstart_post_layout', $post_layout );
}

/**
 * wpstart_post_layout_content_classes
 * Get content classes.
 */
function wpstart_post_layout_content_classes() {
	$content_classes = array();
	$post_layout          = wpstart_post_layout();
	
	if( 'default' == $post_layout ) {
		$content_classes[] = get_theme_mod( 'wpstart_post_layout', 'two-columns-right-sidebar' );
	}
	else {
		if( 'one-column' == $post_layout ) {
			$content_classes[] = 'one-column';
		}
		else {
			if( 'two-columns-right-sidebar' == $post_layout ) {
				$content_classes[] = 'two-columns-right-sidebar';
			}
			else {
				if( 'two-columns-left-sidebar' == $post_layout ) {
					$content_classes[] = 'two-columns-left-sidebar';
				}
			}
		}
	}

	return apply_filters( 'wpstart_post_layout_content_classes', $content_classes );
}

/**
 * wpstart_post_layout_body_class
 */
function wpstart_post_layout_body_class( $classes ) {

	// add 'class-name' to the $classes array
	$content_class = implode( ' ', wpstart_post_layout_content_classes() );
	$classes[] = $content_class;
	
	// return the $classes array
	return $classes;
}
add_filter( 'body_class', 'wpstart_post_layout_body_class', 20 );
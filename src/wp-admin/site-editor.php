<?php
/**
 * Site Editor administration screen.
 *
 * @package WordPress
 * @subpackage Administration
 */

global $post, $editor_styles;

/** WordPress Administration Bootstrap */
require_once __DIR__ . '/admin.php';

if ( ! current_user_can( 'edit_theme_options' ) ) {
	wp_die(
		'<h1>' . __( 'You need a higher level of permission.' ) . '</h1>' .
		'<p>' . __( 'Sorry, you are not allowed to edit theme options on this site.' ) . '</p>',
		403
	);
}

if ( ! wp_is_block_template_theme() ) {
	wp_die( __( 'The theme you are currently using is not compatible with Full Site Editing.' ) );
}

// Used in the HTML title tag.
$title       = __( 'Editor (beta)' );
$parent_file = 'themes.php';

// Flag that we're loading the block editor.
$current_screen = get_current_screen();
$current_screen->is_block_editor( true );

// Default to is-fullscreen-mode to avoid jumps in the UI.
add_filter(
	'admin_body_class',
	static function( $classes ) {
		return "$classes is-fullscreen-mode";
	}
);

$block_editor_context = new WP_Block_Editor_Context();

$active_global_styles_id = WP_Theme_JSON_Resolver::get_user_custom_post_type_id();
$active_theme            = wp_get_theme()->get_stylesheet();
$preload_paths           = array(
	array( '/wp/v2/media', 'OPTIONS' ),
	'/',
	'/wp/v2/types?context=edit',
	'/wp/v2/taxonomies?context=edit',
	'/wp/v2/pages?context=edit',
	'/wp/v2/categories?context=edit',
	'/wp/v2/posts?context=edit',
	'/wp/v2/tags?context=edit',
	'/wp/v2/templates?context=edit',
	'/wp/v2/template-parts?context=edit',
	'/wp/v2/settings',
	'/wp/v2/themes?context=edit&status=active',
	'/wp/v2/global-styles/' . $active_global_styles_id . '?context=edit',
	'/wp/v2/global-styles/' . $active_global_styles_id,
	'/wp/v2/themes/' . $active_theme . '/global-styles',
	'/wp/v2/block-navigation-areas?context=edit',
);

$areas        = get_option( 'wp_navigation_areas', array() );
$active_areas = array_intersect_key( $areas, get_navigation_areas() );
foreach ( $active_areas as $post_id ) {
	if ( $post_id ) {
		$preload_paths[] = add_query_arg( 'context', 'edit', rest_get_route_for_post( $post_id ) );
	}
}

block_editor_rest_api_preload( $preload_paths, $block_editor_context );

$editor_settings = get_block_editor_settings(
	array(
		'siteUrl'                              => site_url(),
		'postsPerPage'                         => get_option( 'posts_per_page' ),
		'styles'                               => get_block_editor_theme_styles(),
		'defaultTemplateTypes'                 => get_default_block_template_types(),
		'defaultTemplatePartAreas'             => get_allowed_block_template_part_areas(),
		'__experimentalBlockPatterns'          => WP_Block_Patterns_Registry::get_instance()->get_all_registered(),
		'__experimentalBlockPatternCategories' => WP_Block_Pattern_Categories_Registry::get_instance()->get_all_registered(),
	),
	$block_editor_context
);

wp_add_inline_script(
	'wp-edit-site',
	sprintf(
		'wp.domReady( function() {
			wp.editSite.initialize( "site-editor", %s );
		} );',
		wp_json_encode( $editor_settings )
	)
);

// Preload server-registered block schemas.
wp_add_inline_script(
	'wp-blocks',
	'wp.blocks.unstable__bootstrapServerSideBlockDefinitions(' . wp_json_encode( get_block_editor_server_block_settings() ) . ');'
);

wp_add_inline_script(
	'wp-blocks',
	sprintf( 'wp.blocks.setCategories( %s );', wp_json_encode( get_block_categories( $post ) ) ),
	'after'
);

wp_enqueue_script( 'wp-edit-site' );
wp_enqueue_script( 'wp-format-library' );
wp_enqueue_style( 'wp-edit-site' );
wp_enqueue_style( 'wp-format-library' );
wp_enqueue_media();

if (
	current_theme_supports( 'wp-block-styles' ) ||
	( ! is_array( $editor_styles ) || count( $editor_styles ) === 0 )
) {
	wp_enqueue_style( 'wp-block-library-theme' );
}

/** This action is documented in wp-admin/edit-form-blocks.php */
do_action( 'enqueue_block_editor_assets' );

require_once ABSPATH . 'wp-admin/admin-header.php';
?>

<div id="site-editor" class="edit-site"></div>

<?php

require_once ABSPATH . 'wp-admin/admin-footer.php';

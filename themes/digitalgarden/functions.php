<?php

namespace digitalgarden;

function load_inc() {
	require_once get_template_directory() . '/inc/query-filters.php';
	require_once get_template_directory() . '/inc/content-type-edits.php';
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\load_inc' );

function load_css() {
	wp_enqueue_style( 'digitalgarden', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\load_css' );

function set_default_category( $id, $post ) {

	$default = get_option( 'default_category' );

	$result = wp_set_object_terms( $id, $default, 'category', true );
	add_action('admin_notices', function() use ( $result ) {
		var_dump($result);
	});
}
add_action( 'publish_post', __NAMESPACE__ . '\set_default_category', 10, 2 );
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
}
add_action( 'publish_post', __NAMESPACE__ . '\set_default_category', 10, 2 );

function headcleanup() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
}
add_action( 'init', __NAMESPACE__ . '\headcleanup' );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

function webmention_callback( $comment, $args, $depth ) {
?>
	<div class="other-plants">
	<div class="comment-content plant"><?php comment_text(); ?></div>
	</div>
<?php
}

function favicon() {
	?>
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🧤</text></svg>">
	<?php
}
add_action( 'wp_head', __NAMESPACE__ . '\favicon' );
add_action( 'admin_head', __NAMESPACE__ . '\favicon' );
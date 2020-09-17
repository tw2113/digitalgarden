<?php

namespace digitalgarden;

function load_inc() {
	require_once get_template_directory() . '/inc/query-filters.php';
	require_once get_template_directory() . '/inc/content-type-edits.php';
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\load_inc' );
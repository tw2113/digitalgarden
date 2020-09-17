<?php

namespace digitalgarden;

function taxonomies_for_pages() {
	register_taxonomy_for_object_type( 'post_tag', 'page' );
	register_taxonomy_for_object_type( 'category', 'page' );
}
add_action( 'init', __NAMESPACE__ . '\taxonomies_for_pages' );
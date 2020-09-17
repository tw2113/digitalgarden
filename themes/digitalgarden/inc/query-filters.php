<?php

namespace digitalgarden;

function pages_on_frontpage( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if ( ! $query->is_home() ) {
		return;
	}

	$query->set(
		'post_type', [ 'page' ]
	);
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\pages_on_frontpage' );


function tags_archives( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if (
		(
			( is_archive() || is_search() ) &&
			$query->get( 'tag' )
		) &&
		(
			! $query->get( 'post_type' )
		)
	) {
		$query->set(
			'post_type', [ 'page' ]
		);
	}
}
add_action( 'pre_get_posts', __NAMESPACE__ . '\tags_archives' );

function category_archives( $query ) {

	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}

	if (
		(
			$query->get( 'category_name' ) ||
			$query->get( 'cat' )
		) &&
		(
			! $query->get( 'post_type' )
		)
	) {
		$query->set(
			'post_type',
			[ 'page' ]
		);
	}


} // category_archives
<?php

namespace Blaggins\Overrides;

function run() {

	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'feed_links_extra', 3 );

	remove_action( 'wp_head',            'print_emoji_detection_script', 7 );
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_emoji_styles' );
	remove_action( 'wp_print_styles',    'print_emoji_styles' ); /** Retained for backwards compatibility */

	remove_action( 'wp_head',           'rsd_link');
	remove_action( 'wp_head',           'rest_output_link_wp_head' );
	remove_action( 'template_redirect', 'rest_output_link_header' );
	remove_action( 'xmlrpc_rsd_apis',   'rest_output_rsd' );

	remove_action( 'wp_head', 'wp_shortlink_wp_head' );

	add_filter( 'the_generator', '__return_empty_string' );
}

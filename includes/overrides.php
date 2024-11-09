<?php

namespace Blaggins\Overrides;

/**
 * 1. Disable WordPress emoji
 * 2. Remove WordPress meta generator
 * 3. <body> class cleanup
 * 4. <article> class cleanup
 * 5. menu class cleanup
 */

/**
 * Override some default WordPress core behavior.
 */




// function setup() {
//     remove_wphead_feed_links();
//     remove_wp_emoji();
//     remove_wphead_api_links();
//     remove_wphead_wp_version();
//     remove_wphead_shortlink();
//     cleanup_class_body();
// }

// function remove_wphead_feed_links() {
//     remove_action( 'wp_head', 'feed_links', 2 );
//     remove_action( 'wp_head', 'feed_links_extra', 3 );
// }

// function remove_wp_emoji() {
//     // Remove the Emoji detection script.
//     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

//     // Remove inline Emoji detection script.
//     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );

//     // Remove Emoji-related styles from front end and back end.
//     remove_action( 'wp_print_styles',    'print_emoji_styles' );
//     remove_action( 'admin_print_styles', 'print_emoji_styles' );

//     // Remove Emoji-to-static-img conversion.
//     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
//     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
//     remove_filter( 'wp_mail',          'wp_staticize_emoji_for_email' );

//     add_filter( 'tiny_mce_plugins',  __NAMESPACE__ . '\disable_emoji_tiny_mce' );
//     add_filter( 'wp_resource_hints', __NAMESPACE__ . '\disable_emoji_prefetch', 10, 2 );
// }

// function disable_emoji_tiny_mce( $plugins ) {
//     if ( is_array( $plugins ) && in_array( 'wpemoji', $plugins, true ) ) {
//         return array_diff( $plugins, array( 'wpemoji' ) );
//     }
//     return $plugins;
// }

// function disable_emoji_prefetch( $urls, $relation_type ) {
//     if ( 'dns-prefetch' === $relation_type ) {
//         // This filter is documented in wp-includes/formatting.php
//         $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/15.0.3/svg/' );

//         $urls = array_values( array_diff( $urls, array( $emoji_svg_url ) ) );
//     }
//     return $urls;
// }

// function remove_wphead_api_links() {
//     remove_action( 'wp_head',           'rest_output_link_wp_head' );
//     remove_action( 'template_redirect', 'rest_output_link_header' );
//     remove_action( 'wp_head',           'rsd_link');
//     remove_action( 'xmlrpc_rsd_apis',   'rest_output_rsd' );
// }

// function remove_wphead_wp_version() {
//     add_filter( 'the_generator', '__return_empty_string' );
// }

// function remove_wphead_shortlink() {
//     remove_action( 'wp_head', 'wp_shortlink_wp_head' );
// }

// function cleanup_class_body() {
//     add_filter( 'body_class', __NAMESPACE__ . '\selftawt_body_class', 20 );
// }

// function selftawt_body_class( $classes ) {
//     $allowed_classes = array(
//         'single',
//         'page',
//         'archive',
//         'home',
//         'search',
//         'admin-bar',
//         'logged-in',
//         'wp-embed-responsive',
//     );
//     return array_intersect( $classes, $allowed_classes );
// }

<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @link 	https://developer.wordpress.org/themes/basics/theme-functions/
 * @link 	https://selftawt.com
 * @author 	Rey Sanchez
 * @license GPL 3.0
 */

namespace Blaggins;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BLAGGINS_THEME_VERSION', '0.1.0' );
define( 'BLAGGINS_THEME_INCLUDE', get_template_directory() . '/includes/' );


add_action( 'after_setup_theme', function() {

	// Let WordPress handle the <title> tag in the document head.
    add_theme_support( 'title-tag' );

	// RSS feeds will be displayed in <head>
    add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for featured image.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'responsive-embeds' );

    add_theme_support( 'customize-selective-refresh-widgets' );

	add_theme_support(
		'html5',
		[
			'search-form',
			'gallery',
			'caption',

			/**
			* Remove type="text/javascript" and type="text/css" from enqueued scripts and styles.
			* Added in v5.3.
     		*
     		* @link https://make.wordpress.org/core/2019/10/15/miscellaneous-developer-focused-changes-in-5-3/
     		*/
			'script',
			'style',

			/**
     		* Accessibility improvements to widgets outputting lists of links.
			* Added in v5.5.
     		*
     		* @link https://make.wordpress.org/core/2020/07/09/accessibility-improvements-to-widgets-outputting-lists-of-links-in-5-5/
     		*/
			'navigation-widgets'
		]
	);

	/**
	 * Adding custom logo support.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/custom-logo/#adding-custom-logo-support-to-your-theme
	 */
	add_theme_support(
		'custom-logo',
		[
			'height'      =>  70, /* px */
			'width'       => 350, /* px */
			'flex-width'  => true,
			'flex-height' => true,
		]
	);

	/**
	 * The following Post Formats are supported by this theme.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/post-formats/#supported-formats
	 */
    add_theme_support(
		'post-formats',
		[
        	'aside',
			'gallery',
			'link',
        	'image',
			'quote',
			'status',
        	'video',
		]
	);

    register_nav_menus(
		[
			'menu-header' => esc_html__( 'Header Menu', 'blaggins' ),
        	'menu-footer' => esc_html__( 'Footer Menu', 'blaggins' ),
		]
	);

	add_theme_support( 'editor-styles' );
	// add_editor_style();

	remove_theme_support( 'block-templates' );
    remove_theme_support( 'core-block-patterns' );
} );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style(
		'blaggins-theme',
		get_theme_file_uri( '/assets/css/main.css' ),
		array(),
		filemtime( get_theme_file_path( '/assets/css/main.css') )
	);
} );

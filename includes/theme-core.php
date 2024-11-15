<?php

namespace Blaggins\Core;

function setup() {
    $fn = function( $function ) {
        return __NAMESPACE__ . "\\$function";
    };

    add_action( 'after_setup_theme', $fn( 'blaggins_theme_setup' ) );

    add_action( 'wp_enqueue_scripts', $fn( 'frontend_styles' ) );
	add_action( 'wp_enqueue_scripts', $fn( 'frontend_script' ) );

    add_action( 'admin_enqueue_scripts', $fn( 'admin_script' ) );
    add_action( 'admin_enqueue_scripts', $fn( 'admin_styles' ) );

    add_action( 'wp_head', $fn( 'embed_ct_css' ) );
}

function blaggins_theme_setup() {
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
		'html5', [
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
		'custom-logo', [
			'height'      =>  70, /* px */
			'width'       => 350, /* px */
			'flex-width'  => true,
			'flex-height' => true,
		]
	);

	/**
	 *
	 *
	 * @link https://developer.wordpress.org/themes/functionality/post-formats/#supported-formats
	 */
	add_theme_support(
		'post-formats', [
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
		]
	);

	register_nav_menus( [
		'menu-header' => esc_html__( 'Header Menu', 'blaggins' ),
		'menu-footer' => esc_html__( 'Footer Menu', 'blaggins' ),
	] );

	add_theme_support( 'editor-styles' );
	// add_editor_style();

    remove_theme_support( 'block-templates' );
    remove_theme_support( 'core-block-patterns' );
}

function frontend_script() {

}

function frontend_styles() {
	// wp_enqueue_style(
	// 	'blaggins-hybrid',
	// 	get_theme_file_uri( '/assets/css/main.css' ),
	// 	array(),
	// 	filemtime( get_theme_file_path( '/assets/css/main.css') )
	// );
}

function admin_script() {

}

function admin_styles() {

}

/**
 * Inlines ct.css in the head
 *
 * Embeds a diagnostic CSS file written by Harry Roberts
 * that helps diagnose render blocking resources and other
 * performance bottle necks.
 *
 * The CSS is inlined in the head of the document, only when requesting
 * a page with the query param ?debug_perf=1
 *
 * @link    https://csswizardry.com/ct/
 * @return  void
 */
function embed_ct_css() {
    $debug_performance = rest_sanitize_boolean( filter_input( INPUT_GET, 'debug_perf', FILTER_SANITIZE_NUMBER_INT ) );

	if ( ! $debug_performance ) {
		return;
	}

	wp_register_style( 'ct', false ); // phpcs:ignore
	wp_enqueue_style( 'ct' );
	wp_add_inline_style( 'ct', 'head{--ct-is-problematic:solid;--ct-is-affected:dashed;--ct-notify:#0bce6b;--ct-warn:#ffa400;--ct-error:#ff4e42}head,head [rel=stylesheet],head script,head script:not([src])[async],head script:not([src])[defer],head script~meta[http-equiv=content-security-policy],head style,head>meta[charset]:not(:nth-child(-n+5)){display:block}head [rel=stylesheet],head script,head script~meta[http-equiv=content-security-policy],head style,head title,head>meta[charset]:not(:nth-child(-n+5)){margin:5px;padding:5px;border-width:5px;background-color:#fff;color:#333}head ::before,head script,head style{font:16px/1.5 monospace,monospace;display:block}head ::before{font-weight:700}head link[rel=stylesheet],head script[src]{border-style:var(--ct-is-problematic);border-color:var(--ct-warn)}head script[src]::before{content:"[Blocking Script – " attr(src) "]"}head link[rel=stylesheet]::before{content:"[Blocking Stylesheet – " attr(href) "]"}head script:not(:empty),head style:not(:empty){max-height:5em;overflow:auto;background-color:#ffd;white-space:pre;border-color:var(--ct-notify);border-style:var(--ct-is-problematic)}head script:not(:empty)::before{content:"[Inline Script] "}head style:not(:empty)::before{content:"[Inline Style] "}head script:not(:empty)~title,head script[src]:not([async]):not([defer]):not([type=module])~title{display:block;border-style:var(--ct-is-affected);border-color:var(--ct-error)}head script:not(:empty)~title::before,head script[src]:not([async]):not([defer]):not([type=module])~title::before{content:"[<title> blocked by JS] "}head [rel=stylesheet]:not([media=print]):not(.ct)~script,head style:not(:empty)~script{border-style:var(--ct-is-affected);border-color:var(--ct-warn)}head [rel=stylesheet]:not([media=print]):not(.ct)~script::before,head style:not(:empty)~script::before{content:"[JS blocked by CSS – " attr(src) "]"}head script[src][src][async][defer]{display:block;border-style:var(--ct-is-problematic);border-color:var(--ct-warn)}head script[src][src][async][defer]::before{content:"[async and defer is redundant: prefer defer – " attr(src) "]"}head script:not([src])[async],head script:not([src])[defer]{border-style:var(--ct-is-problematic);border-color:var(--ct-warn)}head script:not([src])[async]::before{content:"The async attribute is redundant on inline scripts"}head script:not([src])[defer]::before{content:"The defer attribute is redundant on inline scripts"}head [rel=stylesheet][href^="//"],head [rel=stylesheet][href^=http],head script[src][src][src^="//"],head script[src][src][src^=http]{border-style:var(--ct-is-problematic);border-color:var(--ct-error)}head script[src][src][src^="//"]::before,head script[src][src][src^=http]::before{content:"[Third Party Blocking Script – " attr(src) "]"}head [rel=stylesheet][href^="//"]::before,head [rel=stylesheet][href^=http]::before{content:"[Third Party Blocking Stylesheet – " attr(href) "]"}head script~meta[http-equiv=content-security-policy]{border-style:var(--ct-is-problematic);border-color:var(--ct-error)}head script~meta[http-equiv=content-security-policy]::before{content:"[Meta CSP defined after JS]"}head>meta[charset]:not(:nth-child(-n+5)){border-style:var(--ct-is-problematic);border-color:var(--ct-warn)}head>meta[charset]:not(:nth-child(-n+5))::before{content:"[Charset should appear as early as possible]"}link[rel=stylesheet].ct,link[rel=stylesheet][media=print],script[async],script[defer],script[type=module],style.ct{display:none}' );
}

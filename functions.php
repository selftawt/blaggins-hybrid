<?php
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * @link 	https://developer.wordpress.org/themes/basics/theme-functions/
 * @link 	https://selftawt.com
 * @author 	Rey Sanchez
 * @license GPL 3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'BLAGGINS_THEME_INC', get_template_directory() . '/includes/' );

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	 require_once __DIR__ . '/vendor/autoload.php';
}

require_once BLAGGINS_THEME_INC . 'theme-core.php';
require_once BLAGGINS_THEME_INC . 'theme-overrides.php';

\Blaggins\Core\setup();
\Blaggins\Overrides\run();





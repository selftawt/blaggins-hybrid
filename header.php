<?php

namespace Blaggins;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--
*
* This theme available for FREE. Open for feedback and feature requests.
*
* https://github.com/selftawt/blaggins-hybrid
*
* Author: Rey Sanchez
*
* https://selftawt.com
*
-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to main content', 'blaggins' ); ?></a>
<?php get_template_part( 'template-parts/header/header-site' ) ?>


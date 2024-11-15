<?php
/**
 *
 */

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
                             –▀▀▀▀▀ ▀▀––   ▀▀
 ▄██████ ▄███████▄     ▄█████████         ▄██████▄     ░
█▀  ▀█████▀     ▀██  ░████▀▀▀▀██▀ ░    ████▀    ▀████  ░
█    █████        ██ ░▓▓█▀ ░   ▀      █▓▓█ ░     ░█▓▓█ ░
 ▀   █▓▓█        ▄░░─░▀▒▒▒▒▒▒▒█▄──░  █▒▒█ ░ ────   █▒▒█░
 . ┌─█▓▓█        ▀   ░  ▀░░░░░░░█ ░  █░░█ ░        █░░█░
   : █░░█    ..      ░     .  █..█ ░  █..█ ░      █..█ ░
   . █..█            ░  ▄▀     █  █ ░ ░█  █▄    ▄█  █  ░
   | █  █   ──────   ░ ██──────████ ░   ▀▀▄██████▄▀▀
   └ ▀███            ░ ███▄  ▄████ ░   ░░░░      ░░░░░░░░
      ░░░            ░  ▀███████▀          .

   ┌──────▀▀▀▀ ▀▀──────── ██ ───────────▀▀▄▄▄  ▄▄▄──────┐
   : ░                    ▀█▄    ▄             ▀▀       ░ :
-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a id="skipnav" class="screen-reader-text" href="#main"><?php esc_html_e( 'Skip to main content', 'blaggins' ); ?></a>
<div class="container-body-inner">
<?php get_template_part( 'template-parts/header/header-site' ); ?>
<main id="main" tabindex="-1">



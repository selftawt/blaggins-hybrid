<?php

$site_title   = get_bloginfo( 'name' );
$site_tagline = get_bloginfo( 'description' );

if ( has_custom_logo() ) {
	the_custom_logo();
} else {
?>
	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( $site_title, 'blaggins' ) ?></a></h1>
	<span><?php esc_html_e( $site_tagline, 'blaggins' ) ?></span>
<?php
}
?>

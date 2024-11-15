<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$site_title   = get_bloginfo( 'name' );
$site_tagline = get_bloginfo( 'description' );
?>

<?php if ( has_custom_logo() ) : ?>
	<?php the_custom_logo(); ?>
<?php else: ?>
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_html_e( $site_title, 'blaggins' ) ?></a></p>
<?php endif; ?>

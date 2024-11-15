<?php
/**
 * Blaggins Hybrid
 *
 * @package Blaggins\Templates
 * @author	Rey Sanchez
 * @license	GPL-3.0
 * @link	https://github.com/selftawt/blaggins-hybrid
 */
?>

</main><!-- #main -->
<footer id="footer" itemscope itemtype="https://schema.org/WPFooter">
<?php if ( has_nav_menu( 'menu-footer' ) ) : ?>
	<div class="site-footer__menu">
	<nav id="footer-nav" class="footer__menu" aria-label="<?php esc_attr_e( 'Footer menu', 'blaggins' ); ?>">
		<?php
		wp_nav_menu( [
			'theme_location' => 'menu-footer',
			'menu_class'	 => 'footer__menu',
			'container'      => '__return_false',
		] );
		?>
	</nav><!-- #footer-nav -->
	</div><!-- .site-footer__menu -->
<?php endif; ?>
	<div class="site-footer__copyright"><p>© <?php bloginfo( 'name' ); ?></p></div>
</footer>
</div><!-- .container-body-inner -->
<?php wp_footer(); ?>
</body>
</html>

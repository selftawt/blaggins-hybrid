<?php if ( has_nav_menu( 'menu-header' ) ) : ?>
	<nav id="header-nav" class="header__menu" aria-label="<?php esc_attr_e( 'Header menu', 'blaggins' )?>" itemscope itemtype="https://schema.org/SiteNavigationElement">
	<?php
	wp_nav_menu( [
		'theme-location'	=> 'menu-header',
		'menu_class'		=> 'header__menu',
		'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'container'			=> '__return_false',
	] );
	?>
	</nav><!-- #header-nav -->
<?php endif; ?>

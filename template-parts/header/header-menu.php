<?php
if ( has_nav_menu( 'menu-header' ) ) { ?>
	<nav id="primary-navigation" class="menu-header" role="navigation" aria-label="<?php esc_attr_e( 'Header menu', 'blaggins' )?>" itemscope itemtype="https://schema.org/SiteNavigationElement">
	<?php
	wp_nav_menu(
		[
			'theme-location'	=> 'main_nav',
			'menu_class'		=> 'menu-header',
			'items_wrap'		=> '<ul id="%1$s" class="%2$s">%3$s</ul>',
		]
	);
	?>
	</nav><!-- #primary-navigation -->
<?php
}
?>

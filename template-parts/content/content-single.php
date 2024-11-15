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

<article <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article>


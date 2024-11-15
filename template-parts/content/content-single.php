<article <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_single() ) : ?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<?php endif; ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>


<?php

namespace Blaggins;

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();

		echo '<h2>'; the_title(); echo '</h2>';

		the_content();
	endwhile;
endif;

get_footer();

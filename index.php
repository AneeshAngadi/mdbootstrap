<?php

get_header();

echo '<div class="container">';

if ( have_posts() ) {

  echo '<section>';

  echo '<h1 class="h2 font-weight-bold my-4 text-center">Recent posts</h1>';

  echo '<div class="row row-cols-1 row-cols-md-3 g-4">';

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

    get_template_part( 'template-parts/content/content-grid' );

	}

  echo '</div>';

  echo '</section>';
} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

echo '</div>';

get_footer();

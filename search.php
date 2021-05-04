<?php
/**
 *
 *Template for displaying search results page
 *
 *
 *
 */

get_header();

echo '<div class="container">';

if ( have_posts() ) {

  echo '<section class="mb-4">';

  echo '<h1 class="h2 font-weight-bold mt-4 text-center">';
  printf(
				/* translators: %s: Search term. */
				esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				'<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
			);
  echo '</h1>';

  echo '<h4 class="mb-4 text-center">';
  printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'mdbootstrap'
				)
			),
			(int) $wp_query->found_posts
		);
  echo '</h4>';

  echo '<div class="row row-cols-1 row-cols-md-3 g-4">';

	// Load posts loop.
	while ( have_posts() ) {
		the_post();

    get_template_part( 'template-parts/content/content-grid' );

	}

  echo '</div>';

  echo '</section>';

mdb_pagination();

} else {

	// If no content, include the "No posts found" template.
	get_template_part( 'template-parts/content/content-none' );

}

echo '</div>';

get_footer();

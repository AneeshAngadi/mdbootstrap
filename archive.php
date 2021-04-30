<?php
/**
 * The template for displaying archive pages
 *
 */

get_header();

$description = get_the_archive_description();

echo '<div class="container">';

if ( have_posts() ) {

  echo '<section>';

  the_archive_title( '<h1 class="h2 font-weight-bold my-4 text-center">', '</h1>' );

  if ($description) {
    echo '<div class="text-center">', wp_kses_post( wpautop( $description ) ) ,'</div>';
  }


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

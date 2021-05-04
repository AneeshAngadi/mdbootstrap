<?php
/**
 *
 *Template part for displaying a message that posts cannot be found
 *
 */

?>

<section class="mb-4">
  <h1 class="h2 font-weight-bold my-4 text-center">
    <?php

    if (is_search()) {
      printf(
      /* translators: %s: Search term. */
      esc_html__( 'Results for "%s"', 'mdbootstrap' ),
      '<span class="search-term">' . esc_html( get_search_query() ) . '</span>'
      );
    } else {
      esc_html_e( 'Nothing here', 'mdbootstrap' );
    }

   ?>
 </h1>
 <hr>
 <div>
   <?php
     if (is_home() && current_user_can( 'publish_posts' )) {
       printf(
				'<p>' . wp_kses(
					/* translators: %s: Link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'mdbootstrap' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);
     } elseif (is_search()) {
       echo '<p>';
       esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'mdbootstrap' );
       echo '</p>';
       get_search_form();
     } else {
       echo '<p>';
       esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'mdbootstrap' );
       echo '</p>';
       get_search_form();
     }

    ?>
 </div>
</section>

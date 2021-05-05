<?php
/**
 *
 *Template for displaying pages
 *
 *
 *
 */

get_header();
?>


<div class="container mt-3 px-lg-5">
  <div class="row">
    <div class="col-md-12">
      <section class="px-2 px-lg-4">

        <h1 class="font-weight-bold mb-4 text-center"><?php the_title() ?></h1>

        <?php

        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();
            the_content();
          }
        }

        ?>

      </section>
    </div>
  </div>
</div>

<?php
get_footer();
?>

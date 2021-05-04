<?php
/**
 *
 *Template for displaying 404 pages (not found)
 *
 *
 *
 */

get_header();

?>

<div class="container">
  <section class="mb-4 text-center">

    <img src="https://mdbootstrap.com/img/Others/404_mdb.png" alt="Error 404" class="img-fluid mb-4">

    <h1 class="font-weight-bold my-4 text-center"><?php esc_html_e( 'Page Not Found!', 'mdbootstrap' ); ?></h1>
    <p><?php esc_html_e( 'The page you were looking for could not be found. It might have been removed, renamed, or did not exist in the first place.', 'mdbootstrap' ); ?></p>
    <p><?php esc_html_e( 'Maybe try a search or use following link to navigate back to safe harbor.', 'mdbootstrap' ); ?></p>

    <div class="d-flex align-items-center justify-content-center flex-column flex-sm-row">
      <div class="m-2">
        <?php get_search_form(); ?>
      </div>
      <div class="m-2">
        <a class="btn btn-primary btn-rounded" href="<?php echo esc_url( home_url( '/' ) ); ?>" role="button">Home</a>
      </div>
    </div>

  </section>
</div>';

<?php
get_footer();

?>

<?php
/**
 *The searchform template
 *
 *
 *
 *
 *
 */

$mdbootstrap_unique_id = wp_unique_id( 'search-form-' );

$mdbootstrap_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';

?>

<form role="search" <?php echo $mdbootstrap_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <div class="input-group">
    <div class="form-outline">
      <input type="search" id="<?php echo esc_attr( $mdbootstrap_unique_id ); ?>" class="form-control" value="<?php echo get_search_query(); ?>" name="s" />
	    <label class="form-label" for="<?php echo esc_attr( $mdbootstrap_unique_id ); ?>"><?php _e( 'Search', 'mdbootstrap' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>
    </div>
    <button type="submit" class="btn btn-primary" value="<?php echo esc_attr_x( 'Search', 'submit button', 'mdbootstrap' ); ?>">
      <i class="fas fa-search"></i>
    </button>
  </div>
</form>

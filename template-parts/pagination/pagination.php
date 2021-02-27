<?php
//Custom pagination
function mdb_pagination() {
  if( is_singular() )
       return;

   global $wp_query;

   /** Stop execution if there's only 1 page */
   if( $wp_query->max_num_pages <= 1 )
       return;

   $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
   $max   = intval( $wp_query->max_num_pages );

   /** Add current page to the array */
   if ( $paged >= 1 )
       $links[] = $paged;

   /** Add the pages around the current page to the array */
   if ( $paged >= 3 ) {
       $links[] = $paged - 1;
       $links[] = $paged - 2;
   }

   if ( ( $paged + 2 ) <= $max ) {
       $links[] = $paged + 2;
       $links[] = $paged + 1;
   }

   echo '<nav class="mt-3" aria-label="Page navigation">';

   echo '<ul class="pagination justify-content-center">' . "\n";

   /** Previous Post Link */
   if ( get_previous_posts_link() )
       printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link() );

   /** Link to first page, plus ellipses if necessary */
   if ( ! in_array( 1, $links ) ) {
       $class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';

       printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

       if ( ! in_array( 2, $links ) )
           echo '<li class="page-item">…</li>';
   }

   /** Link to current page, plus 2 pages in either direction if necessary */
   sort( $links );
   foreach ( (array) $links as $link ) {
       $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
       printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
   }

   /** Link to last page, plus ellipses if necessary */
   if ( ! in_array( $max, $links ) ) {
       if ( ! in_array( $max - 1, $links ) )
           echo '<li class="page-item">…</li>' . "\n";

       $class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
       printf( '<li%s><a class="page-link" href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
   }

   /** Next Post Link */
   if ( get_next_posts_link() )
       printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link() );

   echo '</ul>' . "\n";

   echo '</nav>';
}
?>

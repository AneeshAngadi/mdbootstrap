<?php get_header();

if ( have_posts() ) {
  while ( have_posts() ) {
  the_post();
?>

  <div class="container mt-5">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-md-8 mb-4">
        <!--Section: Post data-mdb-->
        <section class="border-bottom mb-4">

          <h1 class="font-weight-bold mb-4"><?php the_title() ?></h1>

          <!-- Breadcrumbs -->
          <?php
          $categories = get_the_category();
          $first_category_name = $categories[0]->cat_name;
          $first_category_id = get_cat_ID( $category[0]->cat_name );
          $first_category_link = get_category_link( $category_id );
          ?>
          <ol class="breadcrumb white z-depth-1">
              <li class="breadcrumb-item">
                  <a href="<?php echo get_home_url(); ?>">Home Page</a>
              </li>
              <?php
              if (count($categories)){
              ?>
              <li class="breadcrumb-item">
                  <a href="<?php echo $first_category_link ?>"><?php echo $first_category_name ?></a>
              </li>
              <?php
              }
              ?>
              <li class="breadcrumb-item active"><?php the_title() ?></li>
          </ol>
          <!-- Breadcrumbs -->

          <?php the_post_thumbnail( 'large', array( 'class'=> 'img-fluid shadow-2-strong rounded mb-4')); ?>

          <div class="row align-items-center mb-4">
            <div class="col-lg-8 text-center text-lg-start mb-3 m-lg-0">
              <?php echo get_avatar( get_the_author_meta( 'ID' ) , 32, $default, $alt, array( 'class' => array( 'shadow-1-strong', 'rounded' ) ) ); ?>
              <span> Published <?php echo get_the_date(); ?> by</span>
              <a class="text-dark" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
            </div>

            <div class="col-lg-4 text-center text-lg-end">
              <!-- Facebook -->
              <a class="btn btn-primary" style="background-color: #3b5998" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink());?>" role="button" target="blank" rel="noopener noreferrer"
                ><i class="fab fa-facebook-f"></i
              ></a>
              <!-- Twitter -->
              <a class="btn btn-primary" style="background-color: #55acee" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink());?>" role="button" target="blank" rel="noopener noreferrer"
                ><i class="fab fa-twitter"></i
              ></a>
              <!-- Linkedin -->
              <a class="btn btn-primary" style="background-color: #0082ca" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink());?>" role="button" target="blank" rel="noopener noreferrer"
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
        </section>
        <!--Section: Post data-mdb-->

        <!--Section: Text-->
        <section>
           <?php the_content(); ?>
        </section>
        <!--Section: Text-->

        <!--Section: Share buttons-->
        <section class="text-center border-top border-bottom py-4 mb-4">
          <p><strong>Spread the word:</strong></p>
          <!-- Facebook -->
          <a class="btn btn-primary my-2" style="background-color: #3b5998" href="https://www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink());?>" role="button" target="blank" rel="noopener noreferrer"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <!-- Twitter -->
          <a class="btn btn-primary my-2" style="background-color: #55acee" href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink());?>" role="button" target="blank" rel="noopener noreferrer"
            ><i class="fab fa-twitter"></i
          ></a>
          <!-- Linkedin -->
          <a class="btn btn-primary my-2" style="background-color: #0082ca" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(get_permalink());?>" role="button" target="blank" rel="noopener noreferrer"
            ><i class="fab fa-linkedin-in"></i
          ></a>
          <button type="button" class="btn btn-primary me-1 my-2">
            <i class="fas fa-comments me-2"></i>Add comment
          </button>
        </section>
        <!--Section: Share buttons-->

        <!--Section: Author-->
        <section class="border-bottom mb-4 pb-4">
          <div class="text-center font-weight-bold">About the author</div>
          <div class="row mt-3 mt-md-4 px-1 g-1 g-xl-0">
            <div class="col-md-4 col-lg-3 text-center mb-3 mb-md-0">
                <?php echo get_avatar( get_the_author_meta( 'ID' ) , 128, $default, $alt, array( 'class' => array( 'rounded', 'shadow-1-strong') )); ?>
            </div>

            <div class="col-md-8 col-lg-9">
              <p class="mb-2 text-center text-md-start"><strong><?php the_author(); ?></strong></p>
              <p><?php the_author_meta('description'); ?></p>
            </div>
          </div>
        </section>
        <!--Section: Author-->

        <!--Comments and reply-->
        <?php comments_template(); ?>
        <!--/.Comments and reply-->

      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-4 mb-4">
        <!--Section: Sidebar-->
        <section class="sticky-top" style="top: 80px;">
          <section>
            <?php if (is_active_sidebar('sidebar')){
              dynamic_sidebar( 'sidebar' );
            }
            ?>
          </section>

        </section>
        <!--Section: Sidebar-->
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>

<?php
  } // end while
} // end if

get_footer();

?>

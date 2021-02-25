<div class="col">
  <div class="card h-100">
    <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
    <div class="card-body">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <p class="card-text"><?php the_excerpt(); ?></p>
      <a href="<?php echo get_permalink() ?>" class="btn btn-info btn-md">Read more</a>
    </div>
  </div>
</div>

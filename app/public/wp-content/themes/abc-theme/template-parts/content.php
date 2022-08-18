<?php
$feature_img_url = get_the_post_thumbnail_url();

?>

<div class="container">
  
  <div class="row">
    <div class="col-12">
      <?php the_title( '<h1>', '</h1>' ); ?>
    </div>
  </div>
  <img class="img-fluid rounded-3 mb-3" src="<?php echo $feature_img_url; ?>" alt="Title">
  <div class="row">
    <div class="col-12">
      <?php the_content(); ?>
    </div>
  </div>

</div><!-- .post -->

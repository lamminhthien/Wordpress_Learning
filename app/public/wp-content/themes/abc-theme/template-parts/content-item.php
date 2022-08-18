<?php

$feature_img_url = get_the_post_thumbnail_url();
// if(!$feature_img_url){
//   $feature_img_url = get_image_url($feature_img_default);
// }
$custom_field = get_post_meta( $post->ID, 'intro_text', true );
?>

<div class="row">
  <div class="col-3">
    <a href="<?php echo  esc_url( get_permalink() ); ?>"><img class="img-fluid rounded-3 mb-3" src="<?php echo $feature_img_url; ?>" alt="Title"></a>
  </div>
  <div class="col-9">
    <h3><?php the_title( '<h3>', '</h3>' ); ?></h3>
    <p>
      <?php echo $custom_field; ?>
    </p>
    <a class="btn btn-primary" href="<?php echo  esc_url( get_permalink() ); ?>">View Post</a>
  </div>
</div>

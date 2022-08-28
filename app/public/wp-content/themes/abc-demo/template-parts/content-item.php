<?php

$feature_img_url = get_the_post_thumbnail_url();
// if(!$feature_img_url){
//   $feature_img_url = get_image_url($feature_img_default);
// }
$custom_field = get_post_meta($post->ID, 'intro_text', true);
?>

<div class="category-detail">
  <div class="image">
    <a href="<?php echo  esc_url(get_permalink()); ?>"><img src="<?php echo $feature_img_url; ?>" alt="Title"></a>
  </div>
  <div class="title">
    <h3><?php the_title('<h3>', '</h3>'); ?></h3>
    <div class="custom-field-section">
      <?php echo $custom_field; ?>
    </div>
    <div class="view-post">
      <a class="" href="<?php echo  esc_url(get_permalink()); ?>">VIEW POST</a>
    </div>
  </div>
</div>

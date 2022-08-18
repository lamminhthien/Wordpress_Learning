<?php

$feature_img_url = get_the_post_thumbnail_url();
$feature_img_default = "https://placehold.jp/400x400.png";
$custom_field = get_post_meta($post->ID, 'intro_text', true);
?>

<div class="post-item">
  <div class="image">
    <a href="<?php echo  esc_url(get_permalink()); ?>"><img src="
    <?php if (has_post_thumbnail()) echo $feature_img_url; else echo $feature_img_default ?>" alt="Title"
    ></a>

  </div>
  <div class="title">
    <?php the_title('<h3>', '</h3>'); ?>
    <div class="custom-field-section">
      <?php echo $custom_field; ?>
    </div>
    <div class="view-post">
      <a href="<?php echo  esc_url(get_permalink()); ?>">VIEW POST</a>
    </div>
  </div>
</div>

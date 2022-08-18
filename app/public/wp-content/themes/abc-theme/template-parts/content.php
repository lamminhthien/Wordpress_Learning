<?php
$feature_img_url = get_the_post_thumbnail_url();

?>

<div class="post-section">
  <div class="container">
    <div class="title">
      <?php the_title('<h1>', '</h1>'); ?>
    </div>
    <div class="image">
      <img src="<?php echo $feature_img_url; ?>" alt="Title">
    </div>
    <div class="content">
      <?php the_content(); ?>
    </div>
  </div>
</div>

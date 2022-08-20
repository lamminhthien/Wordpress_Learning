<?php

/**
 * Template Name: Home Template
 * Template Post Type: post, page
 *
 * @package ABC_WP
 * @subpackage ABC_Theme
 * @since ABC Theme 1.0
 */

get_header();
$feauture_img_url = get_the_post_thumbnail_url();
?>
<div class="container">
  <div class="post-detail">
    <?php if ($feauture_img_url)
      echo "<img src='${feauture_img_url}' alt='title'";
    ?>
    <div class="title"><?php the_title(); ?></div>
    <?php the_content(); ?>
    <?php get_footer(); ?>
  </div>

</div>

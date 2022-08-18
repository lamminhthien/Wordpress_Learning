<?php

/**
 * Template Name: About Template
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
<img src="<?php echo $feauture_img_url; ?>" alt="<?php the_title(); ?>">
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
</div>


<?php get_footer(); ?>

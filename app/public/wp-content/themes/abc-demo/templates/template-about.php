<?php

/**
 * Template Name: About Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage ABC_Theme
 * @since ABC Theme 1.0
 */

get_header();

$feture_img_url = get_the_post_thumbnail_url();

?>
<div class="container">

  <h1><?php the_title(); ?></h1>

  <img src="<?php echo $feture_img_url; ?>" alt="<?php the_title(); ?>" />

  <?php the_content(); ?>

</div>

<?php get_footer(); ?>

<?php

/**
 * Template Name: What We Do Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage ABC_Theme
 * @since ABC Theme 1.0
 */

get_header();

$feture_img_url = get_the_post_thumbnail_url();
$intro_text = get_post_meta($post->ID, 'intro_text', true);

?>
<div class="conetainer">

  <h1><?php the_title(); ?></h1>

  <img src="<?php echo $feture_img_url; ?>" alt="<?php the_title(); ?>" />
  <div class="lead fw-normal">
    <?php echo $intro_text; ?>
  </div>

  <?php the_content(); ?>

</div>

<?php get_footer(); ?>

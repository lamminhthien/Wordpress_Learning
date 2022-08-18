<?php

/**
 * Template Name: What we do Template
 * Template Post Type: post, page
 *
 * @package ABC_WP
 * @subpackage ABC_Theme
 * @since ABC Theme 1.0
 */

get_header();
$feauture_img_url = get_the_post_thumbnail_url();
$intro_text = get_post_meta( $post->ID, 'intro_text', true );
$intro_text_2 = get_post_meta( $post->ID, 'intro_text_2', true );
?>
<div class="container">
  <img src="<?php echo $feauture_img_url; ?>" alt="<?php the_title(); ?>">
  <h1><?php the_title(); ?></h1>
  <?php the_content(); ?>
  <div class="lead fw-normal">
    <?php echo $intro_text;  ?>
  </div>
  <div class="lead fw-normal">
    <?php echo $intro_text_2;  ?>
  </div>
</div>

<?php get_footer(); ?>

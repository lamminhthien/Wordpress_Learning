<?php
function cde_theme_enqueue_style() {
  wp_enqueue_style( 'header-css', get_template_directory_uri() .'/assets/styles/header.css', false );
  wp_enqueue_style( 'footer-css', get_template_directory_uri() .'/assets/styles/footer.css', false );
  wp_enqueue_style( 'pagination-css', get_template_directory_uri() .'/assets/styles/pagination.css', false );
  wp_enqueue_style( 'category-css', get_template_directory_uri() .'/assets/styles/category.css', false );
  wp_enqueue_style( 'post-detail-css', get_template_directory_uri() .'/assets/styles/post-detail.css', false );
  wp_enqueue_style( 'content-css', get_template_directory_uri() .'/assets/styles/content.css', false );

  // wp_enqueue_style( 'common-css', get_template_directory_uri() .'/assets/styles/common.css', false );
  // wp_enqueue_style  ( 'blog-list-css', get_template_directory_uri() .'/assets/styles/blog-list.css', false );
}

// function cde_theme_enqueue_script() {
//   wp_enqueue_script( 'main-js', get_template_directory_uri() .'/assets/scripts/common.js', false );
// }

/* Adding the function `cde_theme_enqueue_style` to the `wp_enqueue_scripts` action. */
add_action( 'wp_enqueue_scripts', 'cde_theme_enqueue_style' );
// add_action( 'wp_enqueue_scripts', 'cde_theme_enqueue_script' );

?>

<?php

function themeslug_enqueue_style() {
  wp_enqueue_style( 'tailwind-css', get_template_directory_uri() . '/assets/styles/tailwind.css', false );
  wp_enqueue_style( 'vendor-css', get_template_directory_uri() . '/assets/styles/vendor.css', false );
  wp_enqueue_style( 'common-css', get_template_directory_uri() . '/assets/styles/common.css', false );
  wp_enqueue_style( 'contact-css', get_template_directory_uri() . '/assets/styles/contact.css', false );
  wp_enqueue_style( 'detail-css', get_template_directory_uri() . '/assets/styles/detail.css', false );
  wp_enqueue_style( 'index-css', get_template_directory_uri() . '/assets/styles/index.css', false );
  wp_enqueue_style( 'navbar-css', get_template_directory_uri() . '/assets/styles/navbar.css', false );

  // wp_enqueue_style( 'post-detail-css', get_template_directory_uri() . '/assets/styles/post-detail.css', false );
  // wp_enqueue_style( 'category-css', get_template_directory_uri() . '/assets/styles/category.css', false );
  // wp_enqueue_style( 'navbar-css', get_template_directory_uri() . '/assets/styles/navbar.css', false );
  wp_enqueue_style( 'footer-css', get_template_directory_uri() . '/assets/styles/footer.css', false );
  // wp_enqueue_style( 'pagination-css', get_template_directory_uri() . '/assets/styles/pagination.css', false );
  // wp_enqueue_style( 'change-css', get_template_directory_uri() . '/assets/styles/change.css', false );

}

function themeslug_enqueue_script() {
  wp_enqueue_script( 'tailwind', get_template_directory_uri() . '/assets/scripts/tailwind.js', false );
  wp_enqueue_script( 'vendor', get_template_directory_uri() . '/assets/scripts/vendor.js', false );
  wp_enqueue_script( 'runtime~index', get_template_directory_uri() . '/assets/scripts/runtime~index.js', false );
  wp_enqueue_script( 'runtime~detail', get_template_directory_uri() . '/assets/scripts/runtime~detail.js', false );
  wp_enqueue_script( 'runtime~contact', get_template_directory_uri() . '/assets/scripts/runtime~contact.js', false );
  wp_enqueue_script( 'index', get_template_directory_uri() . '/assets/scripts/index.js', false );
  wp_enqueue_script( 'detail', get_template_directory_uri() . '/assets/scripts/detail.js', false );
  wp_enqueue_script( 'contact', get_template_directory_uri() . '/assets/scripts/contact.js', false );
  wp_enqueue_script( 'common', get_template_directory_uri() . '/assets/scripts/common.js', false );

}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_script' );

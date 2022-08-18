<?php
/**
 * CD Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ABC_WP
 * @subpackage CDE_Theme
 * @since CD Theme 1.0
 */
require get_template_directory() . '/includes/custom-assets.php';
require get_template_directory() . '/includes/custom-fields.php';
require get_template_directory() . '/includes/menu-register.php';
add_filter("use_block_editor_for_post", "__return_false");
add_theme_support('post-thumbnails');

// Pagination.
function abc_taxonomy_pagination( $query ) {

    $post_per_page = get_option('posts_per_page');
  
    if ( $query->is_main_query() ) {
  
      $query->set( 'posts_per_page', $post_per_page );
    }
  }
  add_action( 'pre_get_posts', 'abc_taxonomy_pagination' );


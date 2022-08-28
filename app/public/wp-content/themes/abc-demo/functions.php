<?php
/**
 * ABC Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage ABC_Theme
 * @since ABC Theme 1.0
 */

require get_template_directory() . "/includes/constant.php";
require get_template_directory() . "/includes/custom-assets.php";
// require get_template_directory() . "/includes/custom-fileds.php";
require get_template_directory() . "/includes/menu-register.php";
add_filter("use_block_editor_for_post", "__return_false");
add_theme_support( 'post-thumbnails' );

// Pagination.
function abc_taxonomy_pagination( $query ) {

  // $post_per_page = 5; // con số này sửa theo category 
  $post_per_page = get_option('posts_per_page'); // thay vif cais treen thif suw dung dong duoi nay

  if ( $query->is_main_query() ) {

    $query->set( 'posts_per_page', POST_PER_PAGE );
  }
}
add_action( 'pre_get_posts', 'abc_taxonomy_pagination' );

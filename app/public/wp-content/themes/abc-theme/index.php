<?php
/**
 * The main template file
 *
 * This is the most generic template file in a ABC_WP theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABC_WP
 * @subpackage CDE_Theme
 * @since CD Theme 1.0
 */

/* Calling the header.php file. */
get_header();
echo 'thien\n';
echo get_template_directory_uri().'assets/images/river.jpg';

// echo 'thien'; 
?>
<?php
// get_footer();

?>

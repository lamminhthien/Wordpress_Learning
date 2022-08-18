<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage ABC_Theme
 * @since ABC Theme 1.0
 */
?>
<?php wp_nav_menu(array('theme_location' => 'footer_menu', 'container_class' => 'footer_menu_class')) ?>;
<?php echo get_template_directory_uri(); ?>
</body>
</html>

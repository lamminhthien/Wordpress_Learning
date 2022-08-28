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

<div class="footer_menu_class">
	<?php wp_nav_menu(array('theme_location' => 'footer_menu', 'container_class' => 'footer_menu_class')); ?>
</div>

<?php wp_footer(); ?>

</body>

</html>
<?php get_header(); ?>

<?php
if (have_posts()) : the_post();

  // Include the page content template.
  $_content = get_the_content();
  if (!empty($_content))
    get_template_part('template-parts/page/module-page');
  if (have_rows('flexible_content')) :
    while (have_rows('flexible_content')) : the_row();
      // var_dump(get_row_layout());die;
      // echo 'template-parts/page/module-' . get_row_layout();
      // die;
      get_template_part('template-parts/page/module-' . get_row_layout());
    endwhile; ?>
      <?php
    endif;
  endif; ?>
<?php get_footer();

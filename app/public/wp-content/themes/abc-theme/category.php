<?php

get_header();
// get the current taxonomy term
$term = get_queried_object();

$args = [
  'post_type' => 'post',
  'cat' => $term->term_id,
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
  'order' => 'DESC',
  'posts_per_page' => POST_PER_PAGE

];

$q = new WP_Query($args);
?>
<div class="container">
  <div class="category-section">

    <?php
    $count = 0;
    while ($q->have_posts()) : $q->the_post();
      get_template_part('template-parts/content-item', get_post_format());
    endwhile;
    ?>
  </div>
  <?php get_template_part('/template-parts/pagination'); ?>
  <?php
  get_footer(); ?>
</div>

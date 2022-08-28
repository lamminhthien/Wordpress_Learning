<?php

function fn_theme_setup() {

  add_theme_support('menus');

  register_nav_menus( array(
    'header_menu' => __( 'Primary Header Navigation' ),
    'footer_menu' => __( 'Footer Menu'),

  ) );

}

add_action('init', 'fn_theme_setup');

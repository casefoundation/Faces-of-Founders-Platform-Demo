<?php
add_action( 'wp_enqueue_scripts', 'sample_child_theme_enqueue_styles' );

function sample_child_theme_enqueue_styles() {
  wp_enqueue_style( 'child-style',
    get_stylesheet_directory_uri() . '/style.css',
    array(),
    wp_get_theme()->get('Version')
  );
}

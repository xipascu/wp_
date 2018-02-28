<?php

function ilistrator_script_enqueue() {
  wp_enqueue_style('customstyle', get_template_directory_uri() . '/css/ilistrator.css', array(), '1.0.0', 'all');
  wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/ilistrator.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'ilistrator_script_enqueue');

function ilistrator_theme_setup() {
  add_theme_support('menus');

  register_nav_menu('primary', 'Primary Header Navigation');
}

add_action('init', 'ilistrator_theme_setup');
// or after_setup_theme
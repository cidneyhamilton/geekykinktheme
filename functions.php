<?php

add_action( 'wp_enqueue_scripts', 'gke_scripts' );

function gke_scripts() {
    // custom CSS
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // custom JS
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'));

}

add_action( 'after_setup_theme', 'gke_setup' );

function gke_setup() {

  $defaults = array(
      'header-text' => false,
      'width' => 1152,
      'height' => 301,
      'default-image' => get_stylesheet_directory_uri() . '/images/newengland-banner.png'
  );

  add_theme_support( 'custom-header', $defaults);
}


require_once('includes/custom-taxonomies.php');
require_once('includes/workshop-post-type.php');

?>
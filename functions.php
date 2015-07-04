<?php

add_action( 'wp_enqueue_scripts', 'gke_scripts' );

function jme_post_type_dropdown($post_type, $selected, $all_option) {
  if ($selected == null) {
    $selected = 0;
  }

  if ($all_option == null) {
    $all_option = "All";
  }
  
  $select = "<select name='".$post_type."-dropdown' id='".$post_type."-dropdown' class='postform'>";
  $select .= "<option value=0>".$all_option."</option>";

  $args = array( 
    'posts_per_page' => 100, 
    'post_type' => $post_type,
    'orderby'=> 'title', 
    'order' => 'ASC'
  );

  $posts = get_posts( $args );

  foreach( $posts as $post ) {
    $select .= "<option ";
    if ($post->ID == $selected) {
      $select .= "selected ";
    }
    $select .= "value='" . get_the_permalink($post->ID) . "'>" . $post->post_title . "</option>";
  }

  $select.= "</select>";

  return $select;
}

function gke_scripts() {
    // custom CSS
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // custom JS
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'));

    wp_enqueue_script( 'attractions', get_stylesheet_directory_uri() . '/js/attractions.js', array('jquery'));

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
require_once('includes/vendor-post-type.php');
require_once('includes/event-post-type.php');

?>
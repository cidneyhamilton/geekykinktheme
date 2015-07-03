<?php

add_action( 'init', 'create_workshop_post_type' );

// Create an Event type
function create_workshop_post_type() {
  register_post_type( 'workshops',
    array(
      'labels' => array(
        'name' => __( 'Workshops' ),
        'singular_name' => __( 'Workshop' ),
        'add_new_item' => __( 'Add New Workshop' )
      ),
      'public' => true,
      'taxonomies' => array('category', 'post_tag', 'presenter'),
      'description' => 'A workshop, with a presenter',
      'supports' => array('title','editor','thumbnail','custom-fields'),
      'has_archive' => true,
    )
  );
}

function jme_presenter_dropdown() {
  $select = "<select name='presenter-dropdown' id='presenter-dropdown' class='postform'>";
  $select .= "<option value='#'>All Presenters</option>";

  $args = array( 
    'orderby' => 'slug',
    'show_option_all' => 'All Presenters',
    'taxonomy' => 'presenter',
    'echo' => 0,
    'id' => 'presenter-dropdown',
    'value_field' => 'slug'
  );

  $select = wp_dropdown_categories( $args );

  return $select;
}

function jme_workshop_dropdown() {
  $select = "<select name='workshop-dropdown' id='workshop-dropdown' class='postform'>";
  $select .= "<option value='#'>All Workshops</option>";

  $args = array( 
    'posts_per_page' => 100, 
    'post_type' => 'workshops',
    'orderby'=> 'title', 
    'order' => 'ASC'
  );

  $posts = get_posts( $args );

  foreach( $posts as $post ) {
    $select .= "<option value='" . get_the_permalink($post->ID) . "'>" . $post->post_title . "</option>";
  }

  $select.= "</select>";

  return $select;
}

?>
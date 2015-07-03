<?php

// Custom taxonomies -- Presenter for workshops and Location for vendors/etc

add_action( 'init', 'create_presenter_taxonomy' );
function create_presenter_taxonomy() {
  register_taxonomy(
    'presenter',
    'workshop',
    array(
      'label' => 'Presenter',
      'hierarchical' => true,
    )
  );
}

add_action( 'init', 'create_location_taxonomy' );
function create_location_taxonomy() {
  register_taxonomy(
    'location',
    array('workshop','event','attraction'),
    array(
      'label' => 'Venue Location',
      'hierarchical' => true,
    )
  );
}

?>
<?php

function MultipurposeUniTheme_post_types() {
  //Campus Post-Type
  register_post_type('campus', array(
    'supports' => array('title', 'editor', 'excerpt', 'discussion', 'comments', 'slug', 'author', 'categories', 'tags'),
    'rewrite' => array('slug' => 'campuses'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Campuses',
      'add_new_item' => 'Add New Campus',
      'edit_item' => 'Edit Campus',
      'all_items' => 'All Campuses',
      'singular_name' => 'Campus',
      'plural_name' => 'Campuses'
    ),
    'menu_icon' => 'dashicons-location-alt'
  ));

//Event Post-Type
register_post_type('event', array(
  'supports' => array('title', 'editor', 'excerpt', 'discussion', 'comments', 'slug', 'author', 'categories', 'tags'),
  'rewrite' => array('slug' => 'events'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Events',
    'add_new_item' => 'Add New Event',
    'edit_item' => 'Edit Event',
    'all_items' => 'All Events',
    'singular_name' => 'Event',
    'plural_name' => 'Events'
  ),
  'menu_icon' => 'dashicons-calendar-alt'
));

//Program Post-Type
register_post_type('program', array(
  'supports' => array('title', 'editor', 'excerpt', 'discussion', 'comments', 'slug', 'author', 'categories', 'tags'),
  'rewrite' => array('slug' => 'programs'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Programs',
    'add_new_item' => 'Add New Program',
    'edit_item' => 'Edit Program',
    'all_items' => 'All Programs',
    'singular_name' => 'Program',
    'plural_name' => 'Programs'
  ),
  'menu_icon' => 'dashicons-awards'
));


//Staff Post-Type
register_post_type('staff', array(
  'supports' => array('title', 'editor', 'excerpt', 'discussion', 'comments', 'slug', 'author', 'categories', 'tags', 'thumbnail'),
  'rewrite' => array('slug' => 'staffs'),
  'has_archive' => true,
  'public' => true,
  'labels' => array(
    'name' => 'Staffs',
    'add_new_item' => 'Add New Staff',
    'edit_item' => 'Edit Staff',
    'all_items' => 'All Staffs',
    'singular_name' => 'Staff',
    'plural_name' => 'Staffs'
  ),
  'menu_icon' => 'dashicons-welcome-learn-more'
));


}
add_action('init', 'MultipurposeUniTheme_post_types');

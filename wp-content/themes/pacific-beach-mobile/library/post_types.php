<?php
/**
 * Custom Post Types
 *
 * @package WordPress
 * @subpackage cebo
 * @since Dream Home 1.0
 */
 
///////////////////////////////////////////////////////////////////////////// Custom Post Type

add_action('init', 'project_items');

function project_items()
{
  $labels = array(
    'name' => _x('Rooms', 'post type general name'),
    'singular_name' => _x('Rooms', 'post type singular name'),
    'add_new' => _x('Add New', 'Rooms'),
    'add_new_item' => __('Add New Rooms'),
    'edit_item' => __('Edit Rooms'),
    'new_item' => __('New Rooms'),
    'view_item' => __('View Rooms'),
    'search_items' => __('Search Rooms'),
    'not_found' =>  __('No Rooms found'),
    'not_found_in_trash' => __('No Rooms found in Trash'),
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'rooms' ),
    'capability_type' => 'post',
    'menu_icon' => get_bloginfo('template_url').'/options/images/icon_project.png',
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','custom-fields','editor','author','excerpt','comments','thumbnail')
  );
  register_post_type('rooms',$args);
}


add_action( 'init', 'create_post_types' );
function create_post_types() {
  register_post_type( 'specials',
    array(
      'labels' => array(
        'name' => __( 'Specials' ),
        'singular_name' => __( 'Specials' )
      ),
      'public' => true,
      'rewrite' => array('slug' => 'specials'),
      'menu_icon' => get_bloginfo('template_url').'/options/images/icon_team.png',
      'supports' => array('title','custom-fields','editor','category','author','thumbnail')
    )
  );
}



// add_action( 'init', 'creates_post_types' );
// function creates_post_types() {
//   register_post_type( 'galleries',
//     array(
//       'labels' => array(
//         'name' => __( 'Galleries' ),
//         'singular_name' => __( 'Galleries' )
//       ),
//       'public' => true,
//       'rewrite' => array('slug' => 'gallery'),
//       'menu_icon' => get_bloginfo('template_url').'/options/images/icon_team.png',
//       'supports' => array('title','custom-fields','editor','category','author','thumbnail')
//     )
//   );
// }

create_gallery_taxonomies();
function create_gallery_taxonomies()
{
  // Taxonomy for Gallery
  $labels = array(
    'name' => _x( 'Gallery Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Gallery Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Gallery Types' ),
    'all_items' => __( 'All Gallery Types' ),
    'parent_item' => __( 'Parent Gallery Type' ),
    'parent_item_colon' => __( 'Parent Gallery Type:' ),
    'edit_item' => __( 'Edit Gallery Type' ),
    'update_item' => __( 'Update Gallery Type' ),
    'add_new_item' => __( 'Add New Gallery Type' ),
    'new_item_name' => __( 'New Gallery Type Name' ),
  );  

  register_taxonomy('gallerytype', array('galleries'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'gallery-type' ),
  ));

}



add_action( 'init', 'create_weather_post_types' );
function create_weather_post_types() {
  register_post_type( 'weather',
    array(
      'labels' => array(
        'name' => __( 'Weather Alert' ),
        'singular_name' => __( 'Weather Alert' )
      ),
      'public' => true,
      'rewrite' => array('slug' =>  'weather-alert'),
      'menu_icon' => 'dashicons-cloud',
      'supports' => array('title','author','revision', 'editor')
    )
  );
}

?>
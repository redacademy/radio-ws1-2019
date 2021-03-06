<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

/**
 * Register artist post type
 */
function artist_post_type() {
  $labels = array(
    'name'                  => 'Artists',
    'singular_name'         => 'Artist',
    'menu_name'             => 'Artists',
    'name_admin_bar'        => 'Artist',
    'archives'              => 'Artist Archive',
    'attributes'            => 'Artist Attributes',
    'parent_item_colon'     => 'Parent Artist:',
    'all_items'             => 'All Artists',
    'add_new_item'          => 'Add New Artist',
    'add_new'               => 'Add New',
    'new_item'              => 'New Artist',
    'edit_item'             => 'Edit Artist',
    'update_item'           => 'Update Artist',
    'view_item'             => 'View Artist',
    'view_items'            => 'View Artists',
    'search_items'          => 'Search Artist',
    'not_found'             => 'Not found',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Featured Image',
    'set_featured_image'    => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into artist',
    'uploaded_to_this_item' => 'Uploaded to this artist',
    'items_list'            => 'Artists list',
    'items_list_navigation' => 'Artists list navigation',
    'filter_items_list'     => 'Filter artists list',
  );
  $args = array(
    'label'                 => 'Artist',
    'description'           => 'Artist profile',
    'labels'                => $labels,
    'supports'              => array( 'title', 'thumbnail' ),
    'taxonomies'            => array( 'genre' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_rest'          => true,
  );
  register_post_type( 'artist', $args );
}

add_action( 'init', 'artist_post_type', 0 );

/**
 * Register track post type
 */
function track_post_type() {
  $labels = array(
    'name'                  => 'Tracks',
    'singular_name'         => 'Track',
    'menu_name'             => 'Tracks',
    'name_admin_bar'        => 'Track',
    'archives'              => 'Track Archives',
    'attributes'            => 'Track Attributes',
    'parent_item_colon'     => 'Parent Track:',
    'all_items'             => 'All Tracks',
    'add_new_item'          => 'Add New Track',
    'add_new'               => 'Add New',
    'new_item'              => 'New Track',
    'edit_item'             => 'Edit Track',
    'update_item'           => 'Update Track',
    'view_item'             => 'View Track',
    'view_items'            => 'View Tracks',
    'search_items'          => 'Search Track',
    'not_found'             => 'Not found',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Featured Image',
    'set_featured_image'    => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into track',
    'uploaded_to_this_item' => 'Uploaded to this track',
    'items_list'            => 'Tracks list',
    'items_list_navigation' => 'Tracks list navigation',
    'filter_items_list'     => 'Filter tracks list',
  );
  $args = array(
    'label'                 => 'Track',
    'description'           => 'Audio tracks',
    'labels'                => $labels,
    'supports'              => array( 'title' ),
    'taxonomies'            => array( 'genre' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'post',
    'show_in_rest'          => true,
  );
  register_post_type( 'track', $args );
}

add_action( 'init', 'track_post_type', 0 );

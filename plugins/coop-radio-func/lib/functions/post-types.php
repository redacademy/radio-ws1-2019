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

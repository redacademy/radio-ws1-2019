<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

/**
 * Register genre taxonomy
 */
function genre() {
  $labels = array(
    'name'                       => 'Genres',
    'singular_name'              => 'Genre',
    'menu_name'                  => 'Genre',
    'all_items'                  => 'All Genres',
    'parent_item'                => 'Parent Genre',
    'parent_item_colon'          => 'Parent Genre:',
    'new_item_name'              => 'New Genre Name',
    'add_new_item'               => 'Add New Genre',
    'edit_item'                  => 'Edit Genre',
    'update_item'                => 'Update Genre',
    'view_item'                  => 'View Genre',
    'separate_items_with_commas' => 'Separate genres with commas',
    'add_or_remove_items'        => 'Add or remove genres',
    'choose_from_most_used'      => 'Choose from the most used',
    'popular_items'              => 'Popular Genres',
    'search_items'               => 'Search Genres',
    'not_found'                  => 'Not Found',
    'no_terms'                   => 'No genres',
    'items_list'                 => 'Genres list',
    'items_list_navigation'      => 'Genres list navigation',
  );
  $args = array(
    'labels'                     => $labels,
    'hierarchical'               => false,
    'public'                     => true,
    'show_ui'                    => true,
    'show_admin_column'          => true,
    'show_in_nav_menus'          => true,
    'show_tagcloud'              => true,
    'show_in_rest'               => true,
  );
  register_taxonomy( 'genre', array( 'artist' ), $args );
}

add_action( 'init', 'genre', 0 );


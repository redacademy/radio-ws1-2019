<?php
/**
 * Co-op Radio theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package coop-radio
 */

if ( ! function_exists( 'coop_radio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function coop_radio_setup() {
  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  // Let WordPress manage the document title.
  add_theme_support( 'title-tag' );

  // Enable support for Post Thumbnails on posts and pages.
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => esc_html( 'Primary Menu' ),
  ) );

  // Switch search form, comment form, and comments to output valid HTML5.
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );

}
endif; // coop_radio_setup
add_action( 'after_setup_theme', 'coop_radio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function coop_radio_content_width() {
  $GLOBALS['content_width'] = apply_filters( 'coop_radio_content_width', 640 );
}
add_action( 'after_setup_theme', 'coop_radio_content_width', 0 );

/**
 * Remove default posts from admin area
 */
function remove_default_post_type() {
  remove_menu_page( 'edit.php' );
}

add_action( 'admin_menu', 'remove_default_post_type' );

/**
 * Register widgets.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function coop_radio_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html( 'Audio player' ),
    'id'            => 'audio-player',
    'description'   => __( 'Audio player footer', 'textdomain' ),
    'before_widget' => '<aside id="audio-player" class="audio-player">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="screen-reader-text">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'coop_radio_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function coop_radio_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
  if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
    $stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
  }

  return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'coop_radio_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function coop_radio_scripts() {
  wp_enqueue_script( 'coop-radio-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
  wp_enqueue_script( 'coop-radio-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );
  /* wp_enqueue_script( 'coop-radio-audio-player', get_template_directory_uri() . '/build/js/audio-player.min.js', array(), '20151215', true ); */
  wp_register_script( 'coop-radio-audio-player', get_template_directory_uri() . '/build/js/audio-player.min.js', array(), '20151215', true );
  wp_localize_script(
    'coop-radio-audio-player',
    'WP_GLOBALS',
    array(
      'stylesheetURI' => get_stylesheet_directory_uri()
    )
  );
  wp_enqueue_script('coop-radio-audio-player');

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'coop_radio_scripts' );

function coop_radio_styles() {
  wp_enqueue_style( 'coop-radio-style', get_stylesheet_uri() );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'coop_radio_styles' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

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
    'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
    'taxonomies'            => array( 'category', 'post_tag' ),
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


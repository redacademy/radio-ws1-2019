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
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function coop_radio_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html( 'Sidebar' ),
    'id'            => 'sidebar-1',
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="%2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2>',
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
  wp_enqueue_script( 'coop-radio-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
  wp_enqueue_script( 'coop-radio-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'coop_radio_scripts' );

function coop_radio_styles() {
  wp_enqueue_style( 'coop-radio-starter-style', get_stylesheet_uri() );

  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:700&display=swap', false );

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

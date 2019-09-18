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
  wp_enqueue_script( 'coop-radio-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array('jquery'), '20151215', true );
  wp_enqueue_script( 'coop-radio-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );
  wp_enqueue_script( 'coop-radio-faq', get_template_directory_uri() . '/build/js/faq.min.js', array('jquery'), '20151215', true );
  wp_enqueue_script( 'coop-radio-socials', get_template_directory_uri() . '/build/js/socials.min.js', array('jquery'), '20151215', true );
  wp_enqueue_script( 'jsmediatags', 'https://cdnjs.cloudflare.com/ajax/libs/jsmediatags/3.9.0/jsmediatags.min.js', array(), '20151215', true );
  wp_register_script( 'coop-radio-audio-player', get_template_directory_uri() . '/build/js/audio-player.min.js', array(), '20151215', true );
  wp_localize_script(
    'coop-radio-audio-player',
    'WP_GLOBALS',
    array(
      'apiNonce' => wp_create_nonce('wp_rest'),
      'apiURL' => esc_url_raw(rest_url()).'wp/v2/', 
    )
  );
  wp_enqueue_script('coop-radio-audio-player');
  wp_enqueue_script( 'coop-radio-search-form', get_template_directory_uri() . '/build/js/search-form.min.js', array('jquery'), '20151215', true );

  wp_enqueue_script( 'slick-carousel', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '20151215', true );
  wp_enqueue_script( 'coop-radio-scrolls', get_template_directory_uri() . '/build/js/scrolls.min.js', array(), '20151215', true );
  
  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'coop_radio_scripts' );

function coop_radio_styles() {
  wp_enqueue_style( 'coop-radio-style', get_stylesheet_uri() );
  wp_enqueue_style('coop-radio-slick-cdn', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@latest/slick/slick.css');
  wp_enqueue_style('coop-radio-slick-theme-cdn', 'https://cdn.jsdelivr.net/gh/kenwheeler/slick@latest/slick/slick-theme.css');

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


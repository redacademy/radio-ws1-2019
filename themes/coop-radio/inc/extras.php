<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package coop-radio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function coop_radio_body_classes( $classes ) {
  // Adds a class of group-blog to blogs with more than 1 published author.
  if ( is_multi_author() ) {
    $classes[] = 'group-blog';
  }
  if ( is_page('artist-search')) {
		$classes[] = 'artist-search';
	}

  return $classes;
}
add_filter( 'body_class', 'coop_radio_body_classes' );

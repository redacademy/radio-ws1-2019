<?php
/**
 * Site header.
 *
 * @package coop-radio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="hfeed">
      <a class="skip-link screen-reader-text" href="#content"><?php echo esc_html( 'Skip to content' ); ?></a>

      <header
        class="banner <?php 
        global $template;

          if ( basename( $template ) === 'page-search.php' || is_search() || basename($template) === 'page-donate.php' || is_front_page()) {
            echo 'banner--dark';
          } elseif (basename($template) === 'page-artist-library.php' || basename($template) === 'page-contact-us.php') {
            echo 'banner--light';
          } elseif (basename($template) === 'page-program-details.php' || basename($template) === 'page-get-involved.php' || basename($template) === 'single-artist.php') {
            echo 'banner--transparent';
          }
        
        ?>"
        role="banner"
      >
        <div>
          <h1 class="screen-reader-text">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <?php bloginfo( 'name' ); ?>
            </a>
          </h1>
        </div>
        <div class="banner__container">
          <div class="banner__logo-container">
            <a class="banner__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
              <div class='logo-image'>image</div>
            </a>
          </div>
          <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
            <?php wp_nav_menu( array(
              'theme_location' => 'primary',
              'menu_id' => 'primary-menu'
            ) ); ?>
          </nav>
          <div class="header-search">
            <?php get_search_form(); ?>
          </div>
        </div>
        
      </header>

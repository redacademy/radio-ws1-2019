<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package coop-radio
 */

get_header(); ?>

  <main class='not-found'>
    <div class='front-container'>
      <img src='<?php echo get_stylesheet_directory_uri().'/images/404.PNG'; ?>' alt="404 image">
      <div>
        <p>Oops!</p>
        <p>Page not found</p>
        <p><a href="<?php echo esc_url(home_url('/')); ?>">Back to Home</a></p>
      </div>
    </div>
  </main>

<?php get_footer(); ?>

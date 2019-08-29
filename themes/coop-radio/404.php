<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>
    <section>
      <a href="<?php echo esc_url(home_url('/')); ?>">Back to Home</a>
    </section>
  </main>

<?php get_footer(); ?>

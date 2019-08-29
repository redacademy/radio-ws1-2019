<?php
/**
 * The template for displaying all pages.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content-page-get-involved', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>

  </main>

<?php get_footer(); ?>

<?php
/**
 * The template for displaying single artist.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'single-artist' ); ?>

    <?php endwhile; ?>

  </main>

<?php get_footer(); ?>

<?php
/**
 * Get involved page template.
 * Template Name: get-involved
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page-get-involved' ); ?>

    <?php endwhile; ?>

  </main>

<?php get_footer(); ?>

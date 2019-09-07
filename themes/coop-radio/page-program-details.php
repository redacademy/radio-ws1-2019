<?php
/**
 * Program details page template.
 * Template Name: program-details
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>
    <?php while ( have_posts() ) : the_post(); 
      get_template_part( 'template-parts/content', 'page-program-details' );
    endwhile; ?>
  </main>

<?php get_footer(); ?>

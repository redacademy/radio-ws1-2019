<?php
/**
 * The template for displaying all single posts.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'single' ); ?>

      <?php the_post_navigation(); ?>


    <?php endwhile; // End of the loop. ?>

  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

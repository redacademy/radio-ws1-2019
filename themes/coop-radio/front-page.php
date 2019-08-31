<?php
/**
 * Front page template file.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'front-page' ); ?>

        <?php endwhile; ?>

        <?php the_posts_navigation(); ?>

    <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

  </main>

<?php get_footer(); ?>

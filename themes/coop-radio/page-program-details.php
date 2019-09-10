<?php
/**
 * Program details page template.
 * Template Name: program-details
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>
    <?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php
          get_template_part(
            'template-parts/content',
            'page-program-details__header'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__overview'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__get-started'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__video'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__requirements'
          );

          get_template_part(
            'template-parts/content',
            'page-program-detail__timeline'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__training'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__enroll'
          );
        ?>

      </article>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>

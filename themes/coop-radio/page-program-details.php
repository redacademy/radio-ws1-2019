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

        <?php get_template_part(
            'template-parts/content',
            'page-program-details__header'
          );?>

        <div class="program-container">
        <?php get_template_part(
            'template-parts/content',
            'page-program-details__overview'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__get-started'
          );?></div>

          <div class="program-text-container">
          <?php get_template_part(
            'template-parts/content',
            'page-program-details__video'
          );?></div>

          <div class="program-container">
          <?php get_template_part(
            'template-parts/content',
            'page-program-details__requirements'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__timeline'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__training'
          );

          get_template_part(
            'template-parts/content',
            'page-program-details__enroll'
          );
        ?> </div>

      </article>
    <?php endwhile; ?>
  </main>

<?php get_footer(); ?>

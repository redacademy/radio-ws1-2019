<?php

/**
 * Program details page template.
 * Template Name: program-details
 *
 * @package coop-radio
 */

get_header(); ?>

<main>
  <?php while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php get_template_part(
          'template-parts/content',
          'page-program-details__header'
        ); ?>

      <div class="page-container">
        <?php get_template_part(
            'template-parts/content',
            'page-program-details__overview'
          ); ?>
      </div>

      <div class="page-container">
        <?php get_template_part(
            'template-parts/content',
            'page-program-details__get-started'
          ); ?>
      </div>

      <div class="full-width">
        <?php get_template_part(
            'template-parts/content',
            'page-program-details__video'
          ); ?>
      </div>

      <div class="page-container">
        <?php get_template_part(
            'template-parts/content',
            'page-program-details__requirements'
          ); ?>
      </div>

      <div class="page-container">
        <?php get_template_part(
            'template-parts/content',
            'page-program-details__timeline'
          ); ?>
      </div>

      <div class="page-container">
        <?php get_template_part(
            'template-parts/content',
            'page-program-details__training'
          ); ?>
      </div>

      <div class="page-container">
        <?php get_template_part(
            'template-parts/content',
            'page-program-details__enroll'
          ); ?>
      </div>

      <?php get_template_part(
          'template-parts/content',
          'page-program-details__terms-conditions'
        ); ?>

    </article>
  <?php endwhile; ?>
</main>

<?php get_footer(); ?>

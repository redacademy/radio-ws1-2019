<?php
/**
 * Front page template file.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main
    class="home-main"
    style="background-image: url('<?= the_post_thumbnail_url( 'large' ); ?>'); "
  >
    <div class="home-container">
      <?php if ( have_posts() ) : ?>

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

              <?php get_template_part( 'template-parts/content', 'front-page' ); ?>

          <?php endwhile; ?>

          <?php the_posts_navigation(); ?>

      <?php else : ?>

          <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>
    </div>
  </main>

<?php get_footer(); ?>

<?php
/**
 * The main template file.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <?php if ( have_posts() ) : ?>

      <?php if ( is_home() && ! is_front_page() ) : ?>
        <header>
          <h1 class="screen-reader-text"><?php single_post_title(); ?></h1>
        </header>
      <?php endif; ?>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content' ); ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

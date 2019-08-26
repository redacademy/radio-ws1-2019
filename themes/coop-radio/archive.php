<?php
/**
 * The template for displaying archive pages.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <?php if ( have_posts() ) : ?>

      <header>
        <?php
          the_archive_title( '<h1>', '</h1>' );
          the_archive_description( '<div>', '</div>' );
        ?>
      </header>

      <?php /* Start the Loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>

        <?php
          get_template_part( 'template-parts/content' );
        ?>

      <?php endwhile; ?>

      <?php the_posts_navigation(); ?>

    <?php else : ?>

      <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

  </main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

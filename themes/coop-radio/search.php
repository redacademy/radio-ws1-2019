<?php
/**
 * The template for displaying search results pages.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>
    <div class='search-container'>
      <?php if ( have_posts() ) : ?>

        <header>
          <h1><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
        </header>

        <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'search-result' ); ?>

          <?php endwhile; ?>

          <?php coop_radio_numbered_pagination(); ?>

      <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

      <?php endif; ?>

    </div>
  </main>

<?php get_footer(); ?>

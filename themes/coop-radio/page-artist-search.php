<?php
/**
 * Artist search template.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <h1>Artists</h1>

    <?php
      $artists = get_posts( array(
        'post_type' => 'artist',
      ) );

      foreach ( $artists as $post ) : setup_postdata( $post );

        get_template_part( 'template-parts/content', 'artist-search' );

      endforeach; wp_reset_postdata();
    ?>

  </main>

<?php get_footer(); ?>

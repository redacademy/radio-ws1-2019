<?php
/**
 * Artist search template.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <div class="artist-search">
    <?php
      $artists = get_posts( array(
        'post_type' => 'artist',
      ) );

      foreach ( $artists as $post ) : setup_postdata( $post );?>

        <div class="artist">
        <?php get_template_part( 'template-parts/content', 'artist-search' );?>
        </div>
        
      <?php endforeach; wp_reset_postdata();?>
      
    </div><!-- artist-search -->

  </main>

<?php get_footer(); ?>

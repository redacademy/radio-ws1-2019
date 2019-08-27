<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

    <?php if ( 'post' === get_post_type() ) : ?>
    <div>
      <?php coop_radio_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php coop_radio_posted_by(); ?>
    </div>
    <?php endif; ?>
  </header>

  <div>
    <?php the_excerpt(); ?>
  </div>
</article>

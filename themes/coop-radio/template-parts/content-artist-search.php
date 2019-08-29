<?php
/**
 * Template part for single artist in artist search.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'large' ); ?>
  <?php endif; ?>

  <h2>
    <a
      href="<?= esc_url( get_post_permalink( get_the_ID() ) ); ?>"
      rel="bookmark"
    >
      <?= the_title(); ?>
    </a>
  </h2>
</article>

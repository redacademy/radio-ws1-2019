<?php
/**
 * Template part for single artist in artist library.
 *
 * @package coop-radio
 */ 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('artist-search-card'); ?>>

  <a href="<?= esc_url( get_post_permalink( get_the_ID() ) ); ?>"
      rel="bookmark">

    <?php if ( has_post_thumbnail() ) : ?>
    <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>

    <h2><?= the_title(); ?></h2>
  
  </a>

  <?php $terms = get_the_terms( get_the_ID(), 'genre'  );

      if ( gettype( $terms ) == 'array' ) : 
        foreach ( $terms as $term  ) : ?>

          <p><?= $term->name; ?></p>

      <?php endforeach; else : ?>

          <p>Misc</p>

        <?php endif; ?>

</article>

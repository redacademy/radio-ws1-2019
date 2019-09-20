<?php
/**
 * Template part for single artist in artist library.
 *
 * @package coop-radio
 */ 
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('artist-card'); ?>>

  <a
    class="artist-card__link"
    href="<?= esc_url( get_post_permalink( get_the_ID() ) ); ?>"
    rel="bookmark"
  >

    <?php if ( has_post_thumbnail() ) :
      the_post_thumbnail( 'large' );
    endif; ?>

    <h2 class="artist-card__title"><?= the_title(); ?></h2>
  
  </a>

  <?php $terms = get_the_terms( get_the_ID(), 'genre'  );

      if ( gettype( $terms ) == 'array' ) : 
        foreach ( $terms as $term  ) : ?>

          <p class="artist-card__genre"><?= $term->name; ?></p>

        <?php endforeach; else : ?>

          <p class="artist-card__genre">Misc</p>

      <?php endif; ?>

</article>

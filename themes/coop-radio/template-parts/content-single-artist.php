<?php
/**
 * Template part for displaying single artist.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>

    <h2><?= the_title(); ?></h2>
  </header>

  <div>
    <?php the_content(); ?>
  </div>

  <footer>
    <?php coop_radio_entry_footer(); ?>
  </footer>
</article>

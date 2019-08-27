<?php
/**
 * Template part for displaying single posts.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>

    <?php the_title( '<h1>', '</h1>' ); ?>

    <div>
      <?php coop_radio_posted_on(); ?> / <?php coop_radio_comment_count(); ?> / <?php coop_radio_posted_by(); ?>
    </div>
  </header>

  <div>
    <?php the_content(); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div>' . esc_html( 'Pages:' ),
        'after'  => '</div>',
      ) );
    ?>
  </div>

  <footer>
    <?php coop_radio_entry_footer(); ?>
  </footer>
</article>

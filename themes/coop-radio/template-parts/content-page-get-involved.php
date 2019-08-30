<?php
/**
 * Template part for get involved page content.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header>
    <h1>
      <?= the_title(); ?>
    </h1>

    <p>
      <?php the_content(); ?>
    </p>
  </header>

  <section>
    <h2><?= CFS()->get( 'actions_title' ); ?></h2>
    <p><?= CFS()->get( 'actions_text' ); ?></p>
  </section>

  <?php
    $fields = CFS()->get( 'faq' );
    if ( sizeof( $fields ) > 0 ) : ?>

    <h2>F.A.Q.</h2>

    <?php foreach ( $fields as $field ) { ?>

      <p><?= $field['question']; ?></p>
      <p><?= $field['answer']; ?></p>

  <?php } endif; ?>

</article>

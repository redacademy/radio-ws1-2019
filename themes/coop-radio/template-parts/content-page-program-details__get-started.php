<?php
/**
 * Template part for program details page how-to section.
 *
 * @package coop-radio
 */

?>

<?php
  $sections = CFS()->get( 'how_to_sections' );
  if ( isset( $sections ) && sizeof( $sections ) > 0 ) : ?>

    <section>
      <h2>
        <?= CFS()->get( 'how_to_title' ); ?>
      </h2>

      <?php foreach ( $sections as $section ) { ?>
        <img src="<?= $section['icon']; ?>" alt="" />
        <h3><?= $section['title']; ?></h3>
        <p><?= $section['description']; ?></p>
      <?php } ?>
    </section>

<?php endif; ?>

<section>
  <h2><?= CFS()->get( 'sign_up_title' ); ?></h2>
</section>

<?php
/**
 * Template part for program details page overview section.
 *
 * @package coop-radio
 */

?>

<?php
  $sections = CFS()->get( 'info_sections' );
  if ( isset( $sections ) && sizeof( $sections ) > 0 ) : ?>

    <section>
      <h2><?= CFS()->get( 'info_title' ); ?></h2>

      <?php foreach ( $sections as $section ) { ?>
        <img src="<?= $section['icon']; ?>" alt="" />
        <h3><?= $section['title']; ?></h3>
        <p><?= $section['description']; ?></p>
      <?php } ?>
    </section>

<?php endif; ?>

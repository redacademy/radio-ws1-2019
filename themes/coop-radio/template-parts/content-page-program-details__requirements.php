<?php
/**
 * Template part for program details page requirements section.
 *
 * @package coop-radio
 */

?>

<?php
  $requirements = CFS()->get( 'requirements' );
  if ( isset( $requirements ) && sizeof( $requirements ) > 0 ) : ?>

    <section>
      <h2><?= CFS()->get( 'requirements_title' ); ?></h2>
      <p><?= CFS()->get( 'requirements_description' ); ?></p>

      <?php foreach ( $requirements as $requirement ) { ?>
        <h3><?= $requirement['title']; ?></h3>
        <p><?= $requirement['description']; ?></p>
      <?php } ?>
    </section>

<?php endif; ?>

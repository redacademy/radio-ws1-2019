<?php
/**
 * Template part for program details page training section.
 *
 * @package coop-radio
 */

?>

<?php
  $sections = CFS()->get( 'training_cores' );
  if ( isset( $sections ) && sizeof( $sections ) > 0 ) : ?>

    <section>
      <h2><?= CFS()->get( 'training_title' ); ?></h2>
      <p><?= CFS()->get( 'training_description' ); ?></p>
      
      <div class="program-details-training">
      <?php foreach ( $sections as $section ) { ?>
        <div class="training-core">
          <img src="<?= $section['icon']; ?>" alt="" />
          <h3><?= $section['title']; ?></h3>
          <p><?= $section['description']; ?></p>
      </div>
      <?php } ?>
    </div>

    </section>

<?php endif; ?>

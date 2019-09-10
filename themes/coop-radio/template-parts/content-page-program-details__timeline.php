<?php
/**
 * Template part for program details page timeline.
 *
 * @package coop-radio
 */

?>

<?php
  $events = CFS()->get( 'timeline_events' );
  if ( isset( $requirements ) && sizeof( $events ) > 0 ) : ?>

    <section>
      <h2><?= CFS()->get( 'timeline_title' ); ?></h2>
      <p><?= CFS()->get( 'timeline_description' ); ?></p>

      <?php foreach ( $events as $event ) { ?>
        <h3><?= $event['title']; ?></h3>
        <p><?= $event['description']; ?></p>
      <?php } ?>
    </section>

<?php endif; ?>

<?php
/**
 * Template part for program details page timeline.
 *
 * @package coop-radio
 */

?>

<?php
  $events = CFS()->get( 'timeline_events' );
  if ( isset( $events ) && sizeof( $events ) > 0 ) : ?>

    <section class="timeline">
      <h2><?= CFS()->get( 'timeline_title' ); ?></h2>
      <p><?= CFS()->get( 'timeline_description' ); ?></p>
      <a href="/">Learn more</a>

      <ul class="timeline__list">
        <?php $i = 0; foreach ( $events as $event ) { $i++; ?>
          <li class="timeline__list-item">
            <div class="timeline__list-item-wrapper">
              <p class="timeline__list-item-phase">Phase <?= $i; ?></p>
              <h3 class="timeline__list-item-title"><?= $event['title']; ?></h3>
              <p class="timeline__list-item-content">
                <?= $event['description']; ?>
              </p>
            </div>
          </li>
        <?php } ?>
      </ul>
    </section>

<?php endif; ?>

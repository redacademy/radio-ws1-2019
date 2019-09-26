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
      <a id="section--timeline" class="program-details__internal-link"></a>
      <h2><?= CFS()->get( 'timeline_title' ); ?></h2>
      <p class="text-description text-container"><?= CFS()->get( 'timeline_description' ); ?></p>
      <a href="http://www.coopradio.org/member" target="_blank">Learn more</a>

      <ul class="timeline__list">
        <?php $i = 0; foreach ( $events as $event ) { $i++; ?>
          <li class="timeline__list-item">
            <div class="timeline__list-item-wrapper">
              <h4 class="timeline__list-item-phase">Phase <?= $i; ?></h4>
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

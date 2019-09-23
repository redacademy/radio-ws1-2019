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

    <section id="section--overview" class="overview">
      <h2 class="text-container"><?= CFS()->get( 'info_title' ); ?></h2>

    <section class="overview-main">
      <?php foreach ( $sections as $section ) { ?>

        <div class="overview-item">
            <img class="overview-img" src="<?= $section['icon']; ?>" alt="" />
          <div class="overview-text">
            <h3><?= $section['title']; ?></h3>
            <p><?= $section['description']; ?></p>
          </div>
        </div>

      <?php } ?>
      </section>
    </section>

<?php endif; ?>

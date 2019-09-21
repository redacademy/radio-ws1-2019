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

    <section class="get-started">
      <h2>
        <?= CFS()->get( 'how_to_title' ); ?>
      </h2>

      <?php foreach ( $sections as $section ) { ?>
        <div class="get-started-core">
          <img src="<?= $section['icon']; ?>" alt="" />
            <h3><?= $section['title']; ?></h3>
            <p><?= $section['description']; ?></p>
        </div>
      <?php } ?>
    </section>

<?php endif; ?>

<section>
  <h2><?= CFS()->get( 'sign_up_title' ); ?></h2>
</section>


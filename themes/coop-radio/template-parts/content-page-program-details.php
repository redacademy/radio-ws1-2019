<?php
/**
 * Template part for program details page content.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header>
    <h1>
      <?= CFS()->get( 'program_title' ); ?>
    </h1>

    <h2>
      <?= CFS()->get( 'featured_content_title' ); ?>
    <h2/>

    <p>
      <?= CFS()->get( 'featured_content_subtitle' ); ?>
    </p>
  </header>

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

  <section>
    <div>youtube vid at: <?= CFS()->get( 'featured_video_url' ); ?></div>
  </section>

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

  <?php
    $sections = CFS()->get( 'training_cores' );
    if ( isset( $sections ) && sizeof( $sections ) > 0 ) : ?>

      <section>
        <h2><?= CFS()->get( 'training_title' ); ?></h2>
        <p><?= CFS()->get( 'training_description' ); ?></p>

        <?php foreach ( $sections as $section ) { ?>
          <img src="<?= $section['icon']; ?>" alt="" />
          <h3><?= $section['title']; ?></h3>
          <p><?= $section['description']; ?></p>
        <?php } ?>
      </section>

  <?php endif; ?>

  <section>
    <h2><?= CFS()->get( 'enroll_title' ); ?></h2>
    <p><?= CFS()->get( 'enroll_description' ); ?></p>
  </section>
</article>

<?php
/**
 * Template part for displaying single artist.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>

    <h2>
      <?= CFS()->get( 'artist_name' ); ?>
    <h2>

    <div>
      <?= CFS()->get( 'bio_text' ); ?>
    </div>
  </header>

  <section>
    <h3>
      <?= CFS()->get( 'intro_title' ); ?>
    </h3>

    <?= CFS()->get( 'intro_text' ); ?>
  </section>

  <section>
    <!-- music video -->
    <?= CFS()->get( 'youtube_url' ); ?>
  </section>

  <section>
    <h3>
      <?= CFS()->get( 'full_name' ); ?>
    </h3>

    <?= CFS()->get( 'bio_text_secondary' ); ?>
  </section>

  <section>
    <h3>
      <?= CFS()->get( 'additional_info_title' ); ?>
    </h3>

    <?= CFS()->get( 'additional_info_text' ); ?>
  </section>

  <footer>
    <!-- social links -->
    <ul>
      <li>
        <?= CFS()->get( 'facebook_url' ); ?>
      </li>
      <li>
        <?= CFS()->get( 'twitter_url' ); ?>
      </li>
      <li>
        <?= CFS()->get( 'instagram_url' ); ?>
      </li>
      <li>
        <?= CFS()->get( 'soundcloud_url' ); ?>
      </li>
      <li>
        <?= CFS()->get( 'apple_music_url' ); ?>
      </li>
    </ul>
  </footer>
</article>

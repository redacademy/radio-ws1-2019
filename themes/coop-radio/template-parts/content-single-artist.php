<?php

/**
 * Template part for displaying single artist.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="artist-hero artist-image-container">
    <header>
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large'); ?>
      <?php endif; ?>

      <div class="text-container grid">
        <article class="top-text-container">
          <h2 class="artist-name">
            <?= CFS()->get('artist_name'); ?>
            <h2>

              <div class="artist-bio">
                <?= CFS()->get('bio_text'); ?>
              </div>
        </article>
      </div>
    </header>
  </div>

  <section class="text-container journey-text">
    <h3 class="intro-title">
      <?= CFS()->get('intro_title'); ?>
    </h3>
    <h1>----------</h1>

    <?= CFS()->get('intro_text'); ?>
  </section>

  <section class="featured-video">
    <!-- music video -->
    <?= CFS()->get('youtube_url'); ?>
  </section>

  <article class="full-description-container">
    <div class="description">
      <section class="text-container">
        <h3>
          <?= CFS()->get('full_name'); ?>
        </h3>

        <?= CFS()->get('bio_text_secondary'); ?>
      </section>

      <section class="text-container">
        <h3>
          <?= CFS()->get('additional_info_title'); ?>
        </h3>

        <?= CFS()->get('additional_info_text'); ?>
      </section>
    </div><!-- description-->

    <section class="artist-image-container">
      <!-- additional image? -->
    </section>
  </article>

  <footer>
    <div class="text-container">
      <p>follow me on</p>
      <!-- social links -->
      <ul class="social-links">
        <li>
          <?= CFS()->get('facebook_url'); ?>
        </li>
        <li>
          <?= CFS()->get('twitter_url'); ?>
        </li>
        <li>
          <?= CFS()->get('instagram_url'); ?>
        </li>
        <li>
          <?= CFS()->get('soundcloud_url'); ?>
        </li>
        <li>
          <?= CFS()->get('apple_music_url'); ?>
        </li>
      </ul>
    </div>
  </footer>
</article>
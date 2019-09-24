<?php

/**
 * Template part for displaying single artist.
 *
 * @package coop-radio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header>
    <div class="artist-hero" style="background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(<?= CFS()->get('artist_hero'); ?>)">
      <div class="artist-header-bio bio">
        <div class="page-container">
          <h2><?= CFS()->get('artist_name'); ?></h2>
          <p><?= CFS()->get('bio_text'); ?></p>
        </div><!-- page-container -->
      </div>
    </div><!-- artist-hero -->
  </header>

  <section class="page-container">
    <div class="artist-intro text-container">
      <h3 class="intro-title"><?= CFS()->get('intro_title'); ?></h3>
      <p><?= CFS()->get('intro_text'); ?></p>
    </div>
  </section><!-- page-container -->

  <section class="page-container">
    <iframe width="560" height="315" src="<?= CFS()->get('youtube_url'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </section><!-- page-container -->

  <section class="page-container artist-text-main">
    <div style="display:flex;">
      <article class="artist-text-item">
        <div class="bio">
          <h3 class="full-name"><?= CFS()->get('full_name'); ?></h3>
          <div class="underline">
            <svg height="20" width="500">
              <line x1="0" y1="0" x2="200" y2="0" style="stroke:rgb(0,0,0);stroke-width:10" />
            </svg>
          </div>
          <p><?= CFS()->get('bio_text_secondary'); ?></p>
        </div><!-- bio -->

        <div class="bio">
          <h3><?= CFS()->get('additional_info_title'); ?></h3>
          <p><?= CFS()->get('additional_info_text'); ?></p>
        </div><!-- bio -->

        <article class="artist-socials socials-desk">
  <div class="text-container">
    <p>follow me on my social media</p>
    <ul class="social-links">
      <li>
        <a href="<?= CFS()->get('facebook_url'); ?>">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="<?= CFS()->get('twitter_url'); ?>">
          <i class="fab fa-twitter-square"></i>
        </a>
      </li>
      <li>
        <a href="<?= CFS()->get('instagram_url'); ?>">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a href="<?= CFS()->get('soundcloud_url'); ?>">
          <i class="fab fa-soundcloud"></i>
        </a>
      </li>
      <li>
        <a href="<?= CFS()->get('apple_music_url'); ?>">
          <i class="fas fa-music"></i>
        </a>
      </li>
    </ul>
  </div>
</article>
      </article><!-- text-container artist-text-item -->


      <article class="artist-img">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>
      </article>
    </div>

    <article class="artist-track-main">
      <?php
      $track_ids = CFS()->get_reverse_related($post->ID, array(
        'field_name' => 'artist',
        'post_type' => 'track'
      ));

      if (sizeof($track_ids)) :

        $track_artist = CFS()->get('artist_name');
        $tracks = new WP_Query(array(
          'post__in' => $track_ids,
          'post_type' => 'track',
        ));

        if ($tracks->have_posts()) : ?>
          <section class="audio-container">
            <div class="artist-tracks__container">
              <h3 class="artist-tracks__title">My Songs</h3>
              <div class="artist-tracks">
                <?php while ($tracks->have_posts()) : $tracks->the_post();
                      $track_file = CFS()->get('file'); ?>

                  <!-- Player styling depends on class-names (in `artist-single-tracks.js`) -->
                  <div class="artist-track__container">
                    <div class="artist-track__info-container">
                      <div class="artist-track__info-artist-img-container">
                        <img class="artist-track__info-artist-img" src="" alt="" />
                      </div>
                      <div class="artist-track__info">
                        <p class="artist-track__info--title">
                          <?php the_title(); ?>
                        </p>
                        <p class="artist-track__info--artist">
                          <?= $track_artist; ?>
                        </p>
                      </div>
                    </div>

                    <div class="artist-track__controls--container">

                      <div class="artist-track__actions">

                        <button class="artist-track__action artist-track__action--play" type="button">
                          <img class="artist-track__action-icon--play" src="<?= get_template_directory_uri() . '/images/button-play.svg'; ?>" data-pause-icon="<?= get_template_directory_uri() . '/images/button-pause.svg'; ?>" data-play-icon="<?= get_template_directory_uri() . '/images/button-play.svg'; ?>" alt="Play track" />
                        </button>

                      </div>

                    </div>


                    <p class="artist-track__time">
                      00:00
                    </p>

                    <div class="artist-track__progress-container">
                      <div class="artist-track__progress-fill"></div>
                      <div class="artist-track__progress">
                        <div class="artist-track__progress-marker"></div>
                      </div>
                    </div>

                    <a class="artist-track__action artist-track__action--share" href="" target="_blank">
                      <img src="<?= get_template_directory_uri() . '/images/share-icon.svg'; ?>" alt="Share track" />
                    </a>
                    <audio class="artist-track" src="<?= $track_file; ?>">
                      <a href="<?= $track_file; ?>">Download track</a>
                    </audio>
                  </div>
                <?php endwhile;
                    wp_reset_postdata(); ?>
              </div>
            </div>
          </section>
      <?php endif;
      endif; ?>

  </section>
  </section>
</article><!-- artist-track-container -->

<section class="artist-socials socials-mobile">
  <div class="text-container">
    <p>follow me on</p>
    <ul class="social-links">
      <li>
        <a href="<?= CFS()->get('facebook_url'); ?>">
          <i class="fab fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="<?= CFS()->get('twitter_url'); ?>">
          <i class="fab fa-twitter-square"></i>
        </a>
      </li>
      <li>
        <a href="<?= CFS()->get('instagram_url'); ?>">
          <i class="fab fa-instagram"></i>
        </a>
      </li>
      <li>
        <a href="<?= CFS()->get('soundcloud_url'); ?>">
          <i class="fab fa-soundcloud"></i>
        </a>
      </li>
      <li>
        <a href="<?= CFS()->get('apple_music_url'); ?>">
          <i class="fas fa-music"></i>
        </a>
      </li>
    </ul>
  </div>
</section>
<footer>
</footer>
</article>
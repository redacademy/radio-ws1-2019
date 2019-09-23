<?php
/**
 * Template part for displaying single artist.
 *
 * @package coop-radio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="artist-hero artist-img-container">
    <header>
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large'); ?>
      <?php endif; ?>

      <div class="text-container top-text-container">
        <h2 class="artist-name">
          <?= CFS()->get('artist_name'); ?>
        </h2>

        <div class="artist-description">
          <?= CFS()->get('bio_text'); ?>
        </div>

      </div><!-- text-container top-text-container-->
    </header>
  </div><!-- artist-img-container -->

  <section class="text-container my-journey-text">
    <h3 class="intro-title">
      <?= CFS()->get('intro_title'); ?>
    </h3>

    <?= CFS()->get('intro_text'); ?>
  </section><!-- text container my-journey-text -->

  <section class="featured-video">
    <!-- music video -->
    <?= CFS()->get('youtube_url'); ?>
  </section><!-- featured-video -->

  <article class="full-description-container">
    <div class="description">
      <section class="text-container">
        <h3 class="full-name">
          <?= CFS()->get('full_name'); ?>
        </h3>

        <?= CFS()->get('bio_text_secondary'); ?>
      </section>

      <section class="text-container">
        <h3>
          <?= CFS()->get('additional_info_title'); ?>
        </h3>

        <?= CFS()->get('additional_info_text'); ?>
      </section><!-- text-container -->

    </div><!-- description -->

    <section class="additional-artist-img artist-img-container">
      <!-- additional image? -->
    </section>

    <?php
      $track_ids = CFS()->get_reverse_related( $post->ID, array(
        'field_name' => 'artist',
        'post_type' => 'track'
      ) );

      if ( sizeof( $track_ids ) ) :

        $track_artist = CFS()->get('artist_name');
        $tracks = new WP_Query( array(
          'post__in' => $track_ids,
          'post_type' => 'track',
        ) );

        if ( $tracks->have_posts() ) : ?>
          <section class="audio-container">
            <div class="artist-tracks__container">
              <h3 class="artist-tracks__title">My Songs</h3>
              <div class="artist-tracks">
                <?php while ( $tracks->have_posts() ) : $tracks->the_post();
                  $track_file = CFS()->get('file'); ?>

                  <!-- Player styling depends on class-names (in `artist-single-tracks.js`) -->
                  <div class="artist-track__container">
                    <div class="artist-track__info-container">
                      <div class="artist-track__info-artist-img-container">
                        <img
                          class="artist-track__info-artist-img"
                          src=""
                          alt=""
                        />
                      </div>
                      <div class="artist-track__info">
                        <p
                          class="artist-track__info--title"
                        >
                          <?php the_title(); ?>
                        </p>
                        <p
                          class="artist-track__info--artist"
                        >
                          <?= $track_artist; ?>
                        </p>
                      </div>
                    </div>

                    <div class="artist-track__controls--container">

                      <div class="artist-track__actions">

                        <button
                          class="artist-track__action artist-track__action--play"
                          type="button"
                        >
                          <img
                            class="artist-track__action-icon--play"
                            src="<?= get_template_directory_uri().'/images/button-play.svg'; ?>"
                            data-pause-icon="<?= get_template_directory_uri().'/images/button-pause.svg'; ?>"
                            data-play-icon="<?= get_template_directory_uri().'/images/button-play.svg'; ?>"
                            alt="Play track"
                          />
                        </button>

                      </div>

                    </div>


                    <p
                      class="artist-track__time"
                    >
                      00:00
                    </p>

                    <div
                      class="artist-track__progress-container"
                    >
                      <div class="artist-track__progress-fill"></div>
                      <div class="artist-track__progress">
                        <div class="artist-track__progress-marker"></div>
                      </div>
                    </div>

                    <a
                      class="artist-track__action artist-track__action--share"
                      href=""
                      target="_blank"
                    >
                      <img
                        src="<?= get_template_directory_uri().'/images/share-icon.svg'; ?>"
                        alt="Share track"
                      />
                    </a>
                    <audio
                      class="artist-track"
                      src="<?= $track_file; ?>"
                    >
                      <a href="<?= $track_file; ?>">Download track</a>
                    </audio>
                  </div>
                <?php endwhile; wp_reset_postdata(); ?>
              </div>
            </div>
          </section>
      <?php endif; endif; ?>

  </article><!-- full-description-container -->

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

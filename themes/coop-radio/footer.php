<?php
/**
 * Site footer audio player.
 *
 * @package coop-radio
 */

?>

      <footer
        id="audio-player__container"
        class="audio-player"
        role="complementary"
      >
        <div class="audio-player__info-container">
          <div class="audio-player__info-artist-img-container">
            <img
              id="audio-player__info-artist-img"
              class="audio-player__info-artist-img-container"
              src=""
              alt=""
            />
          </div>
          <div class="audio-player__info">
            <p id="audio-player__info--title" class="audio-player__info--title"></p>
            <p id="audio-player__info--artist"></p>
          </div>
        </div>

        <div class="audio-player__actions">
          <button
            id="audio-player__action--prev"
            class="audio-player__action audio-player__action--prev"
            type="button"
          >
            <img
              src="<?= get_template_directory_uri().'/images/button-prev.svg'; ?>"
              alt="Previous track"
            />
          </button>

          <button
            id="audio-player__action--play"
            class="audio-player__action audio-player__action--play"
            type="button"
          >
            <img
              id="audio-player__action-icon--play"
              src="<?= get_template_directory_uri().'/images/button-play.svg'; ?>"
              data-pause-icon="<?= get_template_directory_uri().'/images/button-pause.svg'; ?>"
              data-play-icon="<?= get_template_directory_uri().'/images/button-play.svg'; ?>"
              alt="Play track"
            />
          </button>

          <button
            id="audio-player__action--next"
            class="audio-player__action audio-player__action--next"
            type="button"
          >
            <img
              src="<?= get_template_directory_uri().'/images/button-next.svg'; ?>"
              alt="Next track"
            />
          </button>
        </div>

        <p
          id="audio-player__time"
          class="audio-player__time"
        >
          00:00
        </p>

        <div
          id="audio-player__progress-container"
          class="audio-player__progress-container"
        >
          <div class="audio-player__progress-fill"></div>
          <div id="audio-player__progress" class="audio-player__progress">
            <div class="audio-player__progress-marker"></div>
          </div>
        </div>

        <button
          id="audio-player__action--share"
          class="audio-player__action audio-player__action--share"
          type="button"
        >
          <img
            src="<?= get_template_directory_uri().'/images/share-icon.svg'; ?>"
            alt="Share track"
          />
        </button>

        <audio
          id="audio-player"
          src="<?= get_stylesheet_directory_uri() . '/'; ?>"
          autoplay
        >
          <a href="">Download track</a>
        </audio>
      </footer>
    </div>

    <?php wp_footer(); ?>

  </body>
</html>

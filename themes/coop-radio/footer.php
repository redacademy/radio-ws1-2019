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

        <button
          id="audio-player__play-button"
          class="audio-player__play-button"
          type="button"
        >
          <img
            id="audio-player__play-button-icon"
            src="<?= get_template_directory_uri().'/images/button-play.svg'; ?>"
            data-alt-src="<?= get_template_directory_uri().'/images/button-pause.svg'; ?>"
            alt="Play track"
          />
        </button>

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
          id="audio-player__share-button"
          class="audio-player__share-button"
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
        >
          <a href="">Download recent track</a>
        </audio>
      </footer>
    </div>

    <?php wp_footer(); ?>

  </body>
</html>

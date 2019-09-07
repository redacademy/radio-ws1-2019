<?php
/**
 * The template for displaying the footer.
 *
 * @package coop-radio
 */

?>

      <footer role="contentinfo">
        <?php if ( ! is_active_sidebar( 'audio-player' ) ) {
          return;
        }
        ?>

        <div class="audio-player" role="complementary">
          <?php dynamic_sidebar( 'audio-player' ); ?>
        </div>
      </footer>
    </div>

    <?php wp_footer(); ?>

  </body>
</html>

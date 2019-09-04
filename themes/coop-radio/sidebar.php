<?php
/**
 * Fallback sidebar.
 *
 * @package coop-radio
 */

if ( ! is_active_sidebar( 'audio-player' ) ) {
  return;
}
?>

<div role="complementary">
  <?php dynamic_sidebar( 'audio-player' ); ?>
</div>

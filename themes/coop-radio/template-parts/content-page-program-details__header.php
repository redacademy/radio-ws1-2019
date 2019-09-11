<?php
/**
 * Template part for program details page header.
 *
 * @package coop-radio
 */

?>

<header
  class="program-details__header"
  style="background-image: url(
    <?= wp_get_attachment_url( get_post_thumbnail_id( $post->ID )); ?>
  );"
>
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

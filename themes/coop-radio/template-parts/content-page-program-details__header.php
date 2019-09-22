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
  <h1 class="heading-1">
    <?= CFS()->get( 'program_title' ); ?>
  </h1>

  <h2 class="program-details__subheading">
    <?= CFS()->get( 'featured_content_title' ); ?>
  </h2>

  <p class="program-details_paragraph">
    <?= CFS()->get( 'featured_content_subtitle' ); ?>
  </p>

  <div class="program-details__actions">
    <button
      class="btn-medium btn-primary program-details__action"
      type="button"
    >
      Sign up
    </button>

    <a href="/">
      Watch the film
    </a>
  </div>
</header>

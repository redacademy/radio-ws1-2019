<?php

/**
 * Template part for program details page header.
 *
 * @package coop-radio
 */

?>

<header class="program-details__header" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url(
    <?= wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
  );">
  <article class="program-header-info">
    <div class="program-header-text">
      <h3 class="program-title">
        <?= CFS()->get('program_title'); ?>
      </h3>

      <h2 class="featured-title">
        <?= CFS()->get('featured_content_title'); ?>
      </h2>

      <h1 class="featured-subtitle">
        <?= CFS()->get('featured_content_subtitle'); ?>
      </h1>
    </div>

    <div class="program-details__actions">
      <button class="btn-medium btn-primary program-details__action" type="button">
        Sign up
      </button>
      <a href="/">Watch the film</a>

  </article>
</header>
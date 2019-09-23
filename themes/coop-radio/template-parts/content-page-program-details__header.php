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
  <a id="section--header" class="program-details__internal-link"></a>
  <div class="program-details__header-container">
    <div class="program-header-info">
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
      </div>
    </div>
  </div>

  <ul class="program-details__nav-link-list">
    <li>
      <a
        href="#section--header"
        class="program-details__nav-link program-details__nav-link--fill"
      >
        <span class="screen-reader-text">
          Header
        </span>
      </a>
    </li>
    <li>
      <a
        href="#section--overview"
        class="program-details__nav-link"
      >
        <span class="screen-reader-text">
          Overview
        </span>
      </a>
    </li>
    <li>
      <a
        href="#section--get-started"
        class="program-details__nav-link"
      >
        <span class="screen-reader-text">
          Get started
        </span>
      </a>
    </li>
    <li>
      <a
        href="#section--video"
        class="program-details__nav-link"
      >
        <span class="screen-reader-text">
          Featured video
        </span>
      </a>
    </li>
    <li>
      <a
        href="#section--requirements"
        class="program-details__nav-link"
      >
        <span class="screen-reader-text">
          Requirements
        </span>
      </a>
    </li>
    <li>
      <a
        href="#section--timeline"
        class="program-details__nav-link"
      >
        <span class="screen-reader-text">
          Timeline
        </span>
      </a>
    </li>
    <li>
      <a
        href="#section--training"
        class="program-details__nav-link"
      >
        <span class="screen-reader-text">
          Training
        </span>
      </a>
    </li>
    <li>
      <a
        href="#section--enroll"
        class="program-details__nav-link"
      >
        <span class="screen-reader-text">
          Enroll
        </span>
      </a>
    </li>
  </ul>
</header>

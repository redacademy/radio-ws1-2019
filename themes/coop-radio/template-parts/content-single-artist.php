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

  <section class="page-container">

    <div class="text-container">
      <div class="bio">
        <h3 class="full-name"><?= CFS()->get('full_name'); ?></h3>
        <p><?= CFS()->get('bio_text_secondary'); ?></p>
      </div>

      <div class="bio">
        <h3><?= CFS()->get('additional_info_title'); ?></h3>
        <p><?= CFS()->get('additional_info_text'); ?></p>
      </div>
    </div>

    <div class="artist-img">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large'); ?>
      <?php endif; ?>
    </div>

  </section><!-- page-container -->

  <section class="artist-tracks page-container">
    <h3>My Songs</h3>
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

      if ($tracks->have_posts()) :
        while ($tracks->have_posts()) : $tracks->the_post();
          $track_file = CFS()->get('file'); ?>

          <h4><?php the_title(); ?></h4>
          <p><?= $track_artist; ?></p>

          <audio class="artist-track" src="<?= $track_file; ?>">
            <a href="<?= $track_file; ?>">Download track</a>
          </audio>

    <?php endwhile;
        wp_reset_postdata();
      endif;
    endif; ?>
  </section>

  <section class="artist-socials">
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
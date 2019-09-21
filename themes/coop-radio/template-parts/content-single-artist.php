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

    <section class="artist-tracks">
      <h3>My Songs</h3>
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

          if ( $tracks->have_posts() ) :
            while ( $tracks->have_posts() ) : $tracks->the_post();
              $track_file = CFS()->get('file'); ?>

              <h4><?php the_title(); ?></h4> 
              <p><?= $track_artist; ?></p>

              <audio
                class="artist-track"
                src="<?= $track_file; ?>"
              >
                <a href="<?= $track_file; ?>">Download track</a>
              </audio>

            <?php endwhile; wp_reset_postdata();
        endif; endif; ?>
    </section>

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

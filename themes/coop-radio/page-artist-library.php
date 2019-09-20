<?php
/**
 * Artist library template.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main class="artist-library__container">

    <div class="artist-library__search-container">
      <img
        class="artist-library__search-icon"
        src="<?php echo get_stylesheet_directory_uri().'/images/menu-bar.png'; ?>"
        alt=""
      />
    
      <label for="artist-library__search-input" class="screen-reader-text">
        <?php echo esc_html( 'Search Artist' ); ?>
      </label>

      <input
        id="artist-library__search-input"
        name="artist-library__search-input"
        class="artist-library__search-input"
        placeholder="Search Artist..."
        type="text"
      />
    </div><!-- artist-search-bar -->

    <div class="artist-library__scroll-container">
      <button
        id="artist-library__action--prev"
        class="artist-library__action artist-library__action--prev"
      >
        <img
          alt="Previous artist"
          class="artist-library__action-icon"
          src="<?php echo get_stylesheet_directory_uri().'/images/floating-button-prev-dark.svg'; ?>"
        />
      </button>

      <div class="artist-library">
        <?php
          $artists = get_posts( array(
            'post_type' => 'artist',
          ) );

          foreach ( $artists as $post ) : setup_postdata( $post );
            get_template_part( 'template-parts/content', 'artist-library' );
          endforeach; wp_reset_postdata();?>
        
      </div><!-- artist-library -->

      <button
        id="artist-library__action--next"
        class="artist-library__action artist-library__action--next"
      >
        <img
          alt="Next artist"
          class="artist-library__action-icon"
          src="<?php echo get_stylesheet_directory_uri().'/images/floating-button-next-dark.svg'; ?>"
        />
      </button>
    </div>

  </main>

<?php get_footer(); ?>

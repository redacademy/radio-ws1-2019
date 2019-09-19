<?php
/**
 * Artist library template.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <div class="artist-search-bar">
		  <span class="artist-search-icon">
        <img
          src="<?php echo get_stylesheet_directory_uri().'/images/menu-bar.png'; ?>"
          alt=""
        />
      </span>
    
      <label for="artist-search-input" class="screen-reader-text">
        <?php echo esc_html( 'Search Artist' ); ?>
      </label>

      <input
        id="artist-search-input"
        name="artist-search-input"
        class="artist-search-input"
        placeholder="Search Artist..."
        type="text"
      />
    </div><!-- artist-search-bar -->

    <div class="artist-library__container">
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

          foreach ( $artists as $post ) : setup_postdata( $post );?>

            <div class="artist">
            <?php get_template_part( 'template-parts/content', 'artist-library' );?>
            </div>
            
        <?php endforeach; wp_reset_postdata();?>
        
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

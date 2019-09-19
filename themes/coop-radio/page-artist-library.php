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
    
		  <span class="screen-reader-text"><?php echo esc_html( 'Search Artist' ); ?></span>
        <input
          type="text"
          class="artist-search-field"
          placeholder="Search Artist..."
          value=""
          name="post_type"
          id="post_type"
        />
    </div><!-- artist-search-bar -->

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

  </main>

<?php get_footer(); ?>

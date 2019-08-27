<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>

    <section>
      <header>
        <h1><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
      </header>

      <div>
        <p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?' ); ?></p>

        <?php get_search_form(); ?>

        <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

        <?php if ( coop_radio_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
          <div>
            <h2><?php echo esc_html( 'Most Used Categories' ); ?></h2>
            <ul>
              <?php
                wp_list_categories( array(
                  'orderby'    => 'count',
                  'order'      => 'DESC',
                  'show_count' => 1,
                  'title_li'   => '',
                  'number'     => 10,
                ) );
              ?>
            </ul>
          </div>
        <?php endif; ?>

        <?php
          $archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
          the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
        ?>

      </div>
    </section>

  </main>

<?php get_footer(); ?>

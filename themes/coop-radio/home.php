<?php
/**
 * Template file for artists search.
 *
 * @package coop-radio
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="search-artist">
            <?php echo get_search_form(); ?>
        </div>

        <?php $args = array(
            'order' => 'ASC',
            'posts_per_page' => 10,
            'post_type' => 'post',
        ); ?>
        <?php $artist_posts = new WP_Query($args); ?>

        <?php if ($artist_posts->have_posts()) : ?>

        <?php while ($artist_posts->have_posts()) : $artist_posts->the_post(); ?>

        <div class="artist-entry">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <header class="entry-header">
                    <a href="<?php esc_url(get_permalink()) ?>">
                        <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('large'); ?>
                        <?php endif; ?>

                        <?php the_title(sprintf('<h2 class="entry-title"></h2>')); ?>
                    </a><!-- end of alink -->

                </header><!-- .entry-header -->

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div><!-- .entry-content -->

            </article><!-- article ID -->

        </div><!-- .artist-entry -->

</div>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>

<?php else : ?>

<h2>Cannot Find Recent Posts</h2>

<?php endif; ?>
<?php wp_reset_postdata(); ?>

</main>
</div>

<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
    <?php the_title( sprintf( '<h2 class="search-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
  
    <?php the_excerpt(); ?>
    <p>
      <a class='read-more' href="<?php echo esc_url(get_permalink()) ?>">Read more</a>
    </p>
  
</article>

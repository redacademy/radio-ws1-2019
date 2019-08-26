<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header>

	<div>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div>' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>

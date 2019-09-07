<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header>
  <?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
    <h1>
      <?= the_title(); ?>
    </h1>

    <p>
      <?php the_content(); ?>
    </p> 
  </header>
</article>

<section>
    <h2><?= CFS()->get( 'actions_title' ); ?></h2>
    <p><?= CFS()->get( 'actions_text' ); ?></p>
</section>

<section>
   
    <h2><?= CFS()->get( 'donate_title' ); ?></h2>
    <p><?= CFS()->get( 'donate_text' ); ?></p>

    <h2><?= CFS()->get( 'education_title' ); ?></h2>
    <p><?= CFS()->get( 'education_text' ); ?></p>

    <h2><?= CFS()->get( 'platform_title' ); ?></h2>
    <p><?= CFS()->get( 'platform_text' ); ?></p>

</section>
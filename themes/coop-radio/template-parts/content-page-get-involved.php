<?php
/**
 * Template part for get involved page content.
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

  <section>
    <h2><?= CFS()->get( 'actions_title' ); ?></h2>
    <p><?= CFS()->get( 'actions_text' ); ?></p>

    <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="logo-link-involved" src="<?php echo get_stylesheet_directory_uri().'/images/get-involved/co-op icons-06.svg'; ?>" alt="">
            <p>Donations</p></a>      
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="logo-link-involved" src="<?php echo get_stylesheet_directory_uri().'/images/get-involved/co-op icons-07.svg'; ?>" alt="">
          <p>Become a Volunteer Programmer</p></a>
          <a href="<?php echo esc_url(home_url('/')); ?>">
            <img class="logo-link-involved3" src="<?php echo get_stylesheet_directory_uri().'/images/get-involved/co-op icons-05.svg'; ?>" alt="">
          <p>Start a new show on Co-Op Radio</p></a>
  </section>

  <?php
    $fields = CFS()->get( 'faq' );
    if ( sizeof( $fields ) > 0 ) : ?>

    <h2>F.A.Q.</h2>

    <?php foreach ( $fields as $field ) { ?>
      <ul>
        <li>
          <button class="btnfaq" aria-expanded="false"><?= $field['question']; ?></button>
            <p hidden="" class="tooltip"><?= $field['answer']; ?></p>
        </li>
      </ul>
    <?php } endif; ?>

</article>
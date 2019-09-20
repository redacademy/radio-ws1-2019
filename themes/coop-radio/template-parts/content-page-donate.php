<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package coop-radio
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header>
    <div class="header-container">
      <div class="container2">
        <?php if ( has_post_thumbnail() ) : ?>
			    <?php the_post_thumbnail( 'large' ); ?>
          <?php endif; ?>
        </div>

      <div class="container-1">
        <h1>
          <?= the_title(); ?>
        </h1>
        <p>
          <?php the_content(); ?>
        </p> 
          <a href="#" class="btn">Donate Now</a>
      </div>
    </div>
  </header>
</article>

<section>
    <h2><?= CFS()->get( 'actions_title' ); ?></h2>

    <div class="donate-container2">
        <p><?= CFS()->get( 'actions_text' ); ?></p>
      <div class="wrap-photo">
        <img class="community-photo" src="<?php echo get_stylesheet_directory_uri().'/images/get-involved/the_community.jpg'; ?>" alt="">
          <div>
            <span class="ball-a"></span>
          </div>
          <div>
            <span class="ball-b"></span>
          </div>
        </div>    
        <div class="side-text2">
          <h2><?= CFS()->get( 'donate_title' ); ?></h2>
          <p><?= CFS()->get( 'donate_text' ); ?></p>
        </div>
      </div>

    <div class="donate-container">
      <div class="wrap-photo">
        <img class="community-photo" src="<?php echo get_stylesheet_directory_uri().'/images/get-involved/education_and_mentorship.jpg'; ?>" alt="">
          <div>
            <span class="ball-a1"></span>
          </div>
          <div>
            <span class="ball-b1"></span>
          </div>
      </div>
      <div class="side-text">
        <h2><?= CFS()->get( 'education_title' ); ?></h2>
        <p><?= CFS()->get( 'education_text' ); ?></p>
      </div>
    </div>

    <div class="donate-container2">
      <div class="wrap-photo">
        <img class="community-photo" src="<?php echo get_stylesheet_directory_uri().'/images/get-involved/a_platform_for_voice.jpg'; ?>" alt="">
          <div>
            <span class="ball-a"></span>
          </div>
          <div>
            <span class="ball-b"></span>
          </div>
      </div>
      <div class="side-text2">
        <h2><?= CFS()->get( 'platform_title' ); ?></h2>
        <p><?= CFS()->get( 'platform_text' ); ?></p>
      </div>
    </div>
  <a href="#" class="btn">Donate Now</a>
</section>
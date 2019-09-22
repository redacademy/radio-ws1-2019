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
          <?php get_template_part( 'template-parts/content-socials-collapse' ); ?>
          <?php endif; ?>
        </div>

      <div class="container-1">
        <h1>
          <?= the_title(); ?>
        </h1>
        <p>
          <?php the_content(); ?>
        </p> 
        <a href="https://interland3.donorperfect.net/weblink/weblink.aspx?name=E920158QE&id=3" class="btn-medium btn-primary">Donate Now</a> 
      </div>
    </div>
  </header>
</article>

<section>
    <h2 class="donate-title"><?= CFS()->get( 'actions_title' ); ?></h2>
    <p><?= CFS()->get( 'actions_text' ); ?></p>

  <div class="donate-container2">
    <div class="wrap-photo">
      <img class="donate-photo" src="<?= CFS()->get( 'community_img' ); ?>" alt="">
      <div>
        <span class="ball-a"></span>
      </div>
      <div>
        <span class="ball-b"></span>
      </div>
    </div>
    <div class="side-text2">
      <h2><?= CFS()->get( 'community_title' ); ?></h2>
      <p><?= CFS()->get( 'community_text' ); ?></p>
    </div>
  </div>

  <div class="donate-container">
    <div class="wrap-photo">
      <img class="donate-photo" src="<?= CFS()->get( 'education_img' ); ?>" alt="">
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
      <div class="line2"></div>
    </div>
  </div>

  <div class="donate-container2">
    <div class="wrap-photo">
      <img class="donate-photo" src="<?= CFS()->get( 'platform_img' ); ?>" alt="">
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
    <a href="https://interland3.donorperfect.net/weblink/weblink.aspx?name=E920158QE&id=3" class="btn-medium btn-primary">Donate Now</a> 

</section>

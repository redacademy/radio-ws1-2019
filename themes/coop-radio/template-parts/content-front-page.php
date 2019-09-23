<?php
/**
 * Front page content template.
 *
 * @package coop-radio
 */
?>

<section class='content-front-page'>
  <div class='content-container'>
    <header>
      <h1>
        <?= the_title(); ?>
      </h1>
    </header>

    <?= the_content(); ?>
  
    <div class='link-btn-wrapper'>
      <a href='<?php echo esc_url( home_url('/program-details')); ?>' class='btn-primary'>View</a>
    </div>
  </div>

</section>

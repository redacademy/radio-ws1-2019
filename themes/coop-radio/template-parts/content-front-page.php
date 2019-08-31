<?php
/**
 * Front page content template.
 *
 * @package coop-radio
 */

?>

<section class='home-img' style='background-image:url(wp-content/themes/coop-radio/images/front-page-background.jpeg);'>
  <header>
    <h1 style='color:#fff;'>
      <?= the_title(); ?>
    </h1>
  </header>

  <div style='color:#fff;'>
    <p>
      <?= the_content(); ?>
    </p>

    <a href="#program-details" style='color:#fff;'>View</a>
  </div>
</section>

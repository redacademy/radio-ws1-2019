<?php
/**
 * Front page content template.
 *
 * @package coop-radio
 */
?>

<section class='content-front-page'>
  <header>
    <h1>
      <?= the_title(); ?>
    </h1>
  </header>

  <?= the_content(); ?>
  
  <div>
    <a href='#program-details'>View</a>
  </div>
</section>

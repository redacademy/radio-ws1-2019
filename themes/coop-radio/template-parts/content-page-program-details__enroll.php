<?php

/**
 * Template part for program details page enroll section.
 *
 * @package coop-radio
 */

?>

<section class="enroll">
  <h2><?= CFS()->get('enroll_title'); ?></h2>
  <p class="enroll-descript-desk"><?= CFS()->get('enroll_description'); ?></p>

  <div class="enroll-main">
    <div class="enroll-img">
      <img src="<?= CFS()->get('enroll_img'); ?>">
    </div>

    <div class="enroll-text">
      <p class="enroll-descript-mob"><?= CFS()->get('enroll_description'); ?></p>
      <div class="enroll-input"><?php the_content() ?></div>
    </div>
  </div>
  
</section>
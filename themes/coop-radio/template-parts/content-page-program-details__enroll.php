<?php
/**
 * Template part for program details page enroll section.
 *
 * @package coop-radio
 */
?>

<section class="enroll">
  <a id="section--enroll" class="program-details__internal-link"></a>
  <h2><?= CFS()->get('enroll_title'); ?></h2>
  <p><?= CFS()->get('enroll_description'); ?></p>

  <div class="enroll-main">
    <div class="enroll-img">
      <img src="<?= CFS()->get('enroll_img'); ?>">
    </div>

    <div class="enroll-text">
      <div><?php the_content() ?></div>
    </div>
  </div>
</section>

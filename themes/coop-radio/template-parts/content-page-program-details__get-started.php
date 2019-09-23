<?php

/**
 * Template part for program details page how-to section.
 *
 * @package coop-radio
 */

?>

<?php
$sections = CFS()->get('how_to_sections');
if (isset($sections) && sizeof($sections) > 0) : ?>

  <section class="get-started">
    <h2><?= CFS()->get('how_to_title'); ?></h2>

    <div class="get-started-main">
      <?php foreach ($sections as $section) { ?>

        <div class="get-started-item">
          <div class="get-started-img">
            <img src="<?= $section['icon']; ?>" alt="" />
          </div>

          <div class="get-started-text">
            <h4><?= $section['how_to_step_num']; ?></h4>
            <h3><?= $section['title']; ?></h3>
            <p><?= $section['description']; ?></p>
          </div>
        </div><!-- get-started-item -->

      <?php } ?><!-- end foreach -->
    </div><!-- get-started-main -->
  </section>

<?php endif; ?>

<section class="signup-descript">
  <h2><?= CFS()->get('sign_up_title'); ?></h2>
  <button id="enrollNow" class="btn-primary btn-large">Enroll Now</button>
</section>
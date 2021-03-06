<?php

/**
 * Template part for program details page training section.
 *
 * @package coop-radio
 */

?>

<?php
$sections = CFS()->get('training_cores');
if (isset($sections) && sizeof($sections) > 0) : ?>

  <section class="program-details-training">
    <a id="section--training" class="program-details__internal-link"></a>
    <h2><?= CFS()->get('training_title'); ?></h2>
    <p class="text-description text-container"><?= CFS()->get('training_description'); ?></p>

    <div class="training-core-main">

      <?php foreach ($sections as $section) { ?>

        <div class="training-core">
          <img class="core-img" src="<?= $section['icon']; ?>" alt="" />
          <div class="core-text">
            <h4><?= $section['core_step_num']; ?></h4>
            <h3><?= $section['title']; ?></h3>
            <p><?= $section['description']; ?></p>
          </div>
        </div>

      <?php } ?><!-- end foreach -->

    </div><!-- training-core-main -->
  </section><!-- program-details-training -->

<?php endif; ?>

<?php

/**
 * Template part for program details page requirements section.
 *
 * @package coop-radio
 */

?>

<?php
$requirements = CFS()->get('requirements');
if (isset($requirements) && sizeof($requirements) > 0) : ?>

  <section class="requirements">
    <div class="text-container">
      <h2><?= CFS()->get('requirements_title'); ?></h2>
      <p class="text-description"><?= CFS()->get('requirements_description'); ?></p>
    </div>

    
    <img class="requirement-img" src="<?= CFS()->get( 'requirements_img' ); ?>">

    
    <?php foreach ($requirements as $requirement) { ?>
      <h3><?= $requirement['title']; ?></h3>
      <p><?= $requirement['description']; ?></p>
    <?php } ?>
  </section>

<?php endif; ?>
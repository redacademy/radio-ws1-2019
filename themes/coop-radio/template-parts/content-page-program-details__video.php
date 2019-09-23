<?php
/**
 * Template part for program details page video.
 *
 * @package coop-radio
 */

?>

<section>
  <a id="section--video" class="program-details__internal-link"></a>
  <div class="text-container program-details__video-container">
    <iframe
      class="program-details__video-embed"
      width="560"
      height="315"
      src="https://www.youtube.com/embed/<?= CFS()->get( 'featured_video_id' ); ?>"
      frameborder="0"
      allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen
    ></iframe>
  </div>
</section>

<?php
/**
 * Search not found content template.
 *
 * @package coop-radio
 */
?>

<div class="search-intro">
      <p>Sorry, nothing was found</p>
    </div>
    <div class="custom-search">
      <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
        <fieldset>
          <span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
          <label class="custom-search-label">
            <input type="search" class="custom-input" placeholder="Type and hit enter..." name="s" title="Search for:" />
          </label>
        </fieldset>
      </form>
    </div>
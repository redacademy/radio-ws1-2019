<?php
/**
 * The template for displaying all pages.
 *
 * @package coop-radio
 */

get_header(); ?>

  <main>
	<div class='search-background'>
		<div class='search-intro'>
			<p>Looking for something?</p>
		</div>
		<div class='custom-search'>
			<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<fieldset>
					<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
					<label class='custom-search-label'>
						<input type="search" class="custom-input" placeholder="Type and hit enter..." value="<?php the_search_query(); ?>" name="s" title="Search for:" />
					</label>
				</fieldset>
			</form>
		</div>
	</div>
  </main>

<?php get_footer(); ?>

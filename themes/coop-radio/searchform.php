<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<button type='button' class="search-toggle" aria-hidden="true">
			<div class='
				<?php global $template;
					if ( basename( $template ) === 'page-artist-library.php' || basename($template) === 'page-contact-us.php') {
						echo 'search-icon-white';
					} else {
						echo 'search-icon-black';
					}
				?>
				'>search</div>
		</button>
		<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		<label class='search-label'>
			<input type="search" class="search-field" placeholder="Type and hit enter..." value="<?php the_search_query(); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>
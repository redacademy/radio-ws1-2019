<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package coop-radio
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>

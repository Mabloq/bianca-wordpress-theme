<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Biancas_theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>


	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<a href="http://www.runderstandme.com/category/workouts/">
		<div class="sidebar-cat-container">
			<img class="sidebar-cat-img"src="http://www.runderstandme.com/wp-content/uploads/2017/06/Workouts100.png" alt="">
			<p class="sidebar-cat-title">Workouts</p>
			<p class="sidebar-cat-desc">Get the workouts you need to pr in your next race</p>
		</div>
	</a>
	<a href="http://www.runderstandme.com/category/race-journal/">
		<div class="sidebar-cat-container">
			<img class="sidebar-cat-img" src="http://www.runderstandme.com/wp-content/uploads/2017/06/Runnning-Man100.png" alt="">
			<p class="sidebar-cat-title">Race Journal</p>
			<p class="sidebar-cat-desc">The scoop on the race</p>
		</div>
	</a>
	<a href="http://www.runderstandme.com/category/gear-reviews/">
		<div class="sidebar-cat-container">
			<img class="sidebar-cat-img" src="http://www.runderstandme.com/wp-content/uploads/2017/06/GearReview100.png" alt="">
			<p class="sidebar-cat-title">Gear Review</p>
			<p class="sidebar-cat-desc">The gear that you want to have.</p>
		</div>
	</a>

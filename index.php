<?php
/**
 * The template file
 *
 * This is the most generic template file in a WordPress theme.
 *
 *
 * @package WordPress
 */

get_header(); ?>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-2">
		<?php get_sidebar('left'); ?>
	</div>
	<div class="col-md-7">
		<?php get_sidebar('right'); ?>
	</div>
</div>

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
		<?php get_sidebar('bottom'); ?>
	</div>
</div>

<div class="row">
	<div style="margin: 10px">
		<?php get_sidebar('last'); ?>
	</div>
</div>

<?php 
get_footer();

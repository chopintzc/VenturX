<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 */
?>

<?php if ( is_active_sidebar( 'widget-area-sidebar-2' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'widget-area-sidebar-2' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

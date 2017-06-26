<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 */
?>

<?php if ( is_active_sidebar( 'widget-area-sidebar-1' )  ) : ?>
	<aside id="primary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'widget-area-sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

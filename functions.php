
<?php
/**
 * Sidebars
 *
 * @return void
 */
function jc_sandbox_sidebar_init() {

    /* Standard Sidebar */
    register_sidebar( array(
        'name'          => __( 'JC Sidebar 1', 'interview' ),
        'id'            => 'widget-area-sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
	
	register_sidebar( array(
        'name'          => __( 'JC Sidebar 2', 'interview' ),
        'id'            => 'widget-area-sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
	
	register_sidebar( array(
        'name'          => __( 'JC Sidebar 3', 'interview' ),
        'id'            => 'widget-area-sidebar-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
	
	register_sidebar( array(
        'name'          => __( 'JC Sidebar 4', 'interview' ),
        'id'            => 'widget-area-sidebar-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

	register_widget( 'JC_Widget_Four_Images' );
	
	register_widget( 'JC_Widget_Profile' );
}
add_action( 'widgets_init', 'jc_sandbox_sidebar_init' );

function jc_load_scripts() {
    wp_enqueue_style( 'jc-style-name', get_stylesheet_uri() );
	wp_enqueue_style ('junctioncreative-boostrapstyle-337', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_script( 'junctioncreative-bootstrap-JS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), false);
    wp_enqueue_script( 'jc-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', false, '1.12.4');
}
add_action( 'wp_enqueue_scripts', 'jc_load_scripts' );

require_once( get_stylesheet_directory() . '/inc/JC_Widget_Four_Images.php');

require_once( get_stylesheet_directory() . '/inc/JC_Widget_Profile.php');
?>

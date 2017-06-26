<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class JC_Widget_Four_Images extends WC_Widget {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->widget_cssclass    = '';
		$this->widget_description = __( 'Adjust to multiple columns according to screen size', 'jcsandbox' );
		$this->widget_id          = 'widget_four_images';
		$this->widget_name        = __( 'Widget_Four_Images', 'interview' );
		$this->settings           = array(
             'title'   	=> 'text',
             'image1'   => 'text',
             'image2'	=> 'text',
             'image3'	=> 'text',
             'image4'	=> 'text',
         );
		
		parent::__construct();
	}
	
	/**
	 * Output widget.
	 *
	 * @see WP_Widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		$pretitle = "How is ";
		$posttitle = " doing today? ";
		$image = get_template_directory_uri() . "/images/pen.png";
		$trail = "Check dashboard";
		$title = $instance['title'];
		$image1 = get_template_directory_uri() . $instance['image1'];
		$image2 = get_template_directory_uri() . $instance['image2'];
		$image3 = get_template_directory_uri() . $instance['image3'];
		$image4 = get_template_directory_uri() . $instance['image4'];
		
		$output1 = $pretitle . "<Strong>" . $title . "</Strong>";
		$output2 = "<span class='notation'>" . $trail . "</span>";
		
		echo $args['before_widget'];
?>
		<div row>
			<h3 class="h3-GrayColor center">
				<?php echo $output1?>
				<img class="pen" src="<?php echo $image; ?>">
				<?php echo $posttitle?>
				<?php echo $output2?>
			</h>
		</div>
		<div class="row">
			<div class="col-md-3">
				<img id="image1" class="nolap" src="<?php echo $image1; ?>">
			</div>
			<div class="col-md-3">
				<img id="image2" class="nolap" src="<?php echo $image2; ?>">
			</div>
			<div class="col-md-3">
				<img id="image3" class="nolap" src="<?php echo $image3; ?>">
			</div>
			<div class="col-md-3">
				<img id="image4" class="nolap" src="<?php echo $image4; ?>">
			</div>
		</div>
<?php
		echo $args['after_widget'];
	}
	
	/**
	 * Handles updating the settings for the current Recent Posts widget instance.
	 *
	 * @since 2.8.0
	 * @access public
	 *
	 * @param array $new_instance New settings for this instance as input by the user via
	 *                            WP_Widget::form().
	 * @param array $old_instance Old settings for this instance.
	 * @return array Updated settings to save.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['image1'] = sanitize_text_field( $new_instance['image1'] );
		$instance['image2'] = sanitize_text_field( $new_instance['image2'] );
		$instance['image3'] = sanitize_text_field( $new_instance['image3'] );
		$instance['image4'] = sanitize_text_field( $new_instance['image4'] );
		return $instance;
	}
	
	/**
	 * Outputs the settings form for the Recent Posts widget.
	 *
	 * @since 2.8.0
	 * @access public
	 *
	 * @param array $instance Current settings.
	 */
	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$image1     = isset( $instance['image1'] ) ? esc_attr( $instance['image1'] ) : '';
		$image2     = isset( $instance['image2'] ) ? esc_attr( $instance['image2'] ) : '';
		$image3     = isset( $instance['image3'] ) ? esc_attr( $instance['image3'] ) : '';
		$image4     = isset( $instance['image4'] ) ? esc_attr( $instance['image4'] ) : '';
?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'image1' ); ?>"><?php _e( 'image1:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'image1' ); ?>" name="<?php echo $this->get_field_name( 'image1' ); ?>" type="text" value="<?php echo $image1; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'image2' ); ?>"><?php _e( 'image2:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'image2' ); ?>" name="<?php echo $this->get_field_name( 'image2' ); ?>" type="text" value="<?php echo $image2; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'image3' ); ?>"><?php _e( 'image3:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'image3' ); ?>" name="<?php echo $this->get_field_name( 'image3' ); ?>" type="text" value="<?php echo $image3; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'image4' ); ?>"><?php _e( 'image4:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'image4' ); ?>" name="<?php echo $this->get_field_name( 'image4' ); ?>" type="text" value="<?php echo $image4; ?>" /></p>
<?php	
	}
}

?>
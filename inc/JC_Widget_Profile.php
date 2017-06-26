<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


class JC_Widget_Profile extends WC_Widget {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->widget_cssclass    = '';
		$this->widget_description = __( 'Add custom profile', 'interview' );
		$this->widget_id          = 'widget_profile';
		$this->widget_name        = __( 'Widget_Profile', 'interview' );
		$this->settings           = array(
             'title'   	=> 'text',
             'button'   => 'text',
             'comment1'	=> 'text',
             'comment2'	=> 'text',
             'comment3'	=> 'text',
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
		$title = $instance['title'];
		$button = $instance['button'];
		$comment1 = $instance['comment1'];
		$comment2 = $instance['comment2'];
		$comment3 = $instance['comment3'];
		
		echo $args['before_widget'];
?>
		<div style="padding: 10px; margin: 0px; border: 2px solid black;">
			<div class="row">
				<div class="col-md-2">
					<p><strong>Market</strong></p>
				</div>
				<div class="col-md-6">
					<p><?php echo $comment1 ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<p><strong>Pain</strong></p>
				</div>
				<div class="col-md-6">
					<p><?php echo $comment2 ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<p><strong>Benefit</strong></p>
				</div>
				<div class="col-md-5">
					<p><?php echo $comment3 ?></p>
				</div>
				<div class="col-md-5">
					<button type="button"><?php echo $button ?></button>
				</div>
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
		$instance['button'] = sanitize_text_field( $new_instance['button'] );
		$instance['comment1'] = sanitize_text_field( $new_instance['comment1'] );
		$instance['comment2'] = sanitize_text_field( $new_instance['comment2'] );
		$instance['comment3'] = sanitize_text_field( $new_instance['comment3'] );
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
		$button     = isset( $instance['button'] ) ? esc_attr( $instance['button'] ) : '';
		$comment1     = isset( $instance['comment1'] ) ? esc_attr( $instance['comment1'] ) : '';
		$comment2     = isset( $instance['comment2'] ) ? esc_attr( $instance['comment2'] ) : '';
		$comment3     = isset( $instance['comment3'] ) ? esc_attr( $instance['comment3'] ) : '';
?>
		<p><label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'title:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'button' ); ?>"><?php _e( 'button:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'button' ); ?>" name="<?php echo $this->get_field_name( 'button' ); ?>" type="text" value="<?php echo $button; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'comment1' ); ?>"><?php _e( 'comment1:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'comment1' ); ?>" name="<?php echo $this->get_field_name( 'comment1' ); ?>" type="text" value="<?php echo $comment1; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'comment2' ); ?>"><?php _e( 'comment2:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'comment2' ); ?>" name="<?php echo $this->get_field_name( 'comment2' ); ?>" type="text" value="<?php echo $comment2; ?>" /></p>
		
		<p><label for="<?php echo $this->get_field_id( 'comment3' ); ?>"><?php _e( 'comment3:' ); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'comment3' ); ?>" name="<?php echo $this->get_field_name( 'comment3' ); ?>" type="text" value="<?php echo $comment3; ?>" /></p>
<?php	
	}
}

?>
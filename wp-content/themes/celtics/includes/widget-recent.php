<?php 
/**
* Recent Posts Widget
*
* @package Celtics Brasil
*
*/
?>

<?php 

// Creating the widget
class cb_recent_posts extends WP_Widget {

	function __construct() {
	parent::__construct(
	// BASE ID of the widget
	'cb_recent_posts',

	//Widget name will appear in UI
	__('Últimas Notícias','cb_recent_posts_domain'),


	//Widget description
	array('description' => __('Exibe as últimas notícias', 'cb_recent_posts_domain'), )
	);
	}

	// Creating widget front-end
	// This is where the action happens
	public function widget( $args, $instance ) {
	$title = apply_filters( 'widget_title', $instance['title'] );
	// before and after widget arguments are defined by themes
	echo $args['before_widget'];
	if ( ! empty( $title ) )
	echo $args['before_title'] . $title . $args['after_title'];

	// This is where you run the code and display the output
	echo __( 'Hello World',

	'cb_recent_posts_domain' );
	echo $args['after_widget'];
}

	// Widget Backend 
	public function form( $instance ) {
	if ( isset( $instance[ 'title' ] ) ) {
	$title = $instance[ 'title' ];
	}
	else {
	$title = __( 'New title', 'cb_recent_posts_domain' );
	}

	// Widget admin form
	?>
	<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
	<?php 
	}

	// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	return $instance;
	}
	} // Class wpb_widget ends here

	// Register and load the widget
	function cb_load_widget() {
		register_widget( 'cb_recent_posts' );
	}
	add_action( 'widgets_init', 'cb_load_widget' );

?>
<?php 
/**
* Recent Posts Widget
*
* @package Celtics Brasil
*
*/

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
		$number = apply_filters( 'widget_number', $instance['number'] );
	// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

		$posts_args = array (
			'post_type' => 'post',
			'posts_per_page' => $number
			);

		$posts = new WP_Query($posts_args); ?>
		

        <div class="posts-list">
            <ul>

		<?php 
		if ($posts -> have_posts()) : 
			while($posts -> have_posts()) : $posts -> the_post(); ?>
				<li>
					<div class="mini-thumb">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumb', array('class' => 'img-responsive')); ?></a>
					</div>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</li>

	   <?php 
	   endwhile;
	endif; 
    ?>
    
        </ul>
    </div>
        
    <?php


	echo $args['after_widget'];
}

	// Widget Backend 
public function form( $instance ) {

	$title = isset( $instance[ 'title' ]) ? $instance[ 'title' ] : __( 'Últimas Notícias', 'cb_recent_posts_domain' );
	$number = isset( $instance[ 'number' ]) ? $instance[ 'number' ] : 3;


	// Widget admin form
	?>
	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Número de Posts:' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
	</p>

	<?php 
}

	// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
	$instance = array();
	$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
	$instance['number'] = ( ! empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';
	return $instance;

}
	} // Class wpb_widget ends here

	// Register and load the widget
	function cb_load_widget() {
		register_widget( 'cb_recent_posts' );
	}
	add_action( 'widgets_init', 'cb_load_widget' );
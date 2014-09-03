<?php
// Creating the widget 
class social_widget extends WP_Widget {

function __construct() {
    parent::__construct(
        // Base ID of your widget
        'social_widget', 
        
        // Widget name will appear in UI
        __('Links sociais', 'social_widget_domain'), 
    
        // Widget description
        array( 'description' => __( 'Links sociais para o menu principal', 'social_widget_domain' ), ));
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget( $args, $instance ) {
        $facebook = apply_filters( 'widget_facebook', $instance['facebook'] );
        $email = apply_filters( 'widget_email', $instance['email'] );
        // before and after widget arguments are defined by themes
        echo '<ul class="social">';
        if ( ! empty( $facebook ) )
            echo '<li class="sprit sprit-facebook"><a href="'.$facebook.'" target="_blank" title="Facebook">fecebook</a></li>';
        if ( ! empty( $email ) )
            echo '<li class="sprit sprit-email"><a href="'.$email.'" target="_blank" title="Email">fecebook</a></li>';
        
        
        echo '</ul>';
    }
            
    // Widget Backend 
    public function form( $instance ) {
        if ( isset( $instance[ 'facebook' ] ) ) 
            $facebook = $instance[ 'facebook' ];
        else 
            $facebook = __( '', 'social_widget_domain' );
        if ( isset( $instance[ 'email' ] ) ) 
            $email = $instance[ 'email' ];
        else 
            $email = __( '', 'social_widget_domain' );
    // Widget admin form
    ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'facebook' ); ?>"><?php _e( 'Facebook:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'facebook' ); ?>" name="<?php echo $this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'email' ); ?>"><?php _e( 'Email:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'email' ); ?>" name="<?php echo $this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        </p>
    <?php 
    }
        
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
        $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
        return $instance;
    }
} // Class social_widget ends here

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'social_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
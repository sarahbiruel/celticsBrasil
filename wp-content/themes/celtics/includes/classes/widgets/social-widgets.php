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
        array( 'description' => __( 'Links sociais', 'social_widget_domain' ), ));
    }

    // Creating widget front-end
    // This is where the action happens
    public function widget( $args, $instance ) {
        $facebook_page = apply_filters( 'widget_facebook_page', $instance['facebook-page'] );
        $facebook_group = apply_filters( 'widget_facebook_group', $instance['facebook-group'] );
        $twitter = apply_filters( 'widget_twitter', $instance['twitter'] );
        $youtube = apply_filters( 'widget_youtube', $instance['youtube'] );
        $g_plus = apply_filters( 'widget_g_plus', $instance['g-plus'] );
        $instagram = apply_filters( 'widget_instagram', $instance['instagram'] );
        // before and after widget arguments are defined by themes
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $args['before_widget'];
        echo ( ! empty( $title ) ) ? $args['before_title'] . $title . $args['after_title'] : $args['before_title'] . 'Redes Sociais' . $args['after_title'];
        echo '<ul class="social">';
        if ( ! empty( $facebook_page ) )
            echo '<li><a href="'.$facebook_page.'" target="_blank" title="Facebook Fanpage"><i class="icon sprite-facebook-white"></i><span><strong>Facebook Fanpage</strong><br>'. strReplaceBegin($facebook_page, 'http://') .'</span></a></li>';
        if ( ! empty( $facebook_group ) )
            echo '<li><a href="'.$facebook_group.'" target="_blank" title="Facebook Grupo"><i class="icon sprite-facebook-white"></i><span><strong>Facebook Grupo</strong><br>'. strReplaceBegin($facebook_group, 'http://') .'</span></a></li>';
        if ( ! empty( $twitter ) )
            echo '<li><a href="'.$twitter.'" target="_blank" title="Twitter"><i class="icon sprite-twitter-white"></i><span><strong>Twitter</strong><br>'. strReplaceBegin($twitter, 'http://') .'</span></a></li>';
        if ( ! empty( $youtube ) )
            echo '<li><a href="'.$youtube.'" target="_blank" title="Canal no Youtube"><i class="icon sprite-youtube-white"></i><span><strong>Canal no Youtube</strong><br>'. strReplaceBegin($youtube, 'http://') .'</span></a></li>';
        if ( ! empty( $g_plus ) )
            echo '<li><a href="'.$g_plus.'" target="_blank" title="Google Plus"><i class="icon sprite-gplus-white"></i><span><strong>Google Plus</strong><br>'. strReplaceBegin($g_plus, 'http://') .'</span></a></li>';
        if ( ! empty( $instagram ) )
            echo '<li><a href="'.$instagram.'" target="_blank" title="Instagram"><i class="icon sprite-instagram-white"></i><span><strong>Instagram</strong><br>'. strReplaceBegin($instagram, 'http://') .'</span></a></li>';
        
        
        echo '</ul>';
        echo $args['after_widget'];
    }
            
    // Widget Backend 
    public function form( $instance ) {
        // Facebook Page
        $facebook_page = isset( $instance[ 'facebook-page' ] ) ? $instance[ 'facebook-page' ] : __( '', 'social_widget_domain' );
        // Facebook group
        $facebook_group = isset( $instance[ 'facebook-group' ] ) ? $instance[ 'facebook-group' ] : __( '', 'social_widget_domain' );
        // Twitter
        $twitter = isset( $instance[ 'twitter' ] ) ? $instance[ 'twitter' ] : __( '', 'social_widget_domain' );
        // Youtube
        $youtube = isset( $instance[ 'youtube' ] ) ? $instance[ 'youtube' ] : __( '', 'social_widget_domain' );
        // Google+
        $g_plus = isset( $instance[ 'g-plus' ] ) ? $instance[ 'g-plus' ] : __( '', 'social_widget_domain' );
        // Instagram
        $instagram = isset( $instance[ 'instagram' ] ) ? $instance[ 'instagram' ] : __( '', 'social_widget_domain' );
    
    // Widget admin form
    ?>
        <p>
            <label for="<?php echo $this -> get_field_id('facebook-page'); ?>"><?php _e('Facebook Page:'); ?></label>
            <br /> 
            <input class="widefat" id="<?php echo $this -> get_field_id('facebook-page'); ?>" name="<?php echo $this -> get_field_name('facebook-page'); ?>" type="text" value="<?php echo esc_attr($facebook_page); ?>" />
        </p>
        <p>
            <label for="<?php echo $this -> get_field_id('facebook-group'); ?>"><?php _e('Facebook Grupo:'); ?></label> 
            <br /> 
            <input class="widefat" id="<?php echo $this -> get_field_id('facebook-group'); ?>" name="<?php echo $this -> get_field_name('facebook-group'); ?>" type="text" value="<?php echo esc_attr($facebook_group); ?>" />
        </p>
        <p>
            <label for="<?php echo $this -> get_field_id('twitter'); ?>"><?php _e('Twitter:'); ?></label> 
            <br /> 
            <input class="widefat" id="<?php echo $this -> get_field_id('twitter'); ?>" name="<?php echo $this -> get_field_name('twitter'); ?>" type="text" value="<?php echo esc_attr($twitter); ?>" />
        </p>
        <p>
            <label for="<?php echo $this -> get_field_id('youtube'); ?>"><?php _e('Canal no Youtube:'); ?></label> 
            <br /> 
            <input class="widefat" id="<?php echo $this -> get_field_id('youtube'); ?>" name="<?php echo $this -> get_field_name('youtube'); ?>" type="text" value="<?php echo esc_attr($youtube); ?>" />
        </p>
        <p>
            <label for="<?php echo $this -> get_field_id('g-plus'); ?>"><?php _e('Google Plus:'); ?></label> 
            <br /> 
            <input class="widefat" id="<?php echo $this -> get_field_id('g-plus'); ?>" name="<?php echo $this -> get_field_name('g-plus'); ?>" type="text" value="<?php echo esc_attr($g_plus); ?>" />
        </p>
        <p>
            <label for="<?php echo $this -> get_field_id('instagram'); ?>"><?php _e('Instagram:'); ?></label> 
            <br /> 
            <input class="widefat" id="<?php echo $this -> get_field_id('instagram'); ?>" name="<?php echo $this -> get_field_name('instagram'); ?>" type="text" value="<?php echo esc_attr($instagram); ?>" />
        </p>
    <?php
            }

    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['facebook-page'] = ( ! empty( $new_instance['facebook-page'] ) ) ? strip_tags( $new_instance['facebook-page'] ) : '';
        $instance['facebook-group'] = ( ! empty( $new_instance['facebook-group'] ) ) ? strip_tags( $new_instance['facebook-group'] ) : '';
        $instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
        $instance['youtube'] = ( ! empty( $new_instance['youtube'] ) ) ? strip_tags( $new_instance['youtube'] ) : '';
        $instance['g-plus'] = ( ! empty( $new_instance['g-plus'] ) ) ? strip_tags( $new_instance['g-plus'] ) : '';
        $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
        
        return $instance;
    }
} // Class social_widget ends here

 // Register and load the widget
function wpb_load_widget() {
    register_widget('social_widget');
}

add_action('widgets_init', 'wpb_load_widget');
        
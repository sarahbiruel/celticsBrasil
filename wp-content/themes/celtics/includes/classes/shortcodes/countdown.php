<?php
/**
 * This class is a modify for the plugin SportsPress
 */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// check for plugin using plugin name
If (is_plugin_active('sportspress/sportspress.php')) {

    class SP_Shortcode_Countdown {
    
        /**
         * Output the countdown shortcode.
         *
         * @param array $atts
         */
        public static function output( $atts ) {
    
            if ( ! isset( $atts['id'] ) && isset( $atts[0] ) && is_numeric( $atts[0] ) )
                $atts['id'] = $atts[0];
    
            sp_get_template( '/includes/templates/countdown.php', $atts, get_stylesheet_directory_uri() );
        }
    }
}
<?php
/**
 * Declare sportspress support
 */
 
add_theme_support( 'sportspress' );


/**
 * Add custom style for login page.
 *
 * @since 0.1.0
 */

function custom_login_css() {

    echo '<link rel="stylesheet" type="text/css" href = "' . get_stylesheet_directory_uri() . '/assets/css/login.min.css"/>';

}

add_action('login_head', 'custom_login_css');

add_action('login_head', 'untame_fadein', 30);

function untame_fadein() {

    echo '<script type="text/javascript">// <![CDATA[
 
jQuery(document).ready(function() { jQuery("#login h1 a").attr("title","Desenvolvido por Mamweb"); jQuery("#login h1 a,#loginform,#nav,#backtoblog").css("display", "none");          jQuery("#login h1 a,#loginform,#nav,#backtoblog").fadeIn(1500);
 
});
 
// ]]></script>';

}

add_filter('login_headerurl', 'custom_login_header_url');

function custom_login_header_url($url) {

    return 'http://mamweb.com.br/';

}

/**
 * Replace footer text
 *
 * @since 0.1.0
 */
function remove_footer_admin () {
    echo "Obrigado por escolher a <a href='http://mamweb.com.br' target='_blank'>mamweb</a>";
} 

add_filter('admin_footer_text', 'remove_footer_admin');



/**
 * Remove unuseds admin menus
 *
 * @since 0.1.0
 */
function wps_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
    $wp_admin_bar->remove_menu('about');
    $wp_admin_bar->remove_menu('wporg');
    $wp_admin_bar->remove_menu('documentation');
    $wp_admin_bar->remove_menu('support-forums');
    $wp_admin_bar->remove_menu('feedback');
    $wp_admin_bar->remove_menu('view-site');
}
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );


/**
 * Replace default WordPress jQuery script with Google Library
 *
 * @since 0.1.0
 */
function modify_jquery() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', false, '1.11.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');



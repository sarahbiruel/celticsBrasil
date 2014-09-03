<?php
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
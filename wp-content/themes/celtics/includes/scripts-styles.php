<?php
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



/**
 * Enqueue scripts and styles for front-end.
 *
 * @since 0.1.0
 */

function scripts_styles() {
   $postfix = (defined('SCRIPT_DEBUG') && true === SCRIPT_DEBUG) ? '' : '.min';

    
    wp_enqueue_script('celtics_brasil', get_template_directory_uri() . "/assets/js/celtics_brasil{$postfix}.js", array('jquery'), _VERSION, true);

    wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/celtics_brasil{$postfix}.css", array(), _VERSION);
}

add_action('wp_enqueue_scripts', 'scripts_styles');

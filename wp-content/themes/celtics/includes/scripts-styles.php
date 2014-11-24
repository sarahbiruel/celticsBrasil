<?php



/**
 * Enqueue scripts and styles for front-end.
 *
 * @since 0.1.0
 */

function scripts_styles() {
   $postfix = (defined('SCRIPT_DEBUG') && true === SCRIPT_DEBUG) ? '' : '.min';
   $postfix = '';
    
    wp_enqueue_script('celtics_brasil', get_template_directory_uri() . "/assets/js/celtics_brasil{$postfix}.js", array('jquery'), _VERSION, true);
    
    
    wp_enqueue_style('exo_font', "http://fonts.googleapis.com/css?family=Exo:400,600,700", array(), _VERSION);
    wp_enqueue_style('style', get_template_directory_uri() . "/assets/css/celtics_brasil{$postfix}.css", array(), _VERSION);
}

add_action('wp_enqueue_scripts', 'scripts_styles');

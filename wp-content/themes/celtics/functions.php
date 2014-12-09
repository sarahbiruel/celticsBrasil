<?php
/**
 * Celtics Brasil functions and definitions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * @package Celtics Brasil
 * @since 0.1.0
 */
 
 // Useful global constants
define( '_VERSION', '0.1.0' );

add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );

include_once 'includes/wordpress-resets.php';
include_once 'includes/scripts-styles.php';
include_once 'includes/menu-support.php';
include_once 'includes/image-support.php';
include_once 'includes/custom-posts.php';
include_once 'includes/widgets-area.php';
include_once 'includes/custom-comment.php';
include_once 'includes/classes/metabox.class.php';
include_once 'includes/classes/widgets/widget-recent-posts.php';
include_once 'includes/classes/shortcodes/countdown.php';
include_once 'sportspress/functions.php';

/* Custom theme option by: Diego Incerti */
require_once 'includes/admin/index.php';

//*-----------------------------------------------------------------------------------*/
/*  Other functions
/*------------------------------------------------------------------------------------*/
// Excerpt
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt) >= $limit) {
array_pop($excerpt);
$excerpt = implode(" ", $excerpt) . ' (...)';
} else {
$excerpt = implode(" ", $excerpt);
}
$excerpt = preg_replace('`\[[^\]]*\]`', '', $excerpt);
return $excerpt;
}

// Replace string from de begin
function strReplaceBegin($str, $prefix){
    if (substr($str, 0, strlen($prefix)) == $prefix) {
        $str = substr($str, strlen($prefix));
    }
    return $str;
}




/*
 * Add action based on get_the_term_list()
 * to echo the term without link
 * 
 */
add_action('get_the_without_link', 'get_the_without_link');
function get_the_without_link( $id, $taxonomy) {
    $terms = get_the_terms( $id, $taxonomy );

    if ( is_wp_error( $terms ) )
        return $terms;

    if ( empty( $terms ) )
        return false;

    foreach ( $terms as $term ) {
        $link = get_term_link( $term, $taxonomy );
        if ( is_wp_error( $link ) )
            return $link;
        $term_links[] = $term->name;
    }
    
    $term_links = apply_filters( "term_links-$taxonomy", $term_links );
    
    echo $before . join( $sep, $term_links ) . $after;
}

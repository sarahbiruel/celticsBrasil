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


include_once 'includes/wordpress-resets.php';
include_once 'includes/scripts-styles.php';
include_once 'includes/menu-support.php';
include_once 'includes/image-support.php';
include_once 'includes/custom-posts.php';
include_once 'includes/classes/metabox.class.php';
include_once 'includes/metabox.php';
include_once 'includes/widgets-area.php';

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
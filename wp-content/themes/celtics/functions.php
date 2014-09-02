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
 
 /**
  * Set up theme defaults and register supported WordPress features.
  *
  * @uses load_theme_textdomain() For translation/localization support.
  *
  * @since 0.1.0
  */
 function _setup() {
	/**
	 * Makes Celtics Brasil available for translation.
	 *
	 * Translations can be added to the /lang directory.
	 * If you're building a theme based on Celtics Brasil, use a find and replace
	 * to change '' to the name of your theme in all template files.
	 */
	load_theme_textdomain( '', get_template_directory() . '/languages' );
 }
 add_action( 'after_setup_theme', '_setup' );
 
 /**
  * Enqueue scripts and styles for front-end.
  *
  * @since 0.1.0
  */
 function _scripts_styles() {
	$postfix = ( defined( 'SCRIPT_DEBUG' ) && true === SCRIPT_DEBUG ) ? '' : '.min';

	wp_enqueue_script( '', get_template_directory_uri() . "/assets/js/celtics_brasil{$postfix}.js", array(), _VERSION, true );
		
	wp_enqueue_style( '', get_template_directory_uri() . "/assets/css/celtics_brasil{$postfix}.css", array(), _VERSION );
 }
 add_action( 'wp_enqueue_scripts', '_scripts_styles' );
 
 /**
  * Add humans.txt to the <head> element.
  */
 function _header_meta() {
	$humans = '<link type="text/plain" rel="author" href="' . get_template_directory_uri() . '/humans.txt" />';
	
	echo apply_filters( '_humans', $humans );
 }
 add_action( 'wp_head', '_header_meta' );
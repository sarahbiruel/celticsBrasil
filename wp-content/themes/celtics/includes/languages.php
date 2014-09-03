<?php
/**
 * Set up theme defaults and register supported WordPress features.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 *
 * @since 0.1.0
 */
function setup() {
    /**
     * Makes Leticia Campanela - Arquiteta available for translation.
     *
     * Translations can be added to the /lang directory.
     * If you're building a theme based on Leticia Campanela - Arquiteta, use a find and replace
     * to change '' to the name of your theme in all template files.
     */
    load_theme_textdomain('', get_template_directory() . '/languages');
}

add_action('after_setup_theme', 'setup');
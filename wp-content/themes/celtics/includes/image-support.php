<?php
/*
 * Add post thumbnail support 
 */
add_theme_support( 'post-thumbnails', array( 'post', 'page', 'projetos' ) );


/*-----------------------------------------------------------------------------------*/
/*  Adicionar suporte para imagens
 /*-----------------------------------------------------------------------------------*/
if (function_exists('add_theme_support'))
    add_theme_support('post-thumbnails');

if (function_exists('add_image_size')) {
    add_image_size('full-size', 9999, 9999, false);
    add_image_size('slide', 1920, 850, true);
    add_image_size('thumb', 150, 100, true);
}
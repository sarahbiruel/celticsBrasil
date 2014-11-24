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
    add_image_size('featured', 1050, 450, true);
    add_image_size('news', 720, 309, true);
    add_image_size('thumb', 150, 64, true);
    add_image_size('team', 470, 550, false);
    add_image_size('team-thumb', 35, 35, true);
}
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Widget página inicial',
        'id' => 'home-widget',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',    
        'before_title' => '<h2 class="title"><span>',
        'after_title' => '</span></h2>',
    ) );
    
    register_sidebar( array(
        'name' => 'Rodapé Widget - Primeira Área',
        'id' => 'footer-widget-first',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',    
        'before_title' => '<h2 class="title"><span>',
        'after_title' => '</span></h2>',
    ) );
    
    register_sidebar( array(
        'name' => 'Rodapé Widget - Segunda Área',
        'id' => 'footer-widget-second',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',    
        'before_title' => '<h2 class="title"><span>',
        'after_title' => '</span></h2>',
    ) );
    
    register_sidebar( array(
        'name' => 'Rodapé Widget - Terceira Área',
        'id' => 'footer-widget-third',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',    
        'before_title' => '<h2 class="title"><span>',
        'after_title' => '</span></h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


@include_once 'classes/widgets/social-widgets.php';

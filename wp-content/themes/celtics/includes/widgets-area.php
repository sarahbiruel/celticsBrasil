<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Área esqueda da página de contato',
        'id' => 'contato-left',
        'before_title' => '<h2 class="title">',
        'after_title' => '</h2>',
    ) );
    
    register_sidebar( array(
        'name' => 'Área final da página de contato',
        'id' => 'contato-bottom',
        'before_title' => '<h2 class="title" style="display: none;">',
        'after_title' => '</h2>',
    ) );
    
    register_sidebar( array(
        'name' => 'Área direita do menu',
        'id' => 'menu-right',
        'before_title' => '',
        'after_title' => '',
    ) );
    
    register_sidebar( array(
        'name' => 'Rodapé',
        'id' => 'footer',
        'before_title' => '',
        'after_title' => '',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


@include_once 'classes/widgets/social-widgets.php';

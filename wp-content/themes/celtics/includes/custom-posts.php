<?php
/*
 * Custom posts
 */
function codex_custom_init() {  
        
    //Projetos
    $projetos_labels = array(
        'name'               => 'Projetos',
        'singular_name'      => 'Projeto',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo',
        'edit_item'          => 'Editar',
        'new_item'           => 'Novo',
        'all_items'          => 'Todos',
        'view_item'          => 'Ver',
        'search_items'       => 'Pesquisar',
        'not_found'          => 'Não encontrado',
        'not_found_in_trash' => 'Não encontrado',
        'parent_item_colon'  => '',
        'menu_name'          => 'Projetos',
    );
      
    $projetos = array(
        'labels'             => $projetos_labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projetos' ),
        'capability_type'    => 'post',
        'supports'           => array( 'title', 'editor', 'thumbnail'),
        'taxonomies'         => array('post_tag'),
        'menu_icon'          => 'dashicons-admin-home'
    );
    
    register_post_type( 'projetos', $projetos );
    
    
    //Áreas de Atuação
    $atuacao_labels = array(
        'name'               => 'Áreas de Atuação',
        'singular_name'      => 'Área de Atuação',
        'add_new'            => 'Adicionar novo',
        'add_new_item'       => 'Adicionar novo',
        'edit_item'          => 'Editar',
        'new_item'           => 'Novo',
        'all_items'          => 'Todos',
        'view_item'          => 'Ver',
        'search_items'       => 'Pesquisar',
        'not_found'          => 'Não encontrado',
        'not_found_in_trash' => 'Não encontrado',
        'parent_item_colon'  => '',
        'menu_name'          => 'Áreas de Atuação',
    );
      
    $atuacao = array(
        'labels'             => $atuacao_labels,
        'public'             => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'atuacao' ),
        'capability_type'    => 'post',
        'supports'           => array( 'title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-star-filled'
    );
    
    register_post_type( 'atuacao', $atuacao );
}
//add_action( 'init', 'codex_custom_init' );
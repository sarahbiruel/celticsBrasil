<?php
/*
  Here's a couple of metaboxes that I've recently created using this system
*/
$subroles = redrokk_metabox_class::getInstance('subroles', array(
    'title'         => 'Detalhes do Projeto',
    'description'   => "As an optional feature, you have a complete api at your disposal which will allow you the ability to offer and manage member posts. In addition to these settings, you may need to create the associated pages for accepting posts from your frontend.",
    '_object_types' => 'projetos',
    'priority'      => 'high',
    '_fields'       => array(
            array(
                'name'  => 'Status do projeto',
                'id'    => 'status_projeto',
                'type'  => 'text',
                'desc'  => "<br/>Ex: Projeto, Concluido, Finalizado",
                'class' => 'regular-text',
            ),
            array(
                'name'  => 'Área Total',
                'id'    => 'area_total_projeto',
                'type'  => 'text',
                'desc'  => "<br/>Ex: 1.000 m²",
                'class' => 'regular-text',
            ),
            array(
                'name'  => 'Área Construida',
                'id'    => 'area_construida_projeto',
                'type'  => 'text',
                'desc'  => "<br/>Ex: 400 m²",
                'class' => 'regular-text',
            ),
            array(
                'name'  => 'Suítes',
                'id'    => 'suites_projeto',
                'type'  => 'text',
                'desc'  => "<br/>Ex: 4 suítes",
                'class' => 'regular-text',
            ),
            array(
                'name'  => 'Piscina',
                'id'    => 'piscina_projeto',
                'type'  => 'text',
                'desc'  => "<br/>Ex: 33 m², 2 piscinas, hidro, etc",
                'class' => 'regular-text',
            ),
        )
    ));
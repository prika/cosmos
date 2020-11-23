<?php 

    require_once TEMPLATEPATH . '/api/api-vue.php';

    function create_vue_post() {
        register_post_type( 'testando' ,
            array(
                'labels' => array (
                    'titles' => 'Vue',
                    'descriptionss' => 'Cenas'
                ),
                'public' => true,
                'has_archive' => true,
        ));
    }

    add_action('init', 'create_vue_post');
?>
<?php 

function api_get_vue() {
    $posts = array('teste' => 'Deu');

    return rest_ensure_response( $posts );
}

function api_register_vue_routes() {
    register_rest_route('cosmosapi/v1','/posts', array(
        'methods' => 'GET',
        'callback' => 'api_get_vue'
    ));
}

add_action('rest_api_init', 'api_register_vue_routes');

?>
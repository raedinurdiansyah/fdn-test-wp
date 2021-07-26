<?php
/**
 * Plugin Name: Test Custom API
 * Description: API For Testing Purpose
 * Version: 0.1
 * Author: Raedi N
 */

function cwp_posts() {
    return 'Our awesome endpoint!';
}

add_action(
    'rest_api_init', function() {
        register_rest_route(
            'cwp/v1',
            'posts',
            [
                'methods' => 'GET',
                'callback' => 'cwp_posts'
            ]
        );
    }
);
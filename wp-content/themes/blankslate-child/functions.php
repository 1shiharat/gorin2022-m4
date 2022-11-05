<?php

add_action('init', function () {
    register_post_type(
        'restrant',
        [
            'label' => 'レストラン',
            'public' => true,
            'hierarchical' => true,
            'supports' => [
                'title', 'editor', 'comments', 'revisions', 'author', 'excerpt',  'thumbnail', 'custom-fields'
            ],
            'has_archive' => true,
        ]
    );
    register_post_type(
        'sns',
        [
            'label' => 'sns',
            'public' => true,
            'hierarchical' => true,
            'supports' => [
                'title', 'editor', 'comments', 'revisions', 'author', 'excerpt',  'thumbnail', 'custom-fields'
            ],
        ]
    );

    register_taxonomy(
        'area_category',
        'restrant',
        [
            'label' => 'エリア',
            'public' => true,
            'hierarchical' => true,
            'rewrite' => [
                'slug' => 'area',
            ]
        ]
    );
    register_taxonomy(
        'junre_tag',
        'restrant',
        [
            'label' => 'ジャンル',
            'public' => true,
            'hierarchical' => true,
            'rewrite' => [
                'slug' => 'area',
            ]
        ]
    );
});

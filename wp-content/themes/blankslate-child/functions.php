<?php

add_action('wp_enqueue_scripts', function () {
  wp_enqueue_style('bootstrap', get_theme_file_uri('bootstrap/bootstrap.min.css'));
  wp_enqueue_script('bootstrap', get_theme_file_uri('bootstrap/bootstrap.min.js'), false, true);
});


add_action('init', function () {
  register_post_type('event', [
    'label' => 'お知らせ',
    'public' => true,
    'has_archive' => true,
    'rewrite' => [
      'slug' => 'event',
    ],
    'supports' => ['title', 'editor', 'thumbnail',]
  ]);
  register_post_type('booth', [
    'label' => '企業ブース',
    'public' => true,
    'has_archive' => true,
    'supports' => ['title', 'editor', 'thumbnail',]
  ]);


  register_taxonomy('event-category', 'event', [
    'label' => 'カテゴリー',
    'public' => true,
    'hierarchical' => true,
  ]);
});

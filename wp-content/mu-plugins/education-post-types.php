<?php

function education_post_types() {
    //Event Post Type
    register_post_type(
        'event',
        [
            'has_archive' => true,
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-calendar-alt',
            'rewrite' => ['slug' => 'events'],
            'supports' => ['title', 'editor', 'excerpt'],
            'labels' => [
                'name' => 'Events',
                'add_new_item' => 'New Event',
                'add_new' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events'
            ]
        ]
    );

    //Program Post Type
    register_post_type(
        'program',
        [
            'has_archive' => true,
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-awards',
            'rewrite' => ['slug' => 'programs'],
            'supports' => ['title', 'editor', 'excerpt'],
            'labels' => [
                'name' => 'Programs',
                'add_new_item' => 'New Program',
                'add_new' => 'Add New Program',
                'edit_item' => 'Edit Program',
                'all_items' => 'All Programs'
            ]
        ]
    );

    //Professor Post Type
    register_post_type(
        'professor',
        [
            'public' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-welcome-learn-more',
            'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
            'labels' => [
                'name' => 'Professors',
                'add_new_item' => 'New Professor',
                'add_new' => 'Add New Professor',
                'edit_item' => 'Edit Professor',
                'all_items' => 'All Professor'
            ]
        ]
    );
}

add_action('init', 'education_post_types');
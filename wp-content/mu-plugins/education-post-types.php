<?php

function education_post_types() {
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
}

add_action('init', 'education_post_types');
<?php 
function university_post_types() {
    register_post_type( 'event', array(
        'rewrite' => array('slug' => 'events'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event',
            'add_new' => 'Add New Event',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'new_item' => 'New Event',
            'all_items' => 'All Events'
        ),
        'menu_icon' => 'dashicons-calendar-alt',
        'has_archive'=> true,
        'supports' => array('title', 'editor','excerpt')
    ));
    // Program Post Type
    register_post_type( 'program', array(
        'rewrite' => array('slug' => 'programs'),
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Programs',
            'singular_name' => 'Program',
            'add_new' => 'Add New Program',
            'add_new_item' => 'Add New Program',
            'edit_item' => 'Edit Program',
            'new_item' => 'New Program',
            'all_items' => 'All Programs'
        ),
        'menu_icon' => 'dashicons-awards',
        'has_archive'=> true,
        'supports' => array('title', 'editor')
    ));
}

add_action('init', 'university_post_types');

?>
<?php 
function university_post_types() {
    register_post_type( 'event', array(
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
        'menu_icon' => 'dashicons-calendar-alt'
    ));
}

add_action('init', 'university_post_types');

?>
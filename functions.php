<?php

add_theme_support('post-thumbnails');

function punch_monitor_setup() {
    add_image_size('candidate-thumbnail', 300, 300, true); 
    add_image_size('voter-education-size', 600, 400, true);
}
add_action('after_setup_theme', 'punch_monitor_setup');


function punch_monitor_create_candidate_post_type() {
    $labels = array(
        'name'                  => 'Candidates',
        'singular_name'         => 'Candidate',
        'menu_name'             => 'Candidates',
        'name_admin_bar'        => 'Candidate',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Candidate',
        'new_item'              => 'New Candidate',
        'edit_item'             => 'Edit Candidate',
        'view_item'             => 'View Candidate',
        'all_items'             => 'All Candidates',
        'search_items'          => 'Search Candidates',
        'not_found'             => 'No candidates found.',
        'not_found_in_trash'    => 'No candidates found in Trash.',
    );

    $args = array(
        'labels'                => $labels,
        'public'                => true,
        'has_archive'           => true,
        'menu_icon'             => 'dashicons-groups',
        'supports'              => array('title', 'editor', 'thumbnail'),
        'rewrite'               => array('slug' => 'candidates'),
        'show_in_rest'          => true,
    );

    register_post_type('candidate', $args);
}

add_action('init', 'punch_monitor_create_candidate_post_type');

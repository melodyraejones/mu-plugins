<?php
function mrj_post_types() {
    // Register 'Program' post type
    $labels = array(
        'name' => 'Programs',
        'singular_name' => 'Program',
        'menu_name' => 'Programs',
        'name_admin_bar' => 'Program',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Program',
        'new_item' => 'New Program',
        'edit_item' => 'Edit Program',
        'view_item' => 'View Program',
        'all_items' => 'All Programs',
        'search_items' => 'Search Programs',
        'parent_item_colon' => 'Parent Program:',
        'not_found' => 'No programs found.',
        'not_found_in_trash' => 'No programs found in Trash.'
    );

    $args = array(
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_rest' => true
    );

    register_post_type('program', $args);

    // Register 'Cart' post type
    $cart_labels = array(
        'name' => 'Cart',
        'singular_name' => 'Cart',
        'menu_name' => 'Cart',
        'name_admin_bar' => 'Cart',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Cart',
        'new_item' => 'New Cart',
        'edit_item' => 'Edit Cart',
        'view_item' => 'View Cart',
        'all_items' => 'All Carts',
        'search_items' => 'Search Carts',
        'parent_item_colon' => 'Parent Cart:',
        'not_found' => 'No Carts found.',
        'not_found_in_trash' => 'No Carts found in Trash.'
    );

    $cart_args = array(
        'capability_type' => 'cart',
        'map_meta_cap' => true,
        'public' => false,
        'show_ui' => true,
        'labels' => $cart_labels,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_rest' => true
    );

    register_post_type('cart', $cart_args);
}

// Register 'Audio' post type separately
function mrj_audios() {
    $labels = array(
        'name' => 'Audios',
        'singular_name' => 'Audio',
        'menu_name' => 'Audios',
        'name_admin_bar' => 'Audio',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Audio',
        'new_item' => 'New Audio',
        'edit_item' => 'Edit Audio',
        'view_item' => 'View Audio',
        'all_items' => 'All Audios',
        'search_items' => 'Search Audios',
        'parent_item_colon' => 'Parent Audio:',
        'not_found' => 'No audios found.',
        'not_found_in_trash' => 'No audios found in Trash.'
    );

    $args = array(
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-format-audio',
        'supports' => array('title', 'editor', 'thumbnail'), // Adjust as needed
        'has_archive' => true,
        'show_in_rest' => true,
    );

    register_post_type('audio', $args);
}

function mrj_Fav_Programs(){
    $labels = array(
        'name' => 'Favorite Programs',
        'singular_name' => 'Favorite Program',
        'menu_name' => 'Favorite Programs',
        'name_admin_bar' => 'Favorite Program',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Favorite Program',
        'new_item' => 'New Favorite Program',
        'edit_item' => 'Edit Favorite Program',
        'view_item' => 'View Favorite Program',
        'all_items' => 'All Favorite Programs',
        'search_items' => 'Search Favorite Programs',
        'parent_item_colon' => 'Parent Favorite Program:',
        'not_found' => 'No Favorite Programs found.',
        'not_found_in_trash' => 'No Favorite Programs found in Trash.'
    );

    $args = array(
        'public' => true,
        'labels' => $labels, 
        'menu_icon' => 'dashicons-heart',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'show_in_rest' => true
    );

    register_post_type('favPrograms', $args);
}

function mrj_wisdom_toolkit_content(){
    $labels = array(
        'name' => 'Wisdom Toolkit Content',
        'singular_name' => 'Wisdom Toolkit Content',
        'menu_name' => 'Wisdom Toolkit Content',
        'name_admin_bar' => 'Wisdom Toolkit Content',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Wisdom Toolkit Content',
        'new_item' => 'New Wisdom Toolkit Content',
        'edit_item' => 'Edit Wisdom Toolkit Content',
        'view_item' => 'View Wisdom Toolkit Content',
        'all_items' => 'All Wisdom Toolkit Content',
        'search_items' => 'Search Wisdom Toolkit Content',
        'parent_item_colon' => 'Parent Wisdom Toolkit Content:',
        'not_found' => 'No Wisdom Toolkit Content found.',
        'not_found_in_trash' => 'No Wisdom Toolkit Content found in Trash.'
    );

    $args = array(
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-video-alt3',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug'=>'wisdom-toolkits'),
        'show_in_rest' => true
    );

    register_post_type('wisdom-content', $args);
}

function mrj_weekly_zen(){
    $labels = array(
        'name' => 'Weekly Zen',
        'singular_name' => 'Weekly Zen',
        'menu_name' => 'Weekly Zen',
        'name_admin_bar' => 'Weekly Zen',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Weekly Zen',
        'new_item' => 'New Weekly Zen',
        'edit_item' => 'Edit Weekly Zen',
        'view_item' => 'View Weekly Zen',
        'all_items' => 'All Weekly Zen',
        'search_items' => 'Search Weekly Zen',
        'parent_item_colon' => 'Parent Weekly Zen:',
        'not_found' => 'No Weekly Zen found.',
        'not_found_in_trash' => 'No Weekly Zen found in Trash.'
    );

    $args = array(
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-calendar-alt',
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug'=>'weekly-zens'),
        'show_in_rest' => true
    );

    register_post_type('weekly-zen', $args);
}


add_action('init', 'mrj_post_types');
add_action('init', 'mrj_audios');
add_action('init', 'mrj_Fav_Programs');
add_action('init', 'mrj_wisdom_toolkit_content');
add_action('init', 'mrj_weekly_zen');

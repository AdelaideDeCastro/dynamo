<?php
/*
*	Dynamo functions and definitions

*	@package	Daynamo
*/

/*
*   Custom functions
*/
function dynamo_custom_setup() {
    // Activate Nav Menu
    register_nav_menu( 'primary', __( 'Hoofdmenu', 'dynamo' ) );

    // Enable support for Post Formats
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link'
    ));

    add_theme_support( 'post-thumbnails', array( 'machine' ) );
}
add_action('after_setup_theme', 'dynamo_custom_setup');

 // Enqueue scripts and styles
 function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'script-name', get_template_directory_uri() . '/public/css/styles.css');
}
add_action('wp_enqueue_scripts', 'wpdocs_theme_name_scripts');

// Add custom post type Machines
function machine_init() {
    $labels = array (
        'name' => 'Machines',
        'singular_name' => 'Machine',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Machine',
        'edit_item' => 'Edit Machine',
        'new_item' => 'New Machine',
        'view_item' => 'View Machine',
        'search_items' => 'Search Machine',
        'not_found' => 'No machines found',
        'not_found_in_trash' => 'No machines found in Trash'
    );
    $args = array (
        'labels' => $labels,
        'description' => 'Custom post type that holds machines',
        'public' => true,
        'rewrite' => array('slug' => 'machines'),
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'custom-fields'
        )
    );
    register_post_type('machine', $args);
    flush_rewrite_rules();
}
add_action('init', 'machine_init');

// Function to remove meta generator tag
function dynamo_remove_version() {
    return '';   
}
add_filter('the_generator', 'dynamo_remove_version');

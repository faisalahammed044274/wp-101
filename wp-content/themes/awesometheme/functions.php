<?php

function awesome_script_enqueue()
{
    // Enqueue the CSS file correctly
    wp_enqueue_style(
        'custom-style-css', // Handle for the stylesheet
        get_template_directory_uri() . '/css/awesome.css', // Path to the CSS file
        array(), // Dependencies (empty array if none)
        '1.0.0', // Version
        'all' // Media type
    );

    wp_enqueue_script(
        'custom-script-js',
        get_template_directory_uri() . '/js/awesome.js',
        array(),
        '1.0.0',
        true
    );
}


// Hook the function to the 'wp_enqueue_scripts' action
add_action('wp_enqueue_scripts', 'awesome_script_enqueue');

// Add theme setup function
function awesome_theme_setup()
{
    // Add theme features
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Secondary footer Navigation');
}

// Hook the setup function to 'after_setup_theme'
add_action('after_setup_theme', 'awesome_theme_setup');

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

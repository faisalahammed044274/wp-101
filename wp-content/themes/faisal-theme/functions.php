<?php

/*
    ==========================================
     Include scripts
    ==========================================
*/

function faisal_script_enqueue() {
    //css
    wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.4', 'all');
    wp_enqueue_style('fontello', get_template_directory_uri() . '/css/fonts/fontello/css/fontello.css', array(), '3.3.4', 'all');
    wp_enqueue_style('rotate-words', get_template_directory_uri() . '/css/rotate-words.css', array(), '3.3.4', 'all');
    wp_enqueue_style('align-css', get_template_directory_uri() . '/css/align.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main-css', get_template_directory_uri() . 'js/shortcodes/shortcodes.css', array(), '1.0.0', 'all');
    wp_enqueue_style('768-css', get_template_directory_uri() . '/css/768.css', array(), '1.0.0', 'all');
    wp_enqueue_style('992-css', get_template_directory_uri() . '/css/992.css', array(), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('fluidbox', get_template_directory_uri() . '/js/jquery.fluidbox/fluidbox.css', array(), '1.0.0', 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.css', array(), '1.0.0', 'all');
    wp_enqueue_style('selection-sharer', get_template_directory_uri() . '/js/selection-sharer/selection-sharer.css', array(), '1.0.0', 'all');
    wp_enqueue_style('shortcodes', get_template_directory_uri() . '/js/shortcodes/shortcodes.css', array(), '1.0.0', 'all');
    wp_enqueue_style('google-fonts', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Lato:400,700|Noto+Sans:400,400i,700,700i|Poppins:300,400,500,600,700', array(), '1.0.0', 'all');
    
    
    //js
    wp_enqueue_script('jquery');
    wp_enqueue_script('modernizer', get_template_directory_uri() . 'js/modernizr.min.js', array(), '3.3.4', true);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
    wp_enqueue_script('jqueryminjs', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '1.0.0', true);
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.min.js', array(), '1.0.0', true);
}

add_action( 'wp_enqueue_scripts', 'faisal_script_enqueue');


function mytheme_setup() {
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

?>
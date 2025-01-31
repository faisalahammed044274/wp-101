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
    wp_enqueue_script('jquery-311', get_template_directory_uri() . '/js/jquery-3.1.1.min.js', array(), '3.3.4', true);
    wp_enqueue_script('modernizer', get_template_directory_uri() . '/js/modernizr.min.js', array(), '3.3.4', true);
    wp_enqueue_script('jquery-300', get_template_directory_uri() . '/wp-adminjs/jquery-migrate-3.0.0.min.js', array(), '1.0.0', true);
    wp_enqueue_script('fastclick-js', get_template_directory_uri() . '/js/fastclick.js', array(), '1.0.0', true);
    wp_enqueue_script('fitvids-js', get_template_directory_uri() . '/js/jquery.fitvids.js', array(), '1.0.0', true);
    wp_enqueue_script('view-port-mini-jquery', get_template_directory_uri() . '/js/jquery.viewport.mini.js', array(), '1.0.0', true);
    wp_enqueue_script('waypoints-jquery', get_template_directory_uri() . '/js/jquery.waypoints.min.js', array(), '1.0.0', true);
    wp_enqueue_script('validation-jquery', get_template_directory_uri() . '/js/jquery-validation/jquery.validate.min.js', array(), '1.0.0', true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', array(), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup/jquery.magnific-popup.min.js', array(), '1.0.0', true);
    wp_enqueue_script('fluidbox', get_template_directory_uri() . '/js/jquery.fluidbox/jquery.fluidbox.min.js', array(), '1.0.0', true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.min.js', array(), '1.0.0', true);
    wp_enqueue_script('selection-sharer', get_template_directory_uri() . '/js/selection-sharer/selection-sharer.js', array(), '1.0.0', true);
    wp_enqueue_script('socialstream', get_template_directory_uri() . '/js/socialstream.jquery.js', array(), '1.0.0', true);
    wp_enqueue_script('collagePlus', get_template_directory_uri() . '/js/jquery.collagePlus/jquery.collagePlus.min.jss', array(), '1.0.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('shortcodes', get_template_directory_uri().'/js/shortcodes/shortcodes.js', array('jquery'), '1.0.0', true);

}

add_action( 'wp_enqueue_scripts', 'faisal_script_enqueue');

function my_theme_scripts() {
    // Enqueue main.js
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);

    // Enqueue shortcodes.js
    wp_enqueue_script('shortcodes', get_template_directory_uri() . '/js/shortcodes/shortcodes.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');


function mytheme_setup() {
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
}
add_action( 'after_setup_theme', 'mytheme_setup' );

?>
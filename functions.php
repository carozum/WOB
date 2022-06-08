<?php

// Theme features

add_theme_support('title-tag');
add_theme_support('custom-logo', array(
    'height' => 50,
    'width' => 50,
));

// Css and JS files bootstrap

function wob_files()
{
    wp_enqueue_style(
        'bootstrap-css',
        get_theme_file_uri('/assets/css/bootstrap.css')
    );
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );
    wp_enqueue_script(
        'bootstrap-js',
        get_theme_file_uri('/assets/js/bootstrap.js'),
        ['jquery'],
        true
    );
}
add_action('wp_enqueue_scripts', 'wob_files');


// Menus

// // function declare_menus()
// // {
// //     register_nav_menus(array(
// //         'top-menu' => __('Top Menu'),
// //         'footer-menu' => __('Footer Menu')
// //     ));
// // };

// add_action('init', 'declare_menus');

/**
 * Register Custom Navigation Walker
 */
function register_navwalker()
{
    require get_template_directory() . '/parts/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'register_navwalker');

/*Navigation Menus*/
function register_my_menu()
{
    register_nav_menu('top-menu', __('Top Menu'));
}
add_action('init', 'register_my_menu');
  /*End*/

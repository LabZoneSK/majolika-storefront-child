<?php
function my_theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

}

function my_theme_adding_styles()
{
    wp_register_style('majolika_stylesheet', get_stylesheet_directory_uri() . '/css/storefront-majolika.css');
    wp_enqueue_style('majolika_stylesheet');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_theme_adding_styles', 99);

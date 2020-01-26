<?php

function blog_scripts()
{
    wp_enqueue_style('theme-css', get_theme_file_uri('public/css/style.css'), [], '1', 'all');
    wp_enqueue_script('theme-js', get_theme_file_uri('public/js/app.js'), [], '1', true);
}

add_action('wp_enqueue_scripts', 'blog_scripts');

if (!function_exists('blog_setup')) {

    function blog_setup()
    {
        add_theme_support('title-tag');

        register_nav_menus([
            'main'   => 'Principal',
            'social' => 'Social'
        ]);

        add_theme_support('post-thumbnails');
        set_post_thumbnail_size(700, 700);
    }
}

add_action('after_setup_theme', 'blog_setup');

function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}

add_filter( 'post_thumbnail_html', 'remove_img_attr' );

if (!function_exists('blog_register_widget')) {

    function blog_register_widget()
    {
        register_sidebar([
            'name'          => __( 'Widget', 'theme_text_domain' ),
            'id'            => 'unique-sidebar-id',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ]);
    }
}

add_action('widgets_init', 'blog_register_widget');

remove_action( 'wp_head', 'print_emoji_detection_script', 7);
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
remove_action( 'wp_print_styles', 'print_emoji_styles');

remove_action( 'wp_head', 'wlwmanifest_link' );

remove_action( 'wp_head', 'rsd_link' );

remove_action( 'wp_head', 'wp_generator' );

remove_action( 'wp_head', 'feed_links_extra', 3 );

remove_action( 'wp_head', 'feed_links', 2 );

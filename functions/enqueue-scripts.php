<?php
function site_scripts()
{
    global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Adding scripts file in the footer
    wp_register_script( 'jquery-script', get_template_directory_uri() . '/assets/js/core/jquery.3.2.1.min.js', array());
    wp_register_script('popper-script', get_template_directory_uri() . '/assets/js/core/popper.min.js', array());
    wp_register_script('bootstrap-script', get_template_directory_uri() . '/assets/js/core/bootstrap.min.js', array());
    wp_register_script('now-ui-kit-script', get_template_directory_uri() . '/assets/js/now-ui-kit.js', array());
    wp_register_script('aos-script', get_template_directory_uri() . '/assets/js/aos.js', array());

    wp_enqueue_script('site-js', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery-script', 'popper-script', 'bootstrap-script', 'now-ui-kit-script', 'aos-script'), filemtime(get_template_directory() . '/assets/js'), true);

    // Register main stylesheet
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), filemtime(get_template_directory() . '/assets/css'), 'all');
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.css', array(), filemtime(get_template_directory() . '/assets/css'), 'all');
    wp_enqueue_style('site-css', get_template_directory_uri() . '/assets/css/main.css', array(), filemtime(get_template_directory() . '/assets/css'), 'all');

    wp_localize_script('site-js', 'rewireObject', [
        'siteUrl' => get_option('siteurl'),
        'templateDirectoryUri' => get_template_directory_uri(),
    ]);
    // Comment reply script for threaded comments
    if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'site_scripts', 999);
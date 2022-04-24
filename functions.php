<?php

function drl_theme_register_styles()
{
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/lib/@fortawesome/fontawesome-free/css/all.min.css');
    wp_enqueue_style('ionicons', get_template_directory_uri() . '/lib/ionicons/css/ionicons.min.css');
    wp_enqueue_style('dashforge', get_template_directory_uri() . '/assets/css/dashforge.css', array('fontawesome', 'ionicons'));
    wp_enqueue_style('dashforge-profile', get_template_directory_uri() . '/assets/css/dashforge.profile.css', array('dashforge'));
}
add_action('wp_enqueue_scripts', 'drl_theme_register_styles');

function drl_theme_register_scripts()
{
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('feather', get_template_directory_uri() . '/lib/feather-icons/feather.min.js', array(), false, true);
    wp_enqueue_script('perfect-scrollbar', get_template_directory_uri() . '/lib/perfect-scrollbar/perfect-scrollbar.min.js', array(), false, true);
    wp_enqueue_script('dashforge-fix', get_template_directory_uri() . '/src/js/dashforge-fix.js', array(), false, true);
    wp_enqueue_script('dashforge', get_template_directory_uri() . '/assets/js/dashforge.js', array('dashforge-fix'), false, true);
}
add_action('wp_enqueue_scripts', 'drl_theme_register_scripts');

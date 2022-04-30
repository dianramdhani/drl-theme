<?php

function drl_theme_register_styles()
{
    // wp_enqueue_style('fontawesome', get_template_directory_uri() . '/themes/dashforge/lib/@fortawesome/fontawesome-free/css/all.min.css');
    // wp_enqueue_style('ionicons', get_template_directory_uri() . '/themes/dashforge/lib/ionicons/css/ionicons.min.css');
    // wp_enqueue_style('dashforge', get_template_directory_uri() . '/themes/dashforge/assets/css/dashforge.css', array('fontawesome', 'ionicons'));
    // wp_enqueue_style('dashforge-profile', get_template_directory_uri() . '/themes/dashforge/assets/css/dashforge.profile.css', array('dashforge'));
    // wp_enqueue_style('dashforge-dark', get_template_directory_uri() . '/themes/dashforge/assets/css/skin.dark.css', array('dashforge'));
}
add_action('wp_enqueue_scripts', 'drl_theme_register_styles');

function drl_theme_register_scripts()
{
    // wp_enqueue_script('purecounter', get_template_directory_uri() . '/themes/resume/assets/vendor/purecounter/purecounter.js', array(), false, true);
    // wp_enqueue_script('aos', get_template_directory_uri() . '/themes/resume/assets/vendor/aos/aos.js', array(), false, true);
    // wp_enqueue_script('bootstrap', get_template_directory_uri() . '/themes/resume/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), false, true);
    // wp_enqueue_script('glightbox', get_template_directory_uri() . '/themes/resume/assets/vendor/glightbox/js/glightbox.min.js', array(), false, true);
    // wp_enqueue_script('isotope', get_template_directory_uri() . '/themes/resume/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), false, true);
    // wp_enqueue_script('swiper', get_template_directory_uri() . '/themes/resume/assets/vendor/swiper/swiper-bundle.min.js', array(), false, true);
    // wp_enqueue_script('typed', get_template_directory_uri() . '/themes/resume/assets/vendor/typed.js/typed.min.js', array(), false, true);
    // wp_enqueue_script('noframework', get_template_directory_uri() . '/themes/resume/assets/vendor/waypoints/noframework.waypoints.js', array(), false, true);
    // wp_enqueue_script('validate', get_template_directory_uri() . '/themes/resume/assets/vendor/php-email-form/validate.js', array(), false, true);
    // wp_enqueue_script('main', get_template_directory_uri() . '/themes/resume/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'drl_theme_register_scripts');

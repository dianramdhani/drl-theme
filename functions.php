<?php

function drl_theme_register_styles()
{
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
    wp_enqueue_style('aos', get_template_directory_uri() . '/themes/resume/assets/vendor/aos/aos.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/themes/resume/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons', get_template_directory_uri() . '/themes/resume/assets/vendor/bootstrap-icons/bootstrap-icons.css');
    wp_enqueue_style('boxicons', get_template_directory_uri() . '/themes/resume/assets/vendor/boxicons/css/boxicons.min.css');
    wp_enqueue_style('glightbox', get_template_directory_uri() . '/themes/resume/assets/vendor/glightbox/css/glightbox.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/themes/resume/assets/vendor/swiper/swiper-bundle.min.css');
    wp_enqueue_style('main-theme', get_template_directory_uri() . '/themes/resume/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'drl_theme_register_styles');

function drl_theme_register_scripts()
{
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/themes/resume/assets/vendor/purecounter/purecounter.js', array(), false, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/themes/resume/assets/vendor/aos/aos.js', array(), false, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/themes/resume/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), false, true);
    wp_enqueue_script('glightbox', get_template_directory_uri() . '/themes/resume/assets/vendor/glightbox/js/glightbox.min.js', array(), false, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/themes/resume/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), false, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/themes/resume/assets/vendor/swiper/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('typed', get_template_directory_uri() . '/themes/resume/assets/vendor/typed.js/typed.min.js', array(), false, true);
    wp_enqueue_script('noframework', get_template_directory_uri() . '/themes/resume/assets/vendor/waypoints/noframework.waypoints.js', array(), false, true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/themes/resume/assets/vendor/php-email-form/validate.js', array(), false, true);
    wp_enqueue_script('main-theme', get_template_directory_uri() . '/themes/resume/assets/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'drl_theme_register_scripts');

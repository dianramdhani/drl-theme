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

function drl_theme_sanitize_image($image, $setting)
{
    /*
     * Array of valid image file types.
     *
     * The array includes image mime types that are included in wp_get_mime_types()
     */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif' => 'image/gif',
        'png' => 'image/png',
        'bmp' => 'image/bmp',
        'tif|tiff' => 'image/tiff',
        'ico' => 'image/x-icon'
    );
    // Return an array with file extension and mime_type.
    $file = wp_check_filetype($image, $mimes);
    // If $image has a valid mime_type, return it; otherwise, return the default.
    return ($file['ext'] ? $image : $setting->default);
}

function drl_theme_sanitize_text($input)
{
    return wp_kses_post(force_balance_tags($input));
}

function drl_theme_customize_register($wp_customize)
{
    $wp_customize->add_section('resume_setting', array(
        'title' => __('Resume Setting', 'drl_theme'),
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'description' => __('Resume Setting', 'drl_theme'),
    ));

    // Field name default Dian Ramdhani
    $wp_customize->add_setting('name', array(
        'default' => 'Dian Ramdhani',
        'sanitize_callback' => 'drl_theme_sanitize_text',
    ));
    $wp_customize->add_control('name', array(
        'label' => __('Name', 'drl_theme'),
        'section' => 'resume_setting',
        'type' => 'text',
    ));

    // Field list skills
    $wp_customize->add_setting('skills', array(
        'default' => 'Designer, Developer, Freelancer, Photographer',
        'sanitize_callback' => 'drl_theme_sanitize_text',
    ));
    $wp_customize->add_control('skills', array(
        'label' => __('Skill', 'drl_theme'),
        'section' => 'resume_setting',
        'type' => 'textarea',
    ));
}
add_action('customize_register', 'drl_theme_customize_register');

// custom post type
function drl_theme_custom_post_type()
{
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolio'),
            'singular_name' => __('Portfolio'),
            'add_new' => __('Add New'),
            'add_new_item' => __('Add New Portfolio'),
            'edit_item' => __('Edit Portfolio'),
            'new_item' => __('New Portfolio'),
            'view_item' => __('View Portfolio'),
            'search_items' => __('Search Portfolio'),
            'not_found' => __('No Portfolio found'),
            'not_found_in_trash' => __('No Portfolio found in Trash'),
            'parent_item_colon' => __('Parent Portfolio'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'comments',
            'custom-fields',
            'revisions',
            'page-attributes',
            'post-formats',
        ),
        'rewrite' => array(
            'slug' => 'portfolio',
            'with_front' => true,
            'pages' => true,
            'feeds' => true,
        ),
    ));
}
add_action('init', 'drl_theme_custom_post_type');

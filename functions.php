<?php

function drl_theme_register_styles()
{
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/themes/dashforge/lib/@fortawesome/fontawesome-free/css/all.min.css');
    wp_enqueue_style('ionicons', get_template_directory_uri() . '/themes/dashforge/lib/ionicons/css/ionicons.min.css');
    wp_enqueue_style('jqvmap', get_template_directory_uri() . '/themes/dashforge/lib/jqvmap/jqvmap.min.css');
    wp_enqueue_style('dashforge', get_template_directory_uri() . '/themes/dashforge/assets/css/dashforge.css', array('fontawesome', 'ionicons'));
    wp_enqueue_style('dashforge-dashboard', get_template_directory_uri() . '/themes/dashforge/assets/css/dashforge.dashboard.css', array('dashforge'));
    wp_enqueue_style('dashforge-cool', get_template_directory_uri() . '/themes/dashforge/assets/css/skin.cool.css', array('dashforge'));
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array());
}
add_action('wp_enqueue_scripts', 'drl_theme_register_styles');

function drl_theme_register_scripts()
{
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/themes/dashforge/lib/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('feather', get_template_directory_uri() . '/themes/dashforge/lib/feather-icons/feather.min.js', array(), false, true);
    wp_enqueue_script('perfect-scrollbar', get_template_directory_uri() . '/themes/dashforge/lib/perfect-scrollbar/perfect-scrollbar.min.js', array(), false, true);
    wp_enqueue_script('jquery-flot', get_template_directory_uri() . '/themes/dashforge/lib/jquery.flot/jquery.flot.js', array('jquery'), false, true);
    wp_enqueue_script('jquery-flot-stack', get_template_directory_uri() . '/themes/dashforge/lib/jquery.flot/jquery.flot.stack.js', array('jquery-flot'), false, true);
    wp_enqueue_script('jquery-flot-resize', get_template_directory_uri() . '/themes/dashforge/lib/jquery.flot/jquery.flot.resize.js', array('jquery-flot'), false, true);
    wp_enqueue_script('chart', get_template_directory_uri() . '/themes/dashforge/lib/chart.js/Chart.bundle.min.js', array(), false, true);
    wp_enqueue_script('vmap', get_template_directory_uri() . '/themes/dashforge/lib/jqvmap/jquery.vmap.min.js', array('jquery'), false, true);
    wp_enqueue_script('vmap-usa', get_template_directory_uri() . '/themes/dashforge/lib/jqvmap/maps/jquery.vmap.usa.js', array('vmap'), false, true);
    wp_enqueue_script('dashforge-fix', get_template_directory_uri() . '/src/js/dashforge-fix.js', array(), false, true);
    wp_enqueue_script('dashforge', get_template_directory_uri() . '/themes/dashforge/assets/js/dashforge.js', array('dashforge-fix'), false, true);
    wp_enqueue_script('dashforge-aside', get_template_directory_uri() . '/themes/dashforge/assets/js/dashforge.aside.js', array('dashforge'), false, true);
    wp_enqueue_script('dashforge-sample-data', get_template_directory_uri() . '/themes/dashforge/assets/js/dashforge.sampledata.js', array(), false, true);
    wp_enqueue_script('cookie', get_template_directory_uri() . '/themes/dashforge/lib/js-cookie/js.cookie.js', array(), false, true);
    wp_enqueue_script('dashforge-one', get_template_directory_uri() . '/themes/dashforge/assets/js/dashboard-one.js', array('dashforge', 'cookie'), false, true);
}
add_action('wp_enqueue_scripts', 'drl_theme_register_scripts');

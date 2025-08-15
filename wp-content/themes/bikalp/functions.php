<?php

function custom_default_avatar( $avatar, $id_or_email, $size, $default, $alt ) {
    $custom_avatar = get_template_directory_uri() . '/assets/images/favicon.png'; // Path to your image
    $avatar = "<img alt='{$alt}' src='{$custom_avatar}' class='avatar avatar-{$size} photo' height='{$size}' width='{$size}' />";
    return $avatar;
}
add_filter( 'get_avatar', 'custom_default_avatar', 10, 5 );

function load_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'load_font_awesome' );

// Enable menus in WordPress
function bk_theme_setup() {
    add_theme_support('menus'); // <-- enable menu system
    register_nav_menu('main-menu', __('Main Menu', 'bikas-news'));
}
add_action('after_setup_theme', 'bk_theme_setup');

// Enqueue styles and scripts
function mytheme_enqueue_assets() {
    $theme_uri = get_template_directory_uri();

    // Main theme stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    // Custom CSS
    wp_enqueue_style('custom-style', $theme_uri . '/assets/custom-css/style.css', [], '1.0', 'all');
    // Custom JS
    wp_enqueue_script('advertisement', $theme_uri . '/assets/js/advertisement.js', ['jquery'], '1.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');


// Theme setup: thumbnails & image sizes
function bikalpa_setup() { 
    // Enable featured images (post thumbnails)
    add_theme_support('post-thumbnails');

    // Define custom image sizes
    add_image_size('large-featured', 1000, 500, true);
    add_image_size('medium-thumb', 357, 470, true);
    add_image_size('small-thumb', 220, 150, true);
    add_image_size('small-150x102', 150, 102, true); // hard crop to 150x102

    // Ensure thumbnails are supported for default posts
    add_post_type_support('post', 'thumbnail');

    // Example for custom post type 'news'
    // add_post_type_support('news', 'thumbnail');
}
add_action('after_setup_theme', 'bikalpa_setup');


// Force Featured Image meta box to appear
function bikalpa_force_featured_image_box() {
    add_meta_box('postimagediv', __('Featured Image'), 'post_thumbnail_meta_box', 'post', 'side', 'low');

    // Uncomment for custom post type example
    // add_meta_box('postimagediv', __('Featured Image'), 'post_thumbnail_meta_box', 'news', 'side', 'low');
}
add_action('do_meta_boxes', 'bikalpa_force_featured_image_box');


// Nepali date function
function nepali_date($date_str) {
    $nepali_months = ['बैशाख','जेठ','असार','साउन','श्रावण','भाद्र','आश्विन','कार्तिक','मंसिर','पौष','माघ','फाल्गुण'];
    $date = strtotime($date_str);
    $day = date('d', $date);
    $month = date('n', $date) - 1;
    $hour = date('H', $date);
    $minute = date('i', $date);

    $day_np = strtr($day, ['0'=>'०','1'=>'१','2'=>'२','3'=>'३','4'=>'४','5'=>'५','6'=>'६','7'=>'७','8'=>'८','9'=>'९']);
    $hour_np = strtr($hour, ['0'=>'०','1'=>'१','2'=>'२','3'=>'३','4'=>'४','5'=>'५','6'=>'६','7'=>'७','8'=>'८','9'=>'९']);
    $minute_np = strtr($minute, ['0'=>'०','1'=>'१','2'=>'२','3'=>'३','4'=>'४','5'=>'५','6'=>'६','7'=>'७','8'=>'८','9'=>'९']);

    return $day_np . ' ' . $nepali_months[$month] . ', ' . $hour_np . ':' . $minute_np;
}
?>

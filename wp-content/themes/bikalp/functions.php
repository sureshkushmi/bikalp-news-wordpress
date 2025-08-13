<?php 
function mytheme_enqueue_assets() {
    $theme_uri = get_template_directory_uri();

    // Main theme stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri()); // Automatically loads style.css from your theme root

    // If you have additional CSS files
    wp_enqueue_style('custom-style', $theme_uri . '/assets/custom-css/style.css', [], '1.0', 'all');

    // JS example
    wp_enqueue_script('advertisement', $theme_uri . '/assets/js/advertisement.js', ['jquery'], '1.0', true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');


// Enable featured images (post thumbnails)
add_theme_support('post-thumbnails');

// Optionally, define custom image sizes
add_image_size('large-featured', 1000, 500, true); // large post image
add_image_size('small-thumb', 220, 150, true);    // small post thumbnails


function nepali_date($date_str) {
    // Nepali digits
    $nepali_numbers = ['०','१','२','३','४','५','६','७','८','९'];
    // Nepali months
    $nepali_months = ['बैशाख','जेठ','असार','साउन','श्रावण','भाद्र','आश्विन','कार्तिक','मंसिर','पौष','माघ','फाल्गुण'];

    $date = strtotime($date_str);
    $day = date('d', $date);
    $month = date('n', $date) - 1; // month index 0-11
    $hour = date('H', $date);
    $minute = date('i', $date);

    // Convert digits to Nepali
    $day_np = strtr($day, ['0'=>'०','1'=>'१','2'=>'२','3'=>'३','4'=>'४','5'=>'५','6'=>'६','7'=>'७','8'=>'८','9'=>'९']);
    $hour_np = strtr($hour, ['0'=>'०','1'=>'१','2'=>'२','3'=>'३','4'=>'४','5'=>'५','6'=>'६','7'=>'७','8'=>'८','9'=>'९']);
    $minute_np = strtr($minute, ['0'=>'०','1'=>'१','2'=>'२','3'=>'३','4'=>'४','5'=>'५','6'=>'६','7'=>'७','8'=>'८','9'=>'९']);

    return $day_np . ' ' . $nepali_months[$month] . ', ' . $hour_np . ':' . $minute_np;
}


?>


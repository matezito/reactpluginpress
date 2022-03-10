<?php
/**
 * Plugin Name: React Plugin Press
 */

 function front_js()
 {
    wp_enqueue_script('reactplugin-script', plugins_url('/dist/js/app.js', __FILE__), [], '1.0', true);
 }

 add_action('wp_enqueue_scripts', 'front_js');

 function main_div()
 {
     return '<div id="main-react-div"></div>';
 }

 add_shortcode('react-div', 'main_div');
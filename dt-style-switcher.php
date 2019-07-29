<?php
/**
 * Plugin Name: DT Style Switcher
 * Plugin URI: https://themeforest.net/user/droitthemes/portfolio
 * Description: Theme Style Switcher Tools.
 * Version: 1.0
 * Author: DroitThemes
 * Author URI: https://themeforest.net/user/droitthemes/portfolio
 * Text domain: dt-style-switcher
 */

if ( !defined('ABSPATH') )
    die('-1');



add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style('karpartz-switcher-style', plugins_url('css/switcher-style.css', __FILE__));
    wp_enqueue_script('karpartz-switcher-script', plugins_url('js/switcher-script.js', __FILE__), 'jquery', '1.9.0', true);
});

add_action('wp_footer', function() {
    require_once __DIR__ . '/switcher-frontend.php';
});
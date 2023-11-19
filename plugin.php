<?php
/*
Plugin Name: CI Army body fat calculator
Plugin URI: https://www.calculator.io/army-body-fat-calculator/
Description: The Army Body Fat Calculator provides users with an accurate estimate of their body fat percentage using the standards of the U.S. Army.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_army_body_fat_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Army Body Fat Calculator by Calculator.iO";

function display_ci_army_body_fat_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Army Body Fat Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_army_body_fat_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_army_body_fat_calculator', 'display_ci_army_body_fat_calculator' );
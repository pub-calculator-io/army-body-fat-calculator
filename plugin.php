<?php
/*
Plugin Name: Army Body Fat Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/army-body-fat-calculator/
Description: The Army Body Fat Calculator provides users with an accurate estimate of their body fat percentage using the standards of the U.S. Army.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_army_body_fat_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_army_body_fat_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/army-body-fat-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Army Body Fat Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_army_body_fat_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_army_body_fat_calculator', 'display_ci_army_body_fat_calculator' );
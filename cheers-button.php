<?php

/**
 * @package CheersButton
*/

/*
Plugin Name: Cheers Button
Plugin URI: 
Description: This is my first plugin
Version: 1.0.0
Author: Adam Dolanský
Author URI: https://www.dolkographics.dk
License: GPLv2 or later
Text Domain: cheers-button
*/ 

/**
 * Shortcodes
 */
add_shortcode('button', 'cheers_button_shortcode');
function cheers_button_shortcode( $atts )
{
   
     extract ( shortcode_atts( array(
        "color" => "green",
        "link" => "https://cheersspillet.dk/vare/cheersspillet/?fbclid=IwAR1gIpk6a6KlVKyEt6EWjn_ktBBtQ6un8Mv-fptOy4m_KYpwyMHeI0ebVNo",
        "text" => "Buy here",
    ), $atts));
    

   $html = '<div class="cheers-button">';  
   
   $html .= '<a href="'. $link .'" class="btn btn-'. $color  .' animate">';
   
   $html .= $text;
   
   $html .= '</a>';
   
   $html .= '</div>';
   
   return $html;
}

add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');

    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('CustomStylesheet', plugins_url('cheers-button/css/style.css'));
        
    }
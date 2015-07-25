<?php
/*
Plugin Name: Sample-plugin
Version: 0.1-alpha
Description: PLUGIN DESCRIPTION HERE
Author: YOUR NAME HERE
Author URI: YOUR SITE HERE
Plugin URI: PLUGIN SITE HERE
Text Domain: sample-plugin
Domain Path: /languages
*/

add_shortcode( 'greeting', 'greeting_shortcode' );


function greeting_shortcode($atts, $content = ''){
    $lang = $atts['language'];
    if($lang == 'japanese'){
        return 'こんにちは';
    }else if($lang == 'english'){
        return 'hello';
    }
    return '';
}
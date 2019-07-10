<?php
/*
Plugin Name: YouTube Subs
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Display youtube button and count
Version: 1.0.0
Author: Joe Veror
Author URI: http://health-check-team.example.com
*/

// Exit if accessed directly
if (!defined('ABSPATH')){
    exit;
}

// Load Srcipts
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');

// Register Widget
function register_youtubesubs(){
    register_widget('Youtube_Subs_Widget');
}

add_action('widgets_init', 'register_youtubesubs');

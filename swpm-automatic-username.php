<?php

/*
Plugin Name: SWPM Automatic Username
Version: 1.0.0
Plugin URI: https://github.com/Th0masL/swpm-automatic-username/
Author: Thomas L.
Author URI: https://github.com/Th0masL/
Description: This addon allows you to automatically generate and hide the Usernames, in SWPM membership plugin (https://simple-membership-plugin.com/)
*/

//Direct access to this file is not permitted
if (!defined('ABSPATH')) {
    exit; //Exit if accessed directly
}

// Define some global variables
define('SWPM_AUTOMATIC_USERNAME_PLUGIN_FOLDER', dirname(__FILE__));
define('SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME', basename(dirname(__FILE__)));

// Load the class of the plugin
require_once ('classes/class.swpm-automatic-username.php');

// Add an action to load the plugin
add_action('plugins_loaded', "swpm_automatic_username_plugins_loaded");

// Load the plugin
function swpm_automatic_username_plugins_loaded() {
    new SwpmAutomaticUsername();
}

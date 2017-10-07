<?php
/*
Plugin Name: Facebook Footer Link
Plugin URI: https://facebook-footer-link.com
Description: Facebook link in footer of Post
Version: 0.1.0
Author: Gousopoulos K.
Author URI: goousopoulos.gr

*/

// Exit if Accessed Directly

/***
 * defined — Checks whether a given named constant exists
 */
if(!defined("ABSPATH")){
    exit;
}

//Load scripts
/***
 * __FILE__	The full path and filename of the file with symlinks resolved.
 * If used inside an include, the name of the included file is returned.
 */


//Global Options VAriables

$ffl_options = get_option('ffl_settings');


require_once (plugin_dir_path(__FILE__).'/includes/facebook-footer-link-scripts.php');
require_once (plugin_dir_path(__FILE__).'/includes/facebook-footer-link-content.php');

//only in admin panel the settings
if(is_admin()){
    //Load script
    require_once (plugin_dir_path(__FILE__).'/includes/facebook-footer-link-settings.php');
}


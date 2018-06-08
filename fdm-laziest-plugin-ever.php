<?php

/*
Plugin Name: Laziest Plugin Ever
Plugin URI:   https://flyingdonutmedia.com
Description: Adds an Upload Plugin link to the plugins menu so you can skip one whole click when uploading a plugin.  Now that's lazy!
Version: 1.0.0
Author: Flying Donut Media
Author URI: https://flyingdonutmedia.com
License: GPL-3.0
License URI: https://www.gnu.org/licenses/gpl-3.0.html
*/

// Exit if file is called directly
if (! defined( 'ABSPATH' ) ){
	exit;
}

// add sub-level administrative menu
add_action('admin_menu', 'fdm_laziest_plugin_ever_add_sublevel_menu');
function fdm_laziest_plugin_ever_add_sublevel_menu() {
	global $submenu;
	$permalink = '/wp-admin/plugin-install.php?tab=upload';
	$submenu['plugins.php'][] = array( 'Upload Plugin', 'manage_options', $permalink );
}
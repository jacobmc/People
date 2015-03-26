<?php

/*
Plugin Name: People
Description: Create elegant member directories.
Plugin URI: http://jacobmc.com/plugins/people
Author: Jacob McKinney
Version: 1.0
Author URI: http://jacobmc.com


Copyright 2015 Jacob McKinney


This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'PPL_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

if ( is_admin() ) {
	include( PPL_PLUGIN_PATH 'admin.php' );
}

<?php

/** 
Plugin Name: dUNDA 2015
Plugin URI: http://www.intillajta.com
Author: Victor P. Unda
Description: Search the News of 4,400+ Universities
Version:     1.0
License: GPL2

UNDA is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
UNDA is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with dUNDA. If not, see License URI.
*/

//Exit if accessed directly

if ( !defined( 'ABSPATH' ) ) {
    exit();
}

//$dir = plugin_dir_path( __FILE__ );

require_once ( plugin_dir_path( __FILE__ ) . 'dvunda_unews.php' );
require_once ( plugin_dir_path( __FILE__ ) . 'dvunda_fields.php' );

function dvunda_admin_enqueue_scripts() {
		global $pagenow, $typenow;
		
		if ( ($pagenow == 'post.php' || $pagenow == 'post-new.php') && $typenow == 'u_news' ) {
			wp_enqueue_style( 'dvunda-admin-css', plugins_url('css/vu_admin-unews.css', __FILE__ ) );
			wp_enqueue_style( 'dvunda-admin-normalize-css', plugins_url('css/vu_admin-normalize.css', __FILE__ ) );
			wp_enqueue_style( 'dvunda-unews-js', plugins_url('js/vu_admin-unews.js', __FILE__ ), array( 'jquery' ), true );
		// I added normalize.css website https://modernizr.com/ - Modernizr tells you what HTML,
		// CSS and JavaScript features the user’s browser has to offer.
		// AND I added Foundation is a responsive front-end framework made by ZURB. - http://foundation.zurb.com/develop/getting-started.html
			
			}
	
	}
	add_action( 'admin_enqueue_scripts', 'dvunda_admin_enqueue_scripts' );

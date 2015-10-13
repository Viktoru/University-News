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
along with {Plugin Name}. If not, see {License URI}.
*/

//Exit if accessed directly

if ( !defined( 'ABSPATH' ) ) {
    exit();
}

//$dir = plugin_dir_path( __FILE__ );

require_once ( plugin_dir_path( __FILE__ ) . 'dvunda_unews.php' );
require_once ( plugin_dir_path( __FILE__ ) . 'dvunda_fields.php' );


<?php
/*
Plugin Name: Parsons CSS
Plugin URI: https://parsonshosting.com/
Description: This is a plugin that loads custom CSS associated with the active theme. CSS is compiled via SCSS.
Author: Chris Parsons
Author URI: https://parsonshosting.com
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:       parsons-css
Domain Path:       /lang

Copyright (C) 2021 Chris Parsons

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/
  
  // If this file is called directly, abort.
  if ( ! defined( 'WPINC' ) ) {
    die;
  }
  
  /**
   * Currently plugin version.
   * Start at version 1.0.0 and use SemVer - https://semver.org
   * Rename this for your plugin and update it as you release new versions.
   */
  define( 'PARSONS_CSS_VERSION', '1.0.0' );
  
 
register_activation_hook( __FILE__, function() {
  require_once plugin_dir_path( __FILE__ ) . 'src/Activation.php';
  Activation::activate();
} );


  function parsons_css() {
    wp_register_style( 'parsons-css',  plugin_dir_url( __FILE__ ) . 'assets/parsons-css.css' );
    wp_enqueue_style( 'parsons-css' );
  }
  add_action( 'wp_enqueue_scripts', 'parsons_css' );

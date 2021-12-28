<?php
/*
Plugin Name: Parsons CSS
Plugin URI: https://parsonshosting.com/
Description: This is a plugin that loads custom CSS associated with the active theme. CSS is compiled via SCSS.
Author: Chris Parsons
Author URI: https://parsonshosting.com
*/
  
  function parsons_css() {
    wp_register_style( 'parsons-css',  plugin_dir_url( __FILE__ ) . 'assets/parsons-css.css' );
    wp_enqueue_style( 'parsons-css' );
  }
  add_action( 'wp_enqueue_scripts', 'parsons_css' );

<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name: FirstPlugin
Plugin URI: https://github.com/sheema1/firstplugin
Description: A simple WordPress plugin to show pakistan standard time
Version: 1.0
Author: Sheema Sadia
Author URI: http://www.itfellow.com
License: GPL2
*/

if(!class_exists('firstplugin'))
{
	class firstplugin
	{
		/**
		 * Construct the plugin object
		 */
		public function __construct()
		{
			
			add_action( 'init', 'pk_time_register_shortcode' );
		} // END public function __construct

		/**
		 * Activate the plugin
		 */
		public static function activate()
		{
			// Do nothing
		} // END public static function activate

		/**
		 * Deactivate the plugin
		 */
		public static function deactivate()
		{
			// Do nothing
		} // END public static function deactivate
				
	} // END class firstplugin
	
		
} // END if(!class_exists('firstplugin'))

// register actions
function show_pk_shortcode() {
	$timezone = +5;
	return gmdate("j M Y, g:i a", time() + 3600*($timezone+abs(date("I")-1)));
}

function pk_time_register_shortcode() {
		
	add_shortcode( 'pk-time', 'show_pk_shortcode' );
}

// call this plugin	
$first_plugin = new firstplugin();


<?php
/**
 * Plugin Name:     REST API Demo
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          Daniel Bachhuber, Pantheon
 * Author URI:      https://handbuilt.co
 * Text Domain:     rest-api-demo
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Rest_Api_Demo
 */


function rad_format_phone_number( $input ) {
	if ( preg_match( '#([\d]{3})[^\d]*([\d]{3})[^\d]*([\d]{4})#', $input, $matches ) ) {
		return "({$matches[1]}) {$matches[2]}-{$matches[3]}";
	}
	return '';
}
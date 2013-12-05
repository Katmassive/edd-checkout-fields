<?php
/**
 * EDD Purchase form user info.
 *
 * @author  Webvorm <info@webvorm.nl>
 * @license GPLv3
 * @link    http://github.com/webvorm/edd-purchase-form-user-info
 * @version 0.1.0
 *
 * @wordpress-plugin
 * Author URI: http://webvorm.nl/
 * Author: Webvorm
 * Description:
 * Domain Path: lang
 * License: GPLv3
 * Plugin Name: EDD Purchase form user info
 * Plugin URI: http://github.com/webvorm/edd-purchase-form-user-info
 * Text Domain: edd-pfui
 * Version: 0.1.0
 */

if ( ! class_exists( 'Easy_Digital_Downloads' ) ) {
	return;
}

/** Load a plugin's translated strings. */
load_plugin_textdomain( 'edd-pfui', false, dirname( plugin_basename( __FILE__ ) ) . '/lang' );

require_once plugin_dir_path( __FILE__ ) . 'inc/checkout/template.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/emails/template.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/payments/functions.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/process-purchase.php';
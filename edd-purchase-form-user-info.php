<?php
/**
 * EDD Purchase Form User Info
 *
 * @author  Webvorm <info@webvorm.nl>
 * @license GPLv2 or later
 * @link    http://github.com/webvorm/edd-purchase-form-user-info
 *
 * @wordpress-plugin
 * Author URI: http://webvorm.nl/
 * Author: Webvorm
 * Description: Adding custom fields to the Easy Digital Downloads checkout screen. A minimal <a href="http://easydigitaldownloads.com/">Easy Digital Downloads</a> add-on.
 * Domain Path: languages
 * License: GPLv2 or later
 * Plugin Name: EDD Purchase Form User Info
 * Plugin URI: http://github.com/webvorm/edd-purchase-form-user-info
 * Text Domain: edd-purchase-form-user-info
 * Version: 0.1.0
 */

if ( ! class_exists( 'Easy_Digital_Downloads' ) ) {
	return;
}

/** Load a plugin's translated strings */
load_plugin_textdomain( 'edd-purchase-form-user-info', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );

require_once plugin_dir_path( __FILE__ ) . 'inc/checkout/template.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/emails/template.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/payments/functions.php';
require_once plugin_dir_path( __FILE__ ) . 'inc/process-purchase.php';
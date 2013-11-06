<?php
/**
 * Process purchase
 *
 * @author Webvorm <info@webvorm.nl>
 * @license GPLv3
 * @link http://github.com/webvorm/edd-purchase-form-user-info
 */

remove_action( 'edd_purchase_form_after_user_info', 'edd_user_info_fields' );

add_filter( 'edd_purchase_form_required_fields', 'edd_pfui_purchase_form_required_fields' );
/**
 * Purchase form required fields.
 *
 * @param $required_fields
 * @return array
 */
function edd_pfui_purchase_form_required_fields( $required_fields ) {
	$required_fields = array(
		'edd_company' => array(
			'error_id' => 'invalid_company',
			'error_message' => __( 'Please enter your company name.', 'edd-pfui' )
		),
		'edd_first' => array(
			'error_id' => 'invalid_first_name',
			'error_message' => __( 'Please enter your first name.', 'edd-pfui' )
		),
		'edd_last' => array(
			'error_id' => 'invalid_last_name',
			'error_message' => __( 'Please enter your last name.', 'edd-pfui' )
		),
		'edd_street' => array(
			'error_id' => 'invalid_street',
			'error_message' => __( 'Please enter your street name.', 'edd-pfui' )
		),
		'edd_number' => array(
			'error_id' => 'invalid_number',
			'error_message' => __( 'Please enter your street number.', 'edd-pfui' )
		),
		'edd_zip' => array(
			'error_id' => 'invalid_zip',
			'error_message' => __( 'Please enter your zip code.', 'edd-pfui' )
		),
		'edd_city' => array(
			'error_id' => 'invalid_city',
			'error_message' => __( 'Please enter your city.', 'edd-pfui' )
		),
		'edd_phone' => array(
			'error_id' => 'invalid_phone',
			'error_message' => __( 'Please enter your phone number.', 'edd-pfui' )
		),
		'edd_email' => array(
			'error_id' => 'invalid_email',
			'error_message' => __( 'Please enter your email address.', 'edd-pfui' )
		),
		'edd_event' => array(
			'error_id' => 'invalid_event',
			'error_message' => __( 'Please enter your event name.', 'edd-pfui' )
		),
		'edd_location' => array(
			'error_id' => 'invalid_location',
			'error_message' => __( 'Please enter your event location.', 'edd-pfui' )
		),
		'edd_date_begin' => array(
			'error_id' => 'invalid_date_begin',
			'error_message' => __( 'Please enter your event begin date.', 'edd-pfui' )
		),
		'edd_date_end' => array(
			'error_id' => 'invalid_date_end',
			'error_message' => __( 'Please enter your event end date.', 'edd-pfui' )
		)
	);
	return $required_fields;
}
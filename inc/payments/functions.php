<?php
/**
 * Payment functions
 *
 * @author  Webvorm <info@webvorm.nl>
 * @license GPLv3
 * @link    http://github.com/webvorm/edd-purchase-form-user-info
 */

add_filter( 'edd_payment_meta', 'edd_pfui_payment_meta', 10, 2 );
/**
 * Record the payment details.
 *
 * @param $payment_meta
 *
 * @return mixed
 */
function edd_pfui_payment_meta( $payment_meta, $payment_data ) {
	$payment_meta['company'] = isset( $_POST['edd_company'] ) ? sanitize_text_field( $_POST['edd_company'] ) : '';
	// $payment_meta['first'] = isset( $_POST['edd_first'] ) ? sanitize_text_field( $_POST['edd_first'] ) : '';
	// $payment_meta['last'] = isset( $_POST['edd_last'] ) ? sanitize_text_field( $_POST['edd_last'] ) : '';
	$payment_meta['street']   = isset( $_POST['edd_street'] ) ? sanitize_text_field( $_POST['edd_street'] ) : '';
	$payment_meta['number']   = isset( $_POST['edd_number'] ) ? sanitize_text_field( $_POST['edd_number'] ) : '';
	$payment_meta['addition'] = isset( $_POST['edd_addition'] ) ? sanitize_text_field( $_POST['edd_addition'] ) : '';
	$payment_meta['zip']      = isset( $_POST['edd_zip'] ) ? sanitize_text_field( $_POST['edd_zip'] ) : '';
	$payment_meta['city']     = isset( $_POST['edd_city'] ) ? sanitize_text_field( $_POST['edd_city'] ) : '';
	$payment_meta['phone']    = isset( $_POST['edd_phone'] ) ? sanitize_text_field( $_POST['edd_phone'] ) : '';
	$payment_meta['mobile']   = isset( $_POST['edd_mobile'] ) ? sanitize_text_field( $_POST['edd_mobile'] ) : '';
	$payment_meta['fax']      = isset( $_POST['edd_fax'] ) ? sanitize_text_field( $_POST['edd_fax'] ) : '';
	// $payment_meta['email'] = isset( $_POST['edd_email'] ) ? sanitize_text_field( $_POST['edd_email'] ) : '';
	$payment_meta['vat'] = isset( $_POST['edd_vat'] ) ? sanitize_text_field( $_POST['edd_vat'] ) : '';

	$payment_meta['event']      = isset( $_POST['edd_event'] ) ? sanitize_text_field( $_POST['edd_event'] ) : '';
	$payment_meta['location']   = isset( $_POST['edd_location'] ) ? sanitize_text_field( $_POST['edd_location'] ) : '';
	$payment_meta['reference']  = isset( $_POST['edd_reference'] ) ? sanitize_text_field( $_POST['edd_reference'] ) : '';
	$payment_meta['date_begin'] = isset( $_POST['edd_date_begin'] ) ? sanitize_text_field( $_POST['edd_date_begin'] ) : '';
	$payment_meta['time_begin'] = isset( $_POST['edd_time_begin'] ) ? sanitize_text_field( $_POST['edd_time_begin'] ) : '';
	$payment_meta['date_end']   = isset( $_POST['edd_date_end'] ) ? sanitize_text_field( $_POST['edd_date_end'] ) : '';
	$payment_meta['time_end']   = isset( $_POST['edd_time_end'] ) ? sanitize_text_field( $_POST['edd_time_end'] ) : '';
	$payment_meta['comments']   = isset( $_POST['edd_comments'] ) ? sanitize_text_field( $_POST['edd_comments'] ) : '';

	return $payment_meta;
}
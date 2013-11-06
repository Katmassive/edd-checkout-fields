<?php
/**
 * Email template
 *
 * @author Webvorm <info@webvorm.nl>
 * @license GPLv3
 * @link http://github.com/webvorm/edd-purchase-form-user-info
 */

add_filter( 'edd_email_template_tags', 'edd_pfui_email_template_tags', 10, 3 );
/**
 * Email template tags.
 *
 * @param $message
 * @param $payment_data
 * @param $payment_id
 * @return mixed
 */
function edd_pfui_email_template_tags( $message, $payment_data, $payment_id ) {
	$payment_meta = edd_get_payment_meta( $payment_id );

	$company = isset( $payment_meta['company'] ) ? $payment_meta['company'] : 'none';
	// $first = isset( $payment_meta['first'] ) ? $payment_meta['first'] : 'none';
	// $last = isset( $payment_meta['last'] ) ? $payment_meta['last'] : 'none';
	$street = isset( $payment_meta['street'] ) ? $payment_meta['street'] : 'none';
	$number = isset( $payment_meta['number'] ) ? $payment_meta['number'] : 'none';
	$addition = isset( $payment_meta['addition'] ) ? $payment_meta['addition'] : 'none';
	$zip = isset( $payment_meta['zip'] ) ? $payment_meta['zip'] : 'none';
	$city = isset( $payment_meta['city'] ) ? $payment_meta['city'] : 'none';
	$phone = isset( $payment_meta['phone'] ) ? $payment_meta['phone'] : 'none';
	$mobile = isset( $payment_meta['mobile'] ) ? $payment_meta['mobile'] : 'none';
	$fax = isset( $payment_meta['fax'] ) ? $payment_meta['fax'] : 'none';
	// $email = isset( $payment_meta['email'] ) ? $payment_meta['email'] : 'none';
	$vat = isset( $payment_meta['vat'] ) ? $payment_meta['vat'] : 'none';

	$event = isset( $payment_meta['event'] ) ? $payment_meta['event'] : 'none';
	$location = isset( $payment_meta['location'] ) ? $payment_meta['location'] : 'none';
	$reference = isset( $payment_meta['reference'] ) ? $payment_meta['reference'] : 'none';
	$date_begin = isset( $payment_meta['date_begin'] ) ? $payment_meta['date_begin'] : 'none';
	$time_begin = isset( $payment_meta['time_begin'] ) ? $payment_meta['time_begin'] : 'none';
	$date_end = isset( $payment_meta['date_end'] ) ? $payment_meta['date_end'] : 'none';
	$time_end = isset( $payment_meta['time_end'] ) ? $payment_meta['time_end'] : 'none';
	$comments = isset( $payment_meta['comments'] ) ? $payment_meta['comments'] : 'none';

	$message = str_replace( '{company}', $company, $message );
	// $message = str_replace( '{first}', $first, $message );
	// $message = str_replace( '{last}', $last, $message );
	$message = str_replace( '{street}', $street, $message );
	$message = str_replace( '{number}', $number, $message );
	$message = str_replace( '{addition}', $addition, $message );
	$message = str_replace( '{zip}', $zip, $message );
	$message = str_replace( '{city}', $city, $message );
	$message = str_replace( '{phone}', $phone, $message );
	$message = str_replace( '{mobile}', $mobile, $message );
	$message = str_replace( '{fax}', $fax, $message );
	// $message = str_replace( '{email}', $email, $message );
	$message = str_replace( '{vat}', $vat, $message );

	$message = str_replace( '{event}', $event, $message );
	$message = str_replace( '{location}', $location, $message );
	$message = str_replace( '{reference}', $reference, $message );
	$message = str_replace( '{date_begin}', $date_begin, $message );
	$message = str_replace( '{time_begin}', $time_begin, $message );
	$message = str_replace( '{date_end}', $date_end, $message );
	$message = str_replace( '{time_end}', $time_end, $message );
	$message = str_replace( '{comments}', $comments, $message );

	return $message;
}
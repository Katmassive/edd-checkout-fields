<?php
/**
 * Checkout template
 *
 * @author  Webvorm <info@webvorm.nl>
 * @license GPLv3
 * @link    http://github.com/webvorm/edd-purchase-form-user-info
 */

add_action( 'edd_purchase_form_after_user_info', 'edd_pfui_user_info_fields' );
/**
 * Shows the user info fields in the personal info box
 */
function edd_pfui_user_info_fields() {
	if ( is_user_logged_in() ) {
		$user_data = get_userdata( get_current_user_id() );
	}
	?>
	<fieldset>
		<legend><?php _e( 'Company details', 'edd-purchase-form-user-info' ); ?></legend>
		<p>
			<label class="edd-label"><?php _e( 'Company name', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_company' ) ) : ?><span>*</span><?php endif; ?></label>
			<input class="edd-input required" id="edd-company" name="edd_company" type="text">
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Contact', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_first' ) || edd_field_is_required( 'edd_last' ) ) : ?><span>*</span><?php endif; ?></label>
			<span>
				<input class="edd-input required" id="edd-first" name="edd_first" placeholder="<?php _e( 'First name', 'edd-purchase-form-user-info' ); ?>" type="text" value="<?php echo is_user_logged_in() ? $user_data->first_name : ''; ?>">
				<input class="edd-input required" id="edd-last" name="edd_last" placeholder="<?php _e( 'Last name', 'edd-purchase-form-user-info' ); ?>" type="text" value="<?php echo is_user_logged_in() ? $user_data->last_name : ''; ?>">
			</span>
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Address', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_street' ) || edd_field_is_required( 'edd_number' ) ) : ?><span>*</span><?php endif; ?></label>
			<span>
				<input class="edd-input required" id="edd-street" name="edd_street" placeholder="<?php _e( 'Street', 'edd-purchase-form-user-info' ); ?>" type="text">
				<input class="edd-input required" id="edd-number" name="edd_number" placeholder="<?php _e( 'Number', 'edd-purchase-form-user-info' ); ?>" type="number">
				<input class="edd-input" id="edd-addition" name="edd_addition" placeholder="<?php _e( 'Addition', 'edd-purchase-form-user-info' ); ?>" type="text">
			</span>
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Zip code and city', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_zip' ) || edd_field_is_required( 'edd_city' ) ) : ?><span>*</span><?php endif; ?></label>
			<span>
				<input class="edd-input required" id="edd-zip" name="edd_zip" placeholder="<?php _e( 'Zip code', 'edd-purchase-form-user-info' ); ?>" type="text">
				<input class="edd-input required" id="edd-city" name="edd_city" placeholder="<?php _e( 'City', 'edd-purchase-form-user-info' ); ?>" type="text">
			</span>
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Phone', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_phone' ) ) : ?><span>*</span><?php endif; ?></label>
			<input class="edd-input required" id="edd-phone" name="edd_phone" type="tel">
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Mobile', 'edd-purchase-form-user-info' ); ?></label>
			<input class="edd-input" id="edd-mobile" name="edd_mobile" type="tel">
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Fax', 'edd-purchase-form-user-info' ); ?></label>
			<input class="edd-input" id="edd-fax" name="edd_fax" type="tel">
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Email', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_email' ) ) : ?><span>*</span><?php endif; ?></label>
			<input class="edd-input required" id="edd-email" name="edd_email" type="email" value="<?php echo is_user_logged_in() ? $user_data->user_email : ''; ?>">
		</p>

		<p>
			<label class="edd-label"><?php _e( 'VAT number', 'edd-purchase-form-user-info' ); ?></label>
			<input class="edd-input" id="edd-vat" name="edd_vat" type="text">
		</p>
	</fieldset>
	<fieldset>
		<legend><?php _e( 'Event details', 'edd-purchase-form-user-info' ); ?></legend>
		<p>
			<label class="edd-label"><?php _e( 'Event', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_event' ) ) : ?><span>*</span><?php endif; ?></label>
			<input class="edd-input required" id="edd-event" name="edd_event" type="text">
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Location', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_location' ) ) : ?><span>*</span><?php endif; ?></label>
			<input class="edd-input required" id="edd-location" name="edd_location" type="text">
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Reference', 'edd-purchase-form-user-info' ); ?></label>
			<input class="edd-input" id="edd-reference" name="edd_reference" type="text">
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Begin date', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_date_begin' ) ) : ?><span>*</span><?php endif; ?></label>
			<span>
				<input class="edd-input required" id="edd-date-begin" name="edd_date_begin" placeholder="<?php _e( 'Date', 'edd-purchase-form-user-info' ); ?>" type="text">
				<input class="edd-input" id="edd-time-begin" name="edd_time_begin" placeholder="<?php _e( 'Time', 'edd-purchase-form-user-info' ); ?>" type="text">
			</span>
		</p>

		<p>
			<label class="edd-label"><?php _e( 'End date', 'edd-purchase-form-user-info' ); ?><?php if ( edd_field_is_required( 'edd_date_end' ) ) : ?><span>*</span><?php endif; ?></label>
			<span>
				<input class="edd-input required" id="edd-date-end" name="edd_date_end" placeholder="<?php _e( 'Date', 'edd-purchase-form-user-info' ); ?>" type="text">
				<input class="edd-input" id="edd-time-end" name="edd_time_end" placeholder="<?php _e( 'Time', 'edd-purchase-form-user-info' ); ?>" type="text">
			</span>
		</p>

		<p>
			<label class="edd-label"><?php _e( 'Comments', 'edd-purchase-form-user-info' ); ?></label>
			<textarea class="edd-input" id="edd-comments" name="edd_comments" type="text"></textarea>
		</p>
	</fieldset>
	<?php
}
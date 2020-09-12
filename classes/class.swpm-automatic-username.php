<?php

/**
 * SwpmAutomaticUsername
 */

class SwpmAutomaticUsername {

	public function __construct() {
		if ( class_exists( 'SimpleWpMembership' ) ) {
			// Register some actions to be able to edit the settings of this plugin in the Admin area
			add_action('swpm_addon_settings_section', array(&$this, 'settings_ui'));
			add_action('swpm_addon_settings_save', array(&$this, 'settings_save'));

			// On init, load the languages files
			add_action('init', array(&$this, 'swpm_automatic_username_load_plugin_textdomain'));

			// Insert the PHP code required for the SWPM Registration and Login forms
			add_filter('swpm_registration_form_set_username', array(&$this, 'set_username_in_registration_form'));
			add_filter('swpm_login_form_set_username_label', array(&$this, 'set_username_label_in_login_form'));

			// Insert the PHP code required to show/hide the Username <tr> lines in the forms
			add_filter('swpm_registration_form_username_tr_attributes', array(&$this, 'set_username_tr_attributes'));
			add_filter('swpm_login_form_username_tr_attributes', array(&$this, 'set_username_tr_attributes'));
			add_filter('swpm_edit_profile_form_username_tr_attributes', array(&$this, 'set_username_tr_attributes'));
		}
	}

	// Function that load the translation files for this addon
	public function swpm_automatic_username_load_plugin_textdomain() {
		$loaded = load_plugin_textdomain(SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME, false, SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME."/languages");
	}

	// Function that load the addon settings and show it in the Admin Pages
	public function settings_ui() {
		// Get the settings from WP
		$settings = SwpmSettings::get_instance();
		$swpm_automatic_username_enable = $settings->get_value('swpm-addon-automatic-username-enable');

		// And show the Settings HTML Form
		require_once (SWPM_AUTOMATIC_USERNAME_PLUGIN_FOLDER."/views/settings.php");
	}

	// Function that save the addon settings
	public function settings_save() {
		// Show sucess message
		$message = array( 'succeeded' => true, 'message' => '<p>' . BUtils::_( 'Settings updated!' ) . '</p>' );
		SwpmTransfer::get_instance()->set('status', $message);

		// Get settings values from the Admin Form
		$swpm_automatic_username_enable = filter_input(INPUT_POST, 'swpm-addon-automatic-username-enable');

		// Save the settings to WP
		$settings = SwpmSettings::get_instance();
		$settings->set_value('swpm-addon-automatic-username-enable', empty( $swpm_automatic_username_enable ) ? '' : $swpm_automatic_username_enable);

		// Save the values
		$settings->save();
	}

	// Function that will insert the PHP code into the Registration Form
	public function set_username_in_registration_form($user_name) {
		// Get the settings from WP
		$settings = SwpmSettings::get_instance();
		$enabled  = $settings->get_value('swpm-addon-automatic-username-enable');

		// If the addon is enabled, generate the user_name
		if ( !empty($enabled) ) {
			$user_name=date('ymdHi').mt_rand(1000, 9999);
		}

		// Return the user_name
		return $user_name;
	}

	public function set_username_label_in_login_form($username_label) {
		// Get the settings from WP
		$settings = SwpmSettings::get_instance();
		$enabled  = $settings->get_value('swpm-addon-automatic-username-enable');

		// If the addon is enabled, update the username_label
		if ( !empty($enabled) ) {
			$username_label = __('Email',SWPM_AUTOMATIC_USERNAME_PLUGIN_NAME);
		}

		// Return the username_label
		return $username_label;
	}

	public function set_username_tr_attributes() {
		// Get the settings from WP
		$settings = SwpmSettings::get_instance();
		$enabled  = $settings->get_value('swpm-addon-automatic-username-enable');

		// If the addon is enabled, set the attribute to 'hidden'
		if ( !empty($enabled) ) {
			echo " hidden ";
		}
	}

}

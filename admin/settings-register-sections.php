<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
	
	function light_weight_wa_chatting_settings_menu_item() {

		if (!current_user_can( 'manage_options' ) ) {
			return;
		}

		add_menu_page( 'WhatsApp Settings', 'WhatsApp', 'manage_options', 'light_weight_wa_chatting_settings_menu_options', 'light_weight_wa_chatting_settings_menu_added', 'dashicons-whatsapp', 0 );
		
		add_action( 'admin_init', 'light_weight_wa_chatting_register_settings' );
	
	}
	
	add_action( 'admin_menu', 'light_weight_wa_chatting_settings_menu_item' );
	
	function light_weight_wa_chatting_register_settings() {
		
		register_setting( 'light-weight-wa-chatting-setting-page-group', 'show_on_website' );
		register_setting( 'light-weight-wa-chatting-setting-page-group', 'phone_number' );
		register_setting( 'light-weight-wa-chatting-setting-page-group', 'theme' );
		register_setting( 'light-weight-wa-chatting-setting-page-group', 'position' );
		register_setting( 'light-weight-wa-chatting-setting-page-group', 'animation' );
		
		add_settings_section( 'light-weight-wa-chatting-section', '<div class="wrap"><h1>WhatsApp Chatting Button Settings Section</h1></div>', 'light_weight_wa_chatting_section_added', 'light_weight_wa_chatting_settings_menu_options' );
		
		add_settings_field( 'light-weight-wa-chatting-show-on-website', 'Show On Website:', 'light_weight_wa_chatting_show_on_website_callback', 'light_weight_wa_chatting_settings_menu_options', 'light-weight-wa-chatting-section', [
			'id'    => 'light_weight_wa_chatting_show_on_website',
			'label' => 'Yes.'
			]
		);

		add_settings_field( 'light-weight-wa-chatting-phone-number', 'WhatsApp Phone Number:', 'light_weight_wa_chatting_phone_number_callback', 'light_weight_wa_chatting_settings_menu_options', 'light-weight-wa-chatting-section', [
			'id'    => 'light_weight_wa_chatting_phone_number',
			'label' => 'Use the format in the place holder text field'
			]
		);

		add_settings_field( 'light-weight-wa-chatting-theme', 'WhatsApp Button Theme:', 'light_weight_wa_chatting_theme_callback', 'light_weight_wa_chatting_settings_menu_options', 'light-weight-wa-chatting-section', [
			'id'    => 'light_weight_wa_chatting_theme',
			'label' => 'Custom URL for the theme settings field'
			]
		);

		add_settings_field( 'light-weight-wa-chatting-position', 'WhatsApp Button Position:', 'light_weight_wa_chatting_position_callback', 'light_weight_wa_chatting_settings_menu_options', 'light-weight-wa-chatting-section', [
			'id'    => 'light_weight_wa_chatting_position',
			'label' => 'Custom URL for the position settings field'
			]
		);
		
		add_settings_field( 'light-weight-wa-chatting-animation', 'WhatsApp Button Animation:', 'light_weight_wa_chatting_animation_callback', 'light_weight_wa_chatting_settings_menu_options', 'light-weight-wa-chatting-section', [
			'id'    => 'light_weight_wa_chatting_animation',
			'label' => 'With Entrance Animation.'
			]
		);
	
	}
?>
<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	$light_weight_wa_chatting_options = "";
	$light_weight_wa_chatting_id      = "";
	$light_weight_wa_chatting_label   = "";
	$light_weight_wa_chatting_value   = "";

	function light_weight_wa_chatting_settings_menu_added() {
		include_once( plugin_dir_path( __FILE__ ) . 'settings-page.php' );
	}

	function light_weight_wa_chatting_section_added( $arg ) {
		echo '<p>This Section used to modify the setting of the Whatsapp chatting button.</p>';
	}

	function light_weight_wa_chatting_show_on_website_callback( $args ) {
		
		$light_weight_wa_chatting_options = get_option( 'show_on_website', light_weight_wa_chatting_options_default() );
		$light_weight_wa_chatting_id      = isset( $args['id'] ) ? $args['id'] : '';
		$light_weight_wa_chatting_label   = isset( $args['label'] ) ? $args['label'] : '';
		$checked = isset( $light_weight_wa_chatting_options[$light_weight_wa_chatting_id] ) ? checked( 1, $light_weight_wa_chatting_options[$light_weight_wa_chatting_id], false ) : '';
		
		echo '<input type="checkbox" id="show_on_website_' . esc_html($light_weight_wa_chatting_id) . '" class="form-control"  name="show_on_website[' . esc_html($light_weight_wa_chatting_id) . ']" value="1" ' . esc_html($checked) . '>';
		
		echo '<label style="color:#000000;" for="show_on_website_' . esc_html($light_weight_wa_chatting_id) . '">' . esc_html($light_weight_wa_chatting_label) . '</label>';
	
	}

	function light_weight_wa_chatting_phone_number_callback( $args ) {
		
		$light_weight_wa_chatting_options = get_option( 'phone_number', light_weight_wa_chatting_options_default() );
		$light_weight_wa_chatting_id      = isset( $args['id'] ) ? $args['id'] : '';
		$light_weight_wa_chatting_label   = isset( $args['label'] ) ? $args['label'] : '';
		$light_weight_wa_chatting_value   = isset( $light_weight_wa_chatting_options[$light_weight_wa_chatting_id] ) ? sanitize_text_field( $light_weight_wa_chatting_options[$light_weight_wa_chatting_id] ) : '';
		
		echo '<input type="text" id="phone_number_' . esc_html( $light_weight_wa_chatting_id ) . '" class="form-control-light-weight-wa-chatting" name="phone_number[' . esc_html( $light_weight_wa_chatting_id ) . ']" value="' . esc_html( $light_weight_wa_chatting_value ) . '" placeholder="962770502854" maxlength="14">';
	
	}
	function light_weight_wa_chatting_theme_callback( $args ) {
		
		$light_weight_wa_chatting_options         = get_option( 'theme', light_weight_wa_chatting_options_default() );
		$light_weight_wa_chatting_id              = isset( $args['id'] ) ? $args['id'] : '';
		$selected_option = isset( $light_weight_wa_chatting_options[$light_weight_wa_chatting_id] ) ? sanitize_text_field( $light_weight_wa_chatting_options[$light_weight_wa_chatting_id] ) : '';
		
		$select_options  = array(
			'green-bg-white-icon' => 'Green Background With White Icon',
			'white-bg-green-icon' => 'White Background With Green Icon'
		);
		
		echo '<select class="form-control-light-weight-wa-chatting" name="theme[' . esc_html( $light_weight_wa_chatting_id ) . ']" id="theme_' . esc_html( $light_weight_wa_chatting_id ) . '">';
		
		foreach( $select_options as $light_weight_wa_chatting_value => $option ) {
			$selected = selected( $selected_option === $light_weight_wa_chatting_value, true, false );
			echo '<option value="' . esc_html( $light_weight_wa_chatting_value ) . '" ' . esc_html( $selected ) . '>' . esc_html( $option ) . '</option>';
		}
		
		echo '</select>';

	}
	function light_weight_wa_chatting_position_callback( $args ) {
		$light_weight_wa_chatting_options         = get_option( 'position', light_weight_wa_chatting_options_default() );
		$light_weight_wa_chatting_id              = isset( $args['id']) ? $args['id'] : '';
		$selected_option = isset( $light_weight_wa_chatting_options[$light_weight_wa_chatting_id] ) ? sanitize_text_field( $light_weight_wa_chatting_options[$light_weight_wa_chatting_id] ) : '';
		
		$select_options  = array(
			'light-weight-wa-chatting-whatsapp-bottom-right-hide-at-start'  => 'Bottom-Right',
			'light-weight-wa-chatting-whatsapp-bottom-left-hide-at-start'   => 'Bottom-Left',
			'light-weight-wa-chatting-whatsapp-bottom-center-hide-at-start' => 'Bottom-center',
			'light-weight-wa-chatting-whatsapp-top-right-hide-at-start'     => 'Top-Right',
			'light-weight-wa-chatting-whatsapp-top-left-hide-at-start'      => 'Top-Left',
			'light-weight-wa-chatting-whatsapp-top-center-hide-at-start'    => 'Top-center' );
		
		echo '<select class="form-control-light-weight-wa-chatting" name="position[' . esc_html( $light_weight_wa_chatting_id ) . ']" id="position_' . esc_html( $light_weight_wa_chatting_id ) . '">';
		
		foreach( $select_options as $light_weight_wa_chatting_value => $option ) {
			$selected = selected( $selected_option === $light_weight_wa_chatting_value, true, false );
			echo '<option value="' . esc_html( $light_weight_wa_chatting_value ) . '" ' . esc_html( $selected ) . '>' . esc_html( $option ) . '</option>';
		}

		echo '</select>';

	}
	function light_weight_wa_chatting_animation_callback( $args ) {
		$light_weight_wa_chatting_options = get_option( 'animation', light_weight_wa_chatting_options_default());
		$light_weight_wa_chatting_id      = isset( $args['id'] ) ? $args['id'] : '';
		$light_weight_wa_chatting_label   = isset( $args['label'] ) ? $args['label'] : '';
		$checked = isset( $light_weight_wa_chatting_options[$light_weight_wa_chatting_id] ) ? checked(1, $light_weight_wa_chatting_options[$light_weight_wa_chatting_id], false) : '';
		
		echo '<input type="checkbox" id="animation_' . esc_html( $light_weight_wa_chatting_id ) . '" class="form-control"  name="animation[' . esc_html( $light_weight_wa_chatting_id ) . ']" value="1" ' . esc_html( $checked ) . '>';
		
		echo '<label style="color:#000000;" for="animation_' . esc_html( $light_weight_wa_chatting_id ) . '">' . esc_html( $light_weight_wa_chatting_label ) . '</label>';
	
	}
?>
<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	function light_weight_wa_chatting_styles() {
		wp_enqueue_style( 'light-weight-wa-chatting-main-css', plugin_dir_url( __FILE__ ) . "assets/css/css.css", array(), '1.0', 'screen' );
	}

	add_action( 'wp_enqueue_scripts', 'light_weight_wa_chatting_styles' );
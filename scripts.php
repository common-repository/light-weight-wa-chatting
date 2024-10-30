<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	function light_weight_wa_chatting_scripts() {		
		wp_enqueue_script( 'light-weight-wa-chatting-main-js', plugin_dir_url( __FILE__ ) . "assets/js/js.js", array(), '1.0', true );
	}
	
	add_action( 'wp_enqueue_scripts', 'light_weight_wa_chatting_scripts' );
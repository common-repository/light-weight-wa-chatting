<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
	
	function light_weight_wa_chatting_activate() {
		if ( !current_user_can( 'activate_plugins' ) ) {
			return;
		} else {
			flush_rewrite_rules();
		}
	}
	register_activation_hook( __FILE__ , 'light_weight_wa_chatting_activate' );
?>
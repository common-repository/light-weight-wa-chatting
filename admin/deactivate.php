<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	function light_weight_wa_chatting_deactivate() {
		if ( !current_user_can( 'activate_plugins' ) ) {
			return;
		} else {
			flush_rewrite_rules();
		}
	}
	register_deactivation_hook( __FILE__ , 'light_weight_wa_chatting_deactivate' );
?>
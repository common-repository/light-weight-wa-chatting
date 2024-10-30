<?php
	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
	
	function light_weight_wa_chatting_uninstall() {
		if (!current_user_can( 'activate_plugins' ) ) {
			return;
		} else {
			if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
				die;
			}else{
				delete_option( 'show_on_website' );
				delete_option( 'phone_number' );
				delete_option( 'theme' );
				delete_option( 'position' );
				delete_option( 'animation' );
				flush_rewrite_rules(); 
			}
		}
	}
	
	register_uninstall_hook( __FILE__ , 'light_weight_wa_chatting_uninstall' );
?>
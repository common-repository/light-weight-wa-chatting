<?php
	/**
	* Plugin Name: Light Weight Plugin for WhatsApp Chatting
	* Plugin URI: https://www.emad-zedan.com
	* Description: Customize the WordPress theme with powerful, professional, and intuitive WhatsApp chatting capability.
	* Version: 1.0.3
	* Requires at least: 5.2
	* Requires PHP: 7.4
	* Author: Emad Zedan
	* Author URI: https://www.emad-zedan.com
	* License: GPLv2 or Later
	* License URI: https://www.gnu.org/licenses/gpl-2.0.txt
	* Text Domain: light_weight_wa_chatting
	* Domain Path: /languages
	*/
	
	if(!defined('ABSPATH')) {
		exit;
	}

	include_once( plugin_dir_path( __FILE__ ) . 'admin/activate.php' );
	include_once( plugin_dir_path( __FILE__ ) . 'admin/deactivate.php' );
	include_once( plugin_dir_path( __FILE__ ) . 'admin/uninstall.php' );
	include_once( plugin_dir_path( __FILE__ ) . 'admin/settings-register-sections.php' );
	include_once( plugin_dir_path( __FILE__ ) . 'admin/settings-callback-function.php' );
	include_once( plugin_dir_path( __FILE__ ) . 'styles.php' );
	include_once( plugin_dir_path( __FILE__ ) . 'scripts.php' );
	
	function light_weight_wa_chatting_options_default() {
		return array(
			'custom_url'     => 'https://emad-zedan.com/',
			'custom_title'   => 'powered by Emad Zedan',
			'custom_style'   => 'disable',
			'custom_message' => '<p class="custom-message">Light weight WhatsApp chatting!</p>',
			'custom_footer'  => 'Thank you for using my plugin',
			'custom_toolbar' => false,
			'custom_scheme'  => 'default');
	}
?>
<?php 
	if( !is_admin() ){
?>
		<div id="light-weight-wa-chatting" class="light-weight-wa-chatting" data-animation="<?php ( get_option( "animation" ) != null) ? esc_html(print( "animate" )) : esc_html( print( "donotanimate" ) ); ?>" data-showonwebsite="<?php ( get_option( "show_on_website" ) != null ) ? esc_html(print( "show" )) : esc_html( print( "hide" ) ); ?>">
			<div id="light-weight-wa-chatting-position" class="<?php echo esc_html( get_option( "position" )["light_weight_wa_chatting_position"] ); ?>">
				<a href="<?php echo esc_url("https://api.whatsapp.com/send?phone=" . esc_html( get_option( "phone_number" )["light_weight_wa_chatting_phone_number"] ) ); ?>" target="_blank">
					<span id="light-weight-wa-chatting-theme" class="<?php echo esc_html( get_option( "theme" )["light_weight_wa_chatting_theme"] ); ?>"></span>
				</a>
			</div>
		</div>
<?php 
	} 
?>
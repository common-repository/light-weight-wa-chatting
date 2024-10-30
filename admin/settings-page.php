<?php
    if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}
?>
<form method="post" action="options.php">
    <?php
        settings_fields( 'light-weight-wa-chatting-setting-page-group' );
        do_settings_sections( 'light_weight_wa_chatting_settings_menu_options' );
        submit_button( $text = 'Save', $type = "primary", $name = "submit" );
    ?>
</form>
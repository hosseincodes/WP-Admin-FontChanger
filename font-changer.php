<?php
// Speed Learn FontChanger
function WordPressAdminFontChanger() {
	wp_enqueue_style( 'custom_admin_panel_style', plugin_dir_url( __FILE__ )  . 'font-changer.css' );
}
add_action( 'admin_enqueue_scripts', 'WordPressAdminFontChanger' );
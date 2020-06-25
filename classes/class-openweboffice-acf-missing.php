<?php
/**
 * Check ACF Pro Plugin active or not on theme activation.
 *
 * @package WordPress
 * @subpackage Open_Web_Office
 * @since Open Web Office 1.0
 */

if( !class_exists('acf') )
{
	$tp_acf_notice_msg = __( 'This Theme needs "Advanced Custom Fields Pro" to run. Please download and activate it', 'open-web-office-acf-flexible' );
	
	/*
	*	Admin notice
	*/
	add_action( 'admin_notices', 'tp_notice_missing_acf' );
	function tp_notice_missing_acf()
	{
		global $tp_acf_notice_msg;
		
		echo '<div class="notice notice-error notice-large"><div class="notice-title">'. $tp_acf_notice_msg .'</div></div>';
    }

	/*
	*	Frontend notice
	*/
	add_action( 'template_redirect', 'tp_notice_frontend_missing_acf', 0 );
	function tp_notice_frontend_missing_acf()
	{
		global $tp_acf_notice_msg;
		
		wp_die( $tp_acf_notice_msg );
    }
    
    add_action( 'after_switch_theme', 'check_required_theme_plugins', 10, 2 );
    function check_required_theme_plugins( $oldtheme_name, $oldtheme ) {
        // Switch back to previous theme
        switch_theme( $oldtheme->stylesheet );
        return false;
    }

}
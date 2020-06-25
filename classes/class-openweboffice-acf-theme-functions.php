<?php
/**
 * ACF Custom functions for this theme.
 *
 * @package WordPress
 * @subpackage Open_Web_Office
 * @since Open Web Office 1.0
*/

if ( ! class_exists( 'OpenWebOffice_ACF_Theme_Functions' ) ) {

    /**
	 * ACF Custom Theme Functions
	 */
	class OpenWebOffice_ACF_Theme_Functions {

        public function __construct() {

            // Register options page
            add_action( 'init', array( $this, 'register_options_page' ) );           
    
        }  
        
        /**
         * Register Options Page
         *
         */
        public function register_options_page() {
            if( function_exists('acf_add_options_page') ) {
                acf_add_options_page(array(
                    'page_title' 	=> 'Theme Option',
                    'menu_title'	=> 'Theme Option',
                    'menu_slug' 	=> 'theme-option',
                    'capability'	=> 'edit_posts'
                ));
                acf_add_options_page(array(
                    'page_title'  => 'Theme Option',
                    'menu_title' => 'Theme Option',
                    'menu_slug'  => 'general-settings',
                    'parent_slug' => 'theme-option',
                    'redirect'  => false
                ));
            }
        }

    }
    
}
new OpenWebOffice_ACF_Theme_Functions();
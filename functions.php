<?php
/**
 * Open Web Office functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Open_Web_Office
 * @since Open Web Office 1.0
 */

/**
 * Table of Contents:
 * Required Include foler Files
 * Required Class foler Files
 */


/*
 * Add required Includes files.
 */
$includes_files = array(
    'template-tags.php',
	'svg-icons.php',  
	'theme-functions.php',
	'custom-theme-functions.php'  
);

foreach($includes_files as $filename){
    require_once 'includes/' . $filename ;
}

/*************************************/

/*
 * Add required Class files.
 */
$class_files = array(
    'class-openweboffice-svg-icons.php',
	'class-openweboffice-customize.php',
	'class-openweboffice-walker-page.php',
	'class-openweboffice-walker-comment.php',    
	'class-openweboffice-script-loader.php',
	'class-openweboffice-non-latin-languages.php',
	'class-openweboffice-acf-missing.php',
	'class-openweboffice-acf-theme-functions.php',	
);
if (class_exists('ACF')) {
	$enalble_custom_post_type_module = get_field("enalble_custom_post_type_module","option");
	array_push($class_files,"class-openweboffice-custom-post-type-module.php");	
}
foreach($class_files as $class_file){
    require_once 'classes/' . $class_file ;
}
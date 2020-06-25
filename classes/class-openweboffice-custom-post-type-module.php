<?php
/**
 * ACF Pro Plugin Custom Post type Module in Theme Option.
 *
 * @package WordPress
 * @subpackage Open_Web_Office
 * @since Open Web Office 1.0
*/
// Enable module / Disable Module theme option field
$enalble_custom_post_type_module = get_field("enalble_custom_post_type_module","option");
if ( ! class_exists( 'OpenWebOffice_ACF_Custom_Post_Type_Module' ) ) {
    class OpenWebOffice_ACF_Custom_Post_Type_Module{

        /* Class constructor */
        public function __construct()
        {
            add_action( 'init', array( $this, 'register_post_type' ) );
            add_action( 'init',array( $this,'add_taxonomy') );		
        }
        /* ACF Theme option custom post type register function */
        function register_post_type() {

            $enalble_custom_post_type_module = get_field("enalble_custom_post_type_module","option");

            if($enalble_custom_post_type_module):

                // check if the repeater field has rows of data
                if( have_rows("add_custom_post_type","option") ):

                    // loop through the rows of data
                    while ( have_rows("add_custom_post_type","option") ) : the_row();	
                        //Capitilize the words and make it plural
                        $post_type_name = get_sub_field("post_type_name");
                        $allow_single_post_view = get_sub_field("allow_single_post_view");
                        $has_archive = get_sub_field("has_archive");
                        $menu_icon = get_sub_field("menu_icon");
                        $name       = self::beautify( $post_type_name );
                        $plural     = self::pluralize( $name );	
                        $slug       = self::uglify($name);	
                        $no_found = "No ".strtolower( $plural )." found";
                        $not_found_in_trash =  "No ".strtolower( $plural ). " found in Trash";
                        
                        $labels = array_merge(
                            // Default
                            array(
                                "name"                  => _x( $plural , "post type general name", "open-web-office-acf-flexible" ),
                                "singular_name"         => _x( $name, "post type singular name", "open-web-office-acf-flexible" ),
                                "add_new"               => _x( "Add New", strtolower( $name ), "open-web-office-acf-flexible" ),
                                "add_new_item"          => __( "Add New " . $name, "open-web-office-acf-flexible" ),
                                "edit_item"             => __( "Edit " . $name, "open-web-office-acf-flexible" ),
                                "new_item"              => __( "New " . $name, "open-web-office-acf-flexible" ),
                                "all_items"             => __( "All " . $plural, "open-web-office-acf-flexible" ),
                                "view_item"             => __( "View " . $name, "open-web-office-acf-flexible" ),
                                "search_items"          => __( "Search " . $plural, "open-web-office-acf-flexible" ),
                                "not_found"             => __( $no_found, "open-web-office-acf-flexible"),
                                "not_found_in_trash"    => __( $not_found_in_trash, "open-web-office-acf-flexible"), 
                                "parent_item_colon"     => "",
                                "menu_name"             => $plural
                            ),
                        );
                        
                        // Same principle as the labels. We set some defaults and overwrite them with the given arguments.
                        $args = array_merge(		 
                            // Default
                            array(
                                'label'                 => $plural,
                                'labels'                => $labels,
                                'public'                => true,
                                'show_ui'               => true,
                                'supports'           	=> array( 'title', 'editor', 'thumbnail' ),
                                'show_in_nav_menus'     => true,
                                'menu_icon'				=> $menu_icon
                            ),						 
                        );

                        if($allow_single_post_view){
                            $args['publicly_queryable'] = true;
                        }else{
                            $args['publicly_queryable'] = false;
                        }
                        if($has_archive){
                            $args['has_archive'] = true;
                        }else{
                            $args['has_archive'] = false;
                        }
                        register_post_type( $slug, $args );

                    endwhile;

                endif;

            endif;
        }
        /* ACF Theme option custom taxonomy array function */
        public function add_taxonomy() {
            
            $enalble_custom_post_type_module = get_field("enalble_custom_post_type_module","option");
            
            if($enalble_custom_post_type_module):

                // check if the repeater field has rows of data
                if( have_rows("add_custom_post_type","option") ):

                    // loop through the rows of data
                    while ( have_rows("add_custom_post_type","option") ) : the_row();	
                        
                        $post_type_name = get_sub_field("post_type_name");
                        $add_custom_taxonomy = get_sub_field("add_custom_taxonomy");
                        $name       = self::beautify( $post_type_name );
                        $slug       = self::uglify($name);	

                        if($add_custom_taxonomy):
                            
                            if( have_rows("custom_taxonomies","option") ):

                                while ( have_rows("custom_taxonomies","option") ) : the_row();	

                                    $custom_taxonomies_name = get_sub_field("custom_taxonomies_name");

                                    // Taxonomy properties
                                    $taxonomy_slug      = self::uglify( $custom_taxonomies_name );
                                    
                                    //Capitilize the words and make it plural
                                    $taxonomy_name = self::beautify( $custom_taxonomies_name );
                                    $taxonomy_plural = self::pluralize( $custom_taxonomies_name );

                                    // Default labels, overwrite them with the given labels.
                                    $taxonomy_labels = array(
                                        "name"                  => _x( $taxonomy_plural, "taxonomy general name", "open-web-office-acf-flexible" ),
                                        "singular_name"         => _x( $taxonomy_name, "taxonomy singular name", "open-web-office-acf-flexible" ),
                                        "search_items"          => __( "Search " . $taxonomy_plural, "open-web-office-acf-flexible" ),
                                        "all_items"             => __( "All " . $taxonomy_plural, "open-web-office-acf-flexible" ),
                                        "parent_item"           => __( "Parent " . $taxonomy_name, "open-web-office-acf-flexible" ),
                                        "parent_item_colon"     => __( "Parent " . $taxonomy_name, "open-web-office-acf-flexible" ),
                                        "edit_item"             => __( "Edit " . $taxonomy_name, "open-web-office-acf-flexible" ),
                                        "update_item"           => __( "Update " . $taxonomy_name, "open-web-office-acf-flexible" ),
                                        "add_new_item"          => __( "Add New " . $taxonomy_name, "open-web-office-acf-flexible" ),
                                        "new_item_name"         => __( "New " . $taxonomy_name, "open-web-office-acf-flexible" ),
                                        "menu_name"             => __( $taxonomy_name, "open-web-office-acf-flexible" ),
                                    );
                                    
                                    // Default arguments, overwritten with the given arguments
                                    $taxonomy_args = array_merge(							
                                        // Default
                                        array(
                                            'labels'                 => $taxonomy_labels,
                                            'hierarchical'          => true,																		
                                            'show_ui'               => true,
                                            'show_in_nav_menus'     => true,
                                            'show_admin_column' 	=> true,
                                            'query_var'             => true,
                                            'rewrite'               => array( 'slug' => $taxonomy_slug ),
                                        ),
                                    
                                    );
                                    
                                    register_taxonomy( $taxonomy_slug, $slug, $taxonomy_args );

                                endwhile;

                            endif;

                        endif;

                    endwhile;
                    
                endif;

            endif;
        }  
        
        /* Optimize */
        public static function beautify( $string ){
            return ucwords( str_replace( '-', ' ', $string ) );
        }
        
        public static function uglify( $string ){
            return strtolower( str_replace( ' ', '-', $string ) );
        }
        
        /* pluralize */
        public static function pluralize( $string )
        {
            $last = $string[strlen( $string ) - 1];

            if( $last == 'y' ){
                $cut = substr( $string, 0, -1 );
                //convert y to ies
                $plural = $cut . 'ies';
            }
            else if( $string == 'News' ){
                $plural = $string;
            }
            else{
                // just attach an s
                $plural = $string . 's';
            }
            
            return $plural;
        }
    
    }
}
if($enalble_custom_post_type_module){ 
    new OpenWebOffice_ACF_Custom_Post_Type_Module();
}
<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add desktop menu walker */
require_once( 'library/menu-walker.php' );

/** Add off-canvas menu walker */
require_once( 'library/offcanvas-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Header image */
require_once( 'library/custom-header.php' );



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Configuração Curso',
		'menu_title'	=> 'Configuração Curso',
		'menu_slug' 	=> 'course-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'parent_slug'	=> 'edit.php?post_type=curso',
	));
	 
}


// add_submenu_page( $parent_slug, $page_title, $menu_title, $capability, $menu_slug, $function ); 


// add_action('admin_menu', 'register_my_custom_submenu_page');

// function register_my_custom_submenu_page() {
//   add_submenu_page( 
//   	'edit.php?post_type=curso', 
//   	'My Custom Submenu Page', 
//   	'My Custom Submenu Page', 
//   	'manage_options', 
//   	'my-custom-submenu-page', 
//   	'my_custom_submenu_page_callback' 
//   	);
// }

// function my_custom_submenu_page_callback() {
//   echo '<div class="wrap"><div id="icon-tools" class="icon32"></div>';
//     echo '<h2>My Custom Submenu Page</h2>';
//     echo 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem officiis, optio, possimus enim consectetur sint commodi at ipsa iusto labore deserunt modi unde animi quia rem recusandae provident eos dolorum!';
//   echo '</div>';

// }

 
 



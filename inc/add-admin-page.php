<?php

/*
#####################
Admin page
##################### 
*/

function saimx_add_admin_page()
{
    add_menu_page('Saimx Theme Option', 'Theme Options', 'manage_options', 'saimx_menu_page', 'call_for_admin_menu');
    
    add_submenu_page('saimx_menu_page', 'Saimx Theme Options', 'General', 'manage_options', 'saimx_menu_page', 'call_for_admin_menu');
    
    
    add_submenu_page('saimx_menu_page', 'Saimx Css Options', 'Custome Css', 'manage_options', 'saimx_menu_page', 'custome_css_for_theme');
}

add_action('admin_menu', 'saimx_add_admin_page');

    	add_action( 'admin_init', 'saimx_custom_settings' );

#--------------------------------------------------------
function saimx_custom_settings() {
	register_setting( 'saimx-settings-group', 'first_name');
	
	add_settings_section( 'saimx-sidebar-options', 'Sidebar Option', 'saimx_sidebar_options', 'alecaddd_sunset');
	
	add_settings_field( 'sidebar-name', 'First Name', 'saimx_sidebar_name', 'alecaddd_sunset', 'saimx-sidebar-options');
}


function saimx_sidebar_options() {
	echo 'Customize your Sidebar Information';
}
 


function saimx_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name' ) );
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name" />';
}

#--------------------------------------------------------


function call_for_admin_menu()
{
 require_once get_template_directory() . '/inc/templates/admin-index.php';
    
}

function custome_css_for_theme()
{
    
}

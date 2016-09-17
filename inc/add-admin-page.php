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


function call_for_admin_menu()
{
 require_once get_template_directory() . '/inc/templates/admin-index.php';
    
}

function custome_css_for_theme()
{
    
}

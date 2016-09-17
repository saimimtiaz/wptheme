<?php

/*
#####################
 Admin page
##################### 
*/



function saimx_add_admin_page(){
add_menu_page('Saimx Theme Option','Theme Options','manage_options','saimx-menu-page','call_for_admin_menu');
}

add_action('admin_menu','saimx_add_admin_page');


function call_for_admin_menu(){


}


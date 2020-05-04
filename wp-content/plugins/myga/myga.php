<?php
/**
*Plugin Name: Adding google analytics token
*Description: Plugin to add google analytics script in the header of the site in convenient way
**/

function add_ga_menu_option()
{
    add_menu_page('Add google analytics script', 'GA script','manage_options','ga-admin-menu','ga_scripts_page','',200);
}

add_action('admin_menu','add_ga_menu_option');



?>
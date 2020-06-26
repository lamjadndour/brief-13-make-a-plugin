<?php

/*
Plugin Name: MyPlugins
Description: Just an extension of Wordpress Simple with 2 sub-menus: 1st for general plugin information and the 2nd for settings.
Version: 1.0
Author: Lamjad NDOUR & Othmane HANNOUNE
Author URI: www.google.ma
License: GPLv2 or later
Text Domain: NDOUR&HANNOUNE
*/
?>

<?php

add_action('admin_menu', 'admin_menu');

function admin_menu()
{
	// add_menu_page("page-name","menu-title","capapility","Slug","function","icon","position");
	add_menu_page("General information", "My Plugin", "manage_options", "PLUGIN_MENU", "Description_admin_page", "dashicons-shield", 2);
	// add_submenu_page("parrent-slug","page-title","sub-menu-title","capapility","slug","function");
	add_submenu_page("PLUGIN_MENU", "Settings", "Settings", "manage_options", "PLUGIN_SUBMENU2", "mt_settings_page");
}


function Description_admin_page()
{
	echo '<div class="wrap">
  <h1>Just an extension of Wordpress Simple with 2 submenus: one for general plugin information and one for settings
  </h1>
</div>';

	include_once('data.php');
}

function mt_settings_page()
{
	include_once('setting.php');
}

?>

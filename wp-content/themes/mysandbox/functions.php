<?php
if ( ! function_exists( 'mysandbox_setup' ) ) :

function mysandbox_setup() 
{
	// ...
}

endif;
// Ajout d'une action au Hook 'after_setup_theme'
add_action( 'after_setup_theme', 'mysandbox_setup' );

if ( ! function_exists( 'load_stylesheets' ) ) :

	function load_stylesheets() 
	{
		wp_register_style("bootstrap_reboot_css", get_template_directory_uri() . "/css/bootstrap-reboot.min.css", array(), false, "all");
		wp_enqueue_style("bootstrap_reboot_css");

		wp_register_style("bootstrap_css", get_template_directory_uri() . "/css/bootstrap.min.css", array(), false, "all");
		wp_enqueue_style("bootstrap_css");

		wp_register_style("style", get_template_directory_uri() . "/style.css", array(), false, "all");
		wp_enqueue_style("style");
	}
	
endif;
add_action("wp_enqueue_scripts", "load_stylesheets");

if ( ! function_exists( 'load_js' ) ) :

	function load_js() 
	{
		wp_register_script("app_js", get_template_directory_uri() . "/js/app.js", "", false, true);
		wp_enqueue_script("app_js");
	}
	
endif;
add_action("wp_enqueue_scripts", "load_js");

add_theme_support("menus");

register_nav_menus(

	array(
		"social-menu" => __("Social menu", "theme")
	)
);

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

		wp_register_style("style", get_template_directory_uri() . "/css/style.css", array(), false, "all");
		wp_enqueue_style("style");
	}
	
endif;
add_action("wp_enqueue_scripts", "load_stylesheets");

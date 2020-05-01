<?php
if ( ! function_exists( 'sandbox_setup' ) ) :

function sandbox_setup() 
{
	// ...
}

endif;
// Ajout d'une action au Hook 'after_setup_theme'
add_action( 'after_setup_theme', 'sandbox_setup' );

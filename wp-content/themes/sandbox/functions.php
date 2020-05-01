<?php
if ( ! function_exists( 'mikhaililin_setup' ) ) :

function mikhaililin_setup() 
{
	// ...
}

endif;
// Ajout d'une action au Hook 'after_setup_theme'
add_action( 'after_setup_theme', 'mikhaililin_setup' );

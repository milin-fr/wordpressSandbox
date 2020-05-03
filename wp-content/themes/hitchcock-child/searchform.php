<form method="get" class="search-form" id="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="search-field" placeholder="<?php _e( 'Chercher', 'hitchcock' ); ?>" name="s" id="s" /> 
	<button type="submit" class="search-button">
		<span class="screen-reader-text"><?php _e( 'Chercher', 'hitchcock' ); ?></span>
		<div class="fa fw fa-search"></div>
	</button>
</form>
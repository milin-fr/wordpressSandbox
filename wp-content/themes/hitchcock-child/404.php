<?php get_header(); ?>

<div class="content section-inner">

	<div class="post single">
		
		<div class="post-container">
			
			<div class="post-header">
			
				<h2 class="post-title"><?php _e( 'Error 404', 'hitchcock' ); ?></h2>
														
			</div><!-- .post-header -->
	
			<div class="post-inner">
			                                                	            
		        <div class="post-content">
		        	            
					<p>Oups ! Cette page n'existe pas ou pire encore !</p>
					<p>Je vous accompagne vers <a href="<?php echo esc_url( home_url() ); ?>">l'acceuil</a> ; )</p>
		            
		        </div><!-- .post-content -->
		        
			</div><!-- .post-inner -->
        
		</div><!-- .post-container -->
        	            	                        	
	</div><!-- .post -->
	
</div><!-- .content -->

<?php get_footer(); ?>

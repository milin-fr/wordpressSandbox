<?php get_header(); ?>

<div class="content section-inner">

	<div class="post single">
		
		<div class="post-container">
			
			<div class="post-header">
			
				<h2 class="post-title"><?php _e( 'Error 404', 'hitchcock' ); ?></h2>
														
			</div><!-- .post-header -->
	
			<div class="post-inner">
			                                                	            
		        <div class="post-content">
		        	            
		            <p><?php _e( "La page, que vous cherchez, n'existe pas ou quelque chose de terrible s'est produit. Vous pouvez utiliser le menu de recherche ou le menu de navigation, pour continuer à explorer mon site.", 'hitchcock' ); ?></p>
		            
		            <?php get_search_form(); ?>
		            
		        </div><!-- .post-content -->
		        
			</div><!-- .post-inner -->
        
		</div><!-- .post-container -->
        	            	                        	
	</div><!-- .post -->
	
</div><!-- .content -->

<?php get_footer(); ?>

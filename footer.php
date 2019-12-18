<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="grid-container">
					
						<div class="inner-footer grid-x grid-margin-x grid-padding-x grid-margin-y grid-padding-y">
									
							<div class="small-12 medium-12 large-6 cell">
								
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							
							</div>
							
							<div class="small-12 medium-12 large-6 cell">
								
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
		    					
		    				</div>
						
						</div> <!-- end #inner-footer -->
					
					</div>
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Playfair+Display:400,700i&display=swap" rel="stylesheet">
		
		<script src="https://kit.fontawesome.com/427078e392.js" crossorigin="anonymous"></script>
		
	</body>
	
</html> <!-- end page -->
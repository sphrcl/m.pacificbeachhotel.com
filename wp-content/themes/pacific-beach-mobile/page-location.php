<?php 

/* Template Name: Location 

*/

 get_header(); ?>


	<div class="copybody">
	
	
		<div class="page-interior">
			
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
			
			<div class="page-image">
			
				<!--<iframe class="google-maps-embed" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3022.4401948729433!2d-73.98519499999999!3d40.752342!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcd46cd8dcc7ec8aa!2sRefinery+Hotel!5e0!3m2!1sen!2s!4v1405945713543" width="600" height="220" frameborder="0" style="border:0"></iframe>-->
				<div style="overflow:hidden;height:200px;width:100%;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d929.4812586275406!2d-157.82344234358598!3d21.274434807992147!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0c06f292ad796880!2sPacific+Beach+Hotel!5e0!3m2!1sen!2sus!4v1435659579449" width="100%" height="220" frameborder="0" style="border:0; width:100%;" allowfullscreen></iframe>
				</div>
			
			</div>
			
			
			<div class="page-box">
			
				<h3><?php the_title(); ?></h3>
			
				<?php the_content(); ?>
			
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>	
			
		</div>		

	</div>
	<!-- END COPYBODY -->
	
	<?php include(TEMPLATEPATH . '/includes/superfooter.php'); ?>	
	
<?php include(TEMPLATEPATH . '/includes/footer.php'); ?>

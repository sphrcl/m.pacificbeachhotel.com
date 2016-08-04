<?php 

/* 

Basic Single Post Template 

*/

get_header(); ?>

	<div class="copybody">
	
	
		<div class="page-interior">
			
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
			
			<div class="page-image" style="background-image: url(<?php echo $imgsrc[0]; ?>)">
			
			
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
	
	
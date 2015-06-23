<?php 

/* 

Basic Single Post Template 

*/

get_header(); ?>

	<div class="copybody" style="">
	
	
		<div class="page-interior">
			
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
			
			<div class="page-image detailed" style="background-image: url(<?php echo $imgsrc[0]; ?>)">
			
					<header class="booyah">
						<h3></h3>

						<?php if( get_post_meta($post->ID,'cebo_special',true) ) { ?>	
							<a href="<?php echo get_post_meta($post->ID,'cebo_special',true); ?>" class="strokebutton">Book Now</a>
						<?php } else { ?>
							<!-- <a href="https://pacificbeachhotel.reztrip.com/search?" class="strokebutton">Book Now</a> -->
						<?php } ?>
					</header>
			
			
			</div>
			
			
			<div class="page-box">
			
				<h3><?php the_title(); ?></h3>
			
				<?php the_content(); ?>
				
				<?php if( get_post_meta($post->ID,'cebo_special',true) ) { ?>		
					<a class="button" href="<?php echo get_post_meta($post->ID,'cebo_special',true); ?>" class="strokebutton">Book Now</a>
				<?php } else { ?>
					<!-- <a class="button" href="https://pacificbeachhotel.reztrip.com/search?" class="strokebutton">Book Now</a> -->
				<?php } ?>
			
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>	
			
		</div>		

	<?php include(TEMPLATEPATH . '/includes/superfooter.php'); ?>	

	</div>
	<!-- END COPYBODY -->
		
<?php include(TEMPLATEPATH . '/includes/footer.php'); ?>
	
	
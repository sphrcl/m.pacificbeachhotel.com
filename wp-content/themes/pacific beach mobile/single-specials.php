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
							<a href="https://rownyc.reztrip.com/search?" class="strokebutton">Book Now</a>
						<?php } ?>
					</header>
			
			
			</div>
			
			
			<div class="page-box">
			
				<h3><?php the_title(); ?></h3>
			
				<?php the_content(); ?>
				
				<?php if( get_post_meta($post->ID,'cebo_special',true) ) { ?>		
					<a class="button" style="padding: 15px 0; background: #E35CE5; color: #fff;" href="<?php echo get_post_meta($post->ID,'cebo_special',true); ?>" class="strokebutton">Book Now</a>
				<?php } else { ?>
					<a class="button" style="padding: 15px 0; background: #E35CE5; color: #fff;" href="https://rownyc.reztrip.com/search?" class="strokebutton">Book Now</a>
				<?php } ?>
			
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>	
			
		</div>		

	</div>
	<!-- END COPYBODY -->
	
	<?php include(TEMPLATEPATH . '/includes/superfooter.php'); ?>	
	
<?php include(TEMPLATEPATH . '/includes/footer.php'); ?>
	
	
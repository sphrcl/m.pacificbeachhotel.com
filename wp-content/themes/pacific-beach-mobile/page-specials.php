<?php 

/* TEMPLATE NAME: SPECIALS (INTERNAL) LIST


*/

get_header(); ?>

	<div class="copybody" style="background-image: url(<?php bloginfo('template_url'); ?>/images/refinery-homepage-background3.jpg);">
	
	
	<div class="z-container specialers">
	
	<div class="opener">
			
			<!-- <h3>Special Offers</h3> -->
		
		</div>
	<!-- rooms output -->
	
	<?php query_posts('post_type=specials&posts_per_page=-1'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
	
				<!-- Portfolio item -->
				<article class="roomtype">
					<a href="<?php the_permalink(); ?>" class="roomimage" style="background-image: url(<?php if($imgsrc) { echo $imgsrc[0]; } else { ?><?php bloginfo('template_url'); ?>/images/main.jpg<?php } ?>)"></a>
											
				</article>		
					<div class="specialbox">
							
							<h1><?php the_title(); ?></h1>

							<a class="bookit" href="<?php the_permalink(); ?>">More Info</a>
						
						</div>    

						
						<?php endwhile; endif; wp_reset_query(); ?>	
	</div>		

	<?php include('includes/superfooter.php'); ?>	
		
	</div>
	<!-- END COPYBODY -->


	
<?php include('includes/footer.php'); ?>
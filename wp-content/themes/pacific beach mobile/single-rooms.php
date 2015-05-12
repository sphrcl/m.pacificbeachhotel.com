<?php 

/* Basic Rooms


*/

get_header(); ?>

			


	<div class="copybody" style="">
	
	
	<div class="opener">
			
			<h3><?php the_title(); ?></h3>
		
		</div>
		
	
	
	
<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

		
	<div class="z-container roomdetail">
			    
		    <article class="roomtype detailed">
		    <!-- BEGIN SLIDER -->
				<div class="swiper-main">
				  <div class="swiper-container swiper1">
					<div class="swiper-wrapper">
					
					<?php $galleryImages = get_post_gallery_imagess(); 
							          $imagesCount = count($galleryImages);
	       			 ?>
	        		<?php if ($imagesCount > 0) : ?>
              		<?php for ($i = 0; $i < $imagesCount; $i++): ?>
                  	<?php if (!empty($galleryImages[$i])) :?>

		              
					  <div class="swiper-slide"> <div class="slidimge" style="background-image: url(<?php echo $galleryImages[$i]['full'][0];?>);"> </div></div>
					  
					 	  		
		       		<?php endif; ?>
		       		
  					<?php endfor; ?>
  					
  					<?php else : ?>
		       		
		       		<div class="swiper-slide"> <div class="slidimge" style="background-image: url(<?php echo $imgsrc[0];?>);"> </div></div>
					<?php endif; ?>

					</div>
				  </div>
				</div>
				
                  	
				<div class="pagination pagination1"></div>

			<!-- END SLIDER -->
					<header class="booyah">
						<h3></h3>		
						<a href="https://rownyc.reztrip.com/search?" class="strokebutton">Book Now</a>
					</header>
				
			</article>
			
			<div class="page-interior" style="padding-top: 0;">

				
				<div class="page-box">
				
					<h3><?php the_title(); ?></h3>
				
					<?php
					        $gallery = get_post_gallery();
					
					        $content = strip_shortcode_gallery( get_the_content() );                                        
					        $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) ); 
					        echo $content;
					
					        ?>


					
					
					<a class="button" style="padding: 15px 0; background: #E35CE5; color: #fff;" href="https://rownyc.reztrip.com/search?>" class="strokebutton">Book Now</a>
				
				</div>
				
							
					
			<?php endwhile; endif; wp_reset_query(); ?>	
				
				
			</div>		


		</div>
		<!-- end roomdetail -->

	</div>
	<!-- END COPYBODY -->

	<?php include('includes/superfooter.php'); ?>	
	
<?php include('includes/footer.php'); ?>

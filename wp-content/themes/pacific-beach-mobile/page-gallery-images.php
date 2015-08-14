<?php 

session_start();


/* TEMPLATE NAME: GALLERY SUBPAGE IMAGES


*/

get_header(); ?>


	<div class="copybody" style="background-image: url(http://m.rownyc.com.php53-13.dfw1-2.websitetestlink.com/wp-content/uploads/2014/10/LobbyFull2-2.jpg
);">
	
	
	<div class="opener">
			
			<!-- <h3><?php echo the_title(); ?></h3> -->
		
		</div>
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			
	<div class="z-container roomdetail">
			    
		    <article class="roomtype detailed">
		    <!-- BEGIN SLIDER -->
				<div class="swiper-main">
				  <div class="swiper-container swiper1">
					<div class="swiper-wrapper">
					
						<?php 

							$galleryImages = get_post_gallery_imagess(); 
							$imagesCount = count($galleryImages);

							if ($imagesCount > 0) :
		              		for ($i = 0; $i < $imagesCount; $i++):
		              		if (!empty($galleryImages[$i])) :

	                  	?>
			              
							<div class="swiper-slide"> 

								<div class="slidimge" style="background-image: url(<?php echo $galleryImages[$i]['full'][0];?>);"></div>

								<div class="slidimge-caption">
									
									<?php if( $galleryImages[$i]['captioner'] ) { echo $galleryImages[$i]['captioner']; } ?>

								</div>								

							</div>					  
						 	  		
			       		<?php endif; ?>
	  					<?php endfor; ?>
						<?php endif; ?>

					</div>
				  </div>
				</div>
				<div class="pagination pagination1"></div>
			
				
			</article>
			
			<div class="page-interior" style="padding-top: 0;">

				
				<div class="page-box" style="padding-bottom: 7px;">
				
					<h3 style="border-bottom: 0 none; margin-bottom: 0;"><?php the_title(); ?></h3>
				
					<?php
					        $gallery = get_post_gallery();
					
					        $content = strip_shortcode_gallery( get_the_content() );                                        
					        $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) ); 
					        echo $content;
					
					        ?>

				
				</div>

				<ul class="additional">
			
					<?php $this_page_id=$wp_query->post->ID; ?>

					<?php query_posts(array('showposts' => 8, 'post_parent' => $this_page_id, 'post_type' => 'page')); if(have_posts()) : while(have_posts()) : the_post(); ?>
					<?php $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
					
					<?php $current_id = get_the_ID();?>	
					
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						
					<?php endwhile; endif; wp_reset_query(); ?>						
					
					<div class="clear"></div>
					
				</ul>
				
			</div>	
			
			<?php endwhile; endif; wp_reset_query(); ?>		


		</div>
		<!-- end roomdetail -->		

	<?php include('includes/superfooter.php'); ?>	
		
	</div>
	<!-- END COPYBODY -->


	
<?php include('includes/footer.php'); ?>

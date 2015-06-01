<?php 

session_start();


/* TEMPLATE NAME: GALLERY SUBPAGE


*/

get_header(); ?>


	<div class="copybody" style="background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2014/10/LobbyFull2-2.jpg
);">
	
	
	<div class="opener">
			
			<!-- <h3><?php echo the_title(); ?></h3> -->
		
		</div>

		<div class="z-container roomdetail">
			    
		    <article class="roomtype detailed">

				<?php if(get_post_meta($post->ID, 'cebo_enable_video', true) && get_post_meta($post->ID, 'cebo_video_embed', true)) { ?>
	    
			    	<div class="video-container">
								
						<?php echo get_post_meta($post->ID, 'cebo_video_embed', true); ?>
						
					</div>

				<?php } else { ?>
			 
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

				<?php } ?>
		    
				<div class="pagination pagination1"></div>
				
			</article>

			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			
			<div class="page-interior" style="padding-top: 0;">

				
				<div class="page-box">
				
					<h3><?php the_title(); ?></h3>
				
					<?php
					        $gallery = get_post_gallery();
					
					        $content = strip_shortcode_gallery( get_the_content() );                                        
					        $content = str_replace( ']]>', ']]&gt;', apply_filters( 'the_content', $content ) ); 
					        echo $content;
					
					        ?>

				
				</div>

				<ul class="additional">
			
					<?php
						$this_page_id = get_post_ancestors( $post->ID ); 
						$permalink = get_permalink($post->post_parent); 
						$title = get_the_title($post->post_parent); 
					?>

						<li><a href="<?php echo $permalink; ?>"><?php echo $title; ?></a></li>

					<?php query_posts(array('showposts' => 8, 'post_parent__in' => $this_page_id, 'post_type' => 'page')); if(have_posts()) : while(have_posts()) : the_post(); ?>
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

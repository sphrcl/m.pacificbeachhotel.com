<?php 

/* Template Name: Webcam

*/
 get_header(); ?>


	<div class="copybody" style="background-image: url(http://m.rownyc.com.php53-13.dfw1-2.websitetestlink.com/wp-content/uploads/2014/10/LobbyFull2-2.jpg
);">
	
	
	<div class="page-interior">
		
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
		
		<div class="page-image" style="background-image: url(<?php echo $imgsrc[0]; ?>)">
		

			<style>

				img#stream {
				  width: 365px !important;
				  height: auto !important;
				  position: relative !important;
				  right: 240px !important;
				  bottom: 85px !important;
				}

			</style>


				<div style="display:block;overflow:hidden;width:500px;height:350px;">      
					<iframe style="margin-top: -135px; height: 380px; margin-left: -700px; width: 1000px;" scrolling="no" src="http://66.175.76.125/view/viewer_index.shtml?id=792426">
					  <p>Your browser does not support iframes.</p>
					</iframe>			
				</div>

		
		</div>
		
		<?php endwhile; endif; wp_reset_query(); ?>
		
		<div class="page-box">
			
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			
			<h3><?php the_title(); ?></h3>
		
			<?php the_content(); ?>
			
			<?php endwhile; endif; wp_reset_query(); ?>
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
			


	</div>
	<!-- END COPYBODY -->

	<?php include(TEMPLATEPATH . '/includes/superfooter.php'); ?>
	
	
	
<?php include(TEMPLATEPATH . '/includes/footer.php'); ?>

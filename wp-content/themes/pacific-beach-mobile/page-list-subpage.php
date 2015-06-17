<?php 

/* Template Name: PAGE LIST SUBPAGE

*/
 get_header(); ?>


	<div class="copybody">
	
	
	<div class="page-interior">
		
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
		
		<div class="page-image" style="background-image: url(<?php echo $imgsrc[0]; ?>)">
		
		
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

<?php 

session_start();

/* TEMPLATE NAME: ROOMS (WP) LIST


*/

get_header(); ?>


	<div class="copybody">
	
	
	<div class="opener">
			
			<!-- <h3><?php the_title(); ?></h3> -->
		
		</div>



<?php query_posts('post_type=rooms&posts_per_page=-1&order=asc'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>


		    
	<!-- Portfolio item -->
	<article class="roomtype">
		<a href="<?php the_permalink(); ?>" class="roomimage" style="background-image: url(<?php echo $imgsrc[0]; ?>)"></a>
			<header>
				<h3><?php echo the_title(); ?></h3>			
				<a class="strokebutton" href="<?php the_permalink(); ?>">Room Details</a>
			</header>
		
	</article>
	
	
<?php endwhile; endif; wp_reset_query(); ?>

<?php query_posts('page_id=86'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
	<article class="roomtype">
		<a href="<?php the_permalink(); ?>" class="roomimage" style="background-image: url(<?php echo $imgsrc[0]; ?>)"></a>
			<header>
				<h3><?php echo the_title(); ?></h3>			
				<a class="strokebutton" href="<?php the_permalink(); ?>">Read More</a>
			</header>
		
	</article>
<?php endwhile; endif; wp_reset_query(); ?>
<br>		
		<!-- end rooms output -->

	
	<?php include('includes/superfooter.php'); ?>

		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>

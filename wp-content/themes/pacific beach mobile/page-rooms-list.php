<?php 

session_start();

/* TEMPLATE NAME: ROOMS (WP) LIST


*/

get_header(); ?>


	<div class="copybody" style="background-image: url(http://m.rownyc.com.php53-13.dfw1-2.websitetestlink.com/wp-content/uploads/2014/10/LobbyFull2-2.jpg
);">
	
	
	<div class="opener">
			
			<h3><?php the_title(); ?></h3>
		
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
<br>		
		<!-- end rooms output -->

	
	<?php include('includes/superfooter.php'); ?>

		
		
	</div>
	<!-- END COPYBODY -->
	
	
	
<?php include('includes/footer.php'); ?>

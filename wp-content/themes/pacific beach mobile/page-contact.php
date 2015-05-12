<?php 

/* Template Name: Contact 

*/
 get_header(); ?>


	<div class="copybody" style="background-image: url(http://m.rownyc.com.php53-13.dfw1-2.websitetestlink.com/wp-content/uploads/2014/10/LobbyFull2-2.jpg
);">
	
	
	<div class="page-interior">
		
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
		
		<div class="page-image" style="background-position: center top; background-image: url(<?php echo $imgsrc[0]; ?>)">
		
		
		</div>
		
		
			<div class="contacto">
				
				<h1>Row NYC</h1>
				
				<div class="proper">
					<a style="text-decoration: none;" href="https://www.google.com/maps/place/Row+NYC/@40.7591338,-73.9883055,16z/data=!4m2!3m1!1s0x0:0x8890505e02666256" target="_blank"><p>700 8th Ave<br><i>Between 44th and 45th Streets</i><span>
					
					New York, NY 10036</p></a>
				</div>
				
				
				<div class="contactoptions">
				
					
					<div class="twentyfive">
						<a href="https://www.google.com/maps/place/Row+NYC/@40.7591338,-73.9883055,16z/data=!4m2!3m1!1s0x0:0x8890505e02666256" target="_blank"><i class="fa fa-map-marker"></i></a>
					</div>
					
					<div class="twentyfive">
						<a href="tel:1212-869-3600"><i class="fa fa-phone"></i></a>
					</div>
					
					<div class="twentyfive lasttwentyfive">
						<a href="mailto:info@rownyc.com" target="_blank"><i class="fa fa-envelope"></i></a>
					</div>
					
					<div class="clear"></div>
					
					
					<div class="fifty" style="width: 100%">
						<a href="https://www.facebook.com/RowNYC" target="_blank">Like us on facebook</a>
					</div>
					
					<div class="fifty">
						<a href="http://www.pinterest.com/rownyc/" target="_blank">Follow us on pinterest</a>
					</div>
					
					<div class="fifty">
						<a href="http://instagram.com/rownyc/" target="_blank">Join us on instagram</a>
					</div>
					
						<div class="fifty">
						<a href="https://www.twitter.com/RowNYC" target="_blank">Follow us on twitter</a>
					</div>
					
					<div class="fifty lastfifty">
						<a href="https://plus.google.com/103755241093806177642" target="_blank">Find us on google+</a>
					</div>
						
					<div class="clear"></div>
					
				
				</div>
			
			</div>
		
		
		
		<?php endwhile; endif; wp_reset_query(); ?>	
		
	</div>		

	</div>
	<!-- END COPYBODY -->

	<?php include(TEMPLATEPATH . '/includes/superfooter.php'); ?>	
	
<?php include(TEMPLATEPATH . '/includes/footer.php'); ?>

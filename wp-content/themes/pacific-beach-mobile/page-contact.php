<?php 

/* Template Name: Contact 

*/
 get_header(); ?>


	<div class="copybody" style="background-image: url();">
	
	
	<div class="page-interior">
		
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
		
		<div class="page-image" style="background-position: center top; background-image: url(<?php echo $imgsrc[0]; ?>)">

			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<div style="overflow:hidden;height:200px;width:100%;">
				<div id="gmap_canvas" style="height:200px;width:100%;"></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important} .labels {color: red;font-family: "Lucida Grande", "Arial", sans-serif;font-size: 10px;font-weight: bold;text-align: center;width: 150px; white-space: nowrap;}</style>
				<a class="google-map-code" href="http://www.map-embed.com" id="get-map-data">http://www.map-embed.com/</a>
			</div>
				<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/markerwithlabel.js"></script>
				<script type="text/javascript">
    function init_map() {
        var myOptions = {
            zoom: 14,
            center: new google.maps.LatLng(21.2746857, -157.82326820000003),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
        var marker = new MarkerWithLabel({
		   position: new google.maps.LatLng(21.2746857, -157.82326820000003),
		   draggable: true,
		   map: map,
		   labelContent: "Pacific Beach Hotel",
		   labelAnchor: new google.maps.Point(22, 0),
		   labelClass: "labels", // the CSS class for the label
		   labelStyle: {opacity: 0.75}
 		});
        infowindow = new google.maps.InfoWindow({
            content: "<b>Pacific Beach Hotel</b><br/>2490 Kalakaua Avenue Honolulu<br/>96815 Hawaii "
        });
        google.maps.event.addListener(marker, "click", function() {
            infowindow.open(map, marker);
        });
    }
    google.maps.event.addDomListener(window, 'load', init_map);
</script>


		</div>
		
		
			<div class="contacto">
				
				<h1>Pacific Beach Hotel</h1>
				
				<div class="proper">
					<a style="text-decoration: none;" href="https://www.google.com/maps/place/Row+NYC/@40.7591338,-73.9883055,16z/data=!4m2!3m1!1s0x0:0x8890505e02666256" target="_blank">
	<?php the_content(); ?>
				</div>
				
				
				<div class="contactoptions">
					
					<div style="width: 100%;" class="twentyfive">
						<a href="tel:1808-922-1233"><i class="fa fa-phone"></i></a>
					</div>
					
					<div class="clear"></div>
					
				
					<div class="fifty">
						<a href="https://www.facebook.com/PacificBeachHotel" target="_blank">Like us on facebook</a>
					</div>
					
					<div class="fifty">
						<a href="https://instagram.com/pacificbeachhotel/" target="_blank">Join us on instagram</a>
					</div>
					
						<div class="fifty">
						<a href="https://twitter.com/PacificBeachHtl" target="_blank">Follow us on twitter</a>
					</div>
					
					<div class="fifty lastfifty">
						<a href="https://plus.google.com/106176366593354536658/posts?hl=en" target="_blank">Find us on google+</a>
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

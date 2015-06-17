<?php 

session_start();


/* TEMPLATE NAME: SPECIALS LIST


*/

get_header(); ?>

	<div class="copybody">
	
	
	<div class="z-container specialers">
	
	<div class="opener">
			
			<h3>Special Offers</h3>
		
		</div>
	<!-- rooms output -->
	
	<?php
	
	
		$link = 'http://rt3api-prd.ttaws.com/ext/special_rates?hotel_id=NYCREF';
		$data = file_get_contents($link);
		
		$result = json_decode($data);
		
		$i = 0;
		foreach ($result->special_rates as $post):{
		    $featimg = $post->lead_photo_url->thumb_jumbo;
		    $text = $post->rate_plan_name;
		    $texter = $post->short_description;
		    $linker = $post->promo_url;
		    
		
		    
		    ?>
	
				<!-- Portfolio item -->
				<article class="roomtype">
					<a href="<?php echo $linker; ?>" class="roomimage" style="background-image: url(<?php if($featimg) { echo $featimg; } else { ?><?php bloginfo('template_url'); ?>/images/main.jpg<?php } ?>)"></a>
											
				</article>		
					<div class="specialbox">
							
							<h1><?php echo $text; ?></h1>

							<a class="bookit" href="<?php echo $linker; ?>">Book Now</a>
						
						</div>    

						
						<?php 
							    
							    // echo "<li class='map-location' data-jmapping='{id: ". $i .", point: {lat:  ". $latitude . ", lng: " . $longitude . " }, category: 'place', bounded: false}'><a href='#' class='map-link insta' rel='insta'>" . $i ."</a><div class='info-box'><a href='#'><h3>#</h3></a></div></li>";
							    
							    
							    
							     $i++; 
							} endforeach;
							
							
							//echo json_encode($locations);
							
							
							
							
							
							
							
							?>
		<!-- end rooms output -->

	</div>		
		
	</div>
	<!-- END COPYBODY -->

	<?php include('includes/superfooter.php'); ?>	
	
<?php include('includes/footer.php'); ?>

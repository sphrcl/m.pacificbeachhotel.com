<?php 

session_start();


/* TEMPLATE NAME: ROOMS DETAILS


*/

get_header(); ?>

<?php 
	

	$_SESSION['arrival'] = $_GET['arrive'];
	$_SESSION['depart'] = $_GET['depart'];
	$_SESSION['adlt'] = $_GET['adults'];
	$_SESSION['child'] = $_GET['children'];	
	
	$_SESSION['room'] = $_GET['roomid'];	


?>
	
		<?php $arv = $_SESSION['arrive']; $date = DateTime::createFromFormat('Y-m-d', $arv);
	$output = $date->format('F j, Y'); ?>	
	
	<?php $dep = $_SESSION['depart']; $dates = DateTime::createFromFormat('Y-m-d', $dep);
	$outputs = $dates->format('F j, Y'); ?>						


	<div class="copybody" style="background-image: url(<?php bloginfo('template_url'); ?>/images/index2.jpg);">
	
	
	<div class="opener">
			
			<h3><?php echo $output; ?> - <?php echo $outputs; ?></h3>
		
		</div>
		
			
	<div class="z-container roomdetail">
	<?php


		$link = 'http://refineryhotelnewyork.reztrip.com/rt/hotels/roomDetails.json?adults=1&arrival_date='.$_SESSION['arrival'].'&children=0&code=&currency=USD&departure_date='.$_SESSION['depart'].'&hotel_id=NYCREF&iata_code=&locale=en&portal_id=1&room_id='.$_SESSION['room'].'&rooms=1&session_id=c4d328e5-4939-4be7-8a16-ade523b5999e';
		$data = file_get_contents($link);
		
		$results = json_decode($data);
		$reg_exUrls = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
		$reg_exHashs = "/#([a-z_0-9]+)/i";
		$reg_exUsers = "/@([a-z_0-9]+)/i";

		
		$locations = [];
		
		$i = 0;
		
		    $imager = $results->photos->thumb_jumbo;
		    $featimg = $results->photos[0]->large;
		    $avgprc = $results->min_average_price;
		    $latitude = $results->location->latitude;
		    $longitude = $results->location->longitude;
		    $locations [] = ["longitudes"=>$longitude, "latitudes"=>$latitude, "images"=>$images];
		    $text = $results->amenities;
		    $linker = $results->promo_url;
		    $roomtype = $results->name;
     	    $roomcode = $results->code;
     	    $info = $results->description;
     	    $specials = $results->rate_plans;
			
			$fields_detail = $results->photos;
		    
		    ?>
		    
		    <article class="roomtype detailed">
		    <!-- BEGIN SLIDER -->
				<div class="swiper-main">
				  <div class="swiper-container swiper1">
					<div class="swiper-wrapper">
					
					<?php $i = 0;
		              foreach ($fields_detail as $poster):{ ?>
		              
					  <div class="swiper-slide"> <div class="slidimge" style="background-image: url(<?php echo $poster->large; ?>);"> </div></div>
					  
					  <?php  $i++;  } endforeach;  ?>

					</div>
				  </div>
				</div>
				<div class="pagination pagination1"></div>
			<!-- END SLIDER -->
					<header>
						<h3>$<?php echo $avgprc; ?>/ngt avg</h3>			
						<a href="http://refineryhotelnewyork.reztrip.com/search?arrival_date=<?php echo $_SESSION['arrive']; ?>&departure_date=<?php echo $_SESSION['depart']; ?>&room_id=<?php echo $_SESSION['room'] ?>" class="strokebutton"><?php _e('Book Now','theme-text-domain'); ?></a>
					</header>
				
			</article>
			
			<div class="page-interior" style="padding-top: 0;">

				
				<div class="page-box">
				
					<h3><?php echo $roomtype; ?></h3>
				
					<p><?php echo $info; ?></p>
				
				</div>
				
				<div class="detail-content" style="width: 100%;">
			
				 <h3>Amenities</h3>
				 <ul class="amenities">
				<?php $i = 0;
		              foreach ($text as $amenities):{ ?>
		              
					  <li><?php echo $amenities; ?></li>
					  
					  <?php  $i++;  } endforeach;  ?>
				</ul>
				<a href="#" class="more"><i class="fa fa-angle-down"></i></a>
			</div>
			
			<h2>Other Available At These Rates</h2>
				
			<?php if($specials) { ?>
			
			<?php $i = 0; foreach ($specials as $offer):{ ?>
		              
				<div class="specialbox">
							
				<h1><?php echo $offer->name; ?></h1>
				
				<p><?php echo $offer->description; ?></p>
				
				<span class="strokebutton">$<?php echo $offer->average_nightly_price; ?>/ngt avg</span>
				
				<a class="bookit" href="#"><?php _e('Book Now','theme-text-domain'); ?></a>
			
			</div>    			
			<?php  $i++;  } endforeach;  ?>

			<?php } ?>
				
				
			</div>		


		</div>
		<!-- end roomdetail -->
		
	</div>
	<!-- END COPYBODY -->
	
	<?php include('includes/superfooter.php'); ?>	
	
<?php include('includes/footer.php'); ?>

<?php 

session_start();


/* TEMPLATE NAME: ROOMS LIST


*/

get_header();
	
	$arrival = $_GET['arrival_date'];
	$departure = $_GET['departure_date'];
	$adults = $_GET['adults'];
	$children = $_GET['children'];		
	
	$_SESSION['arrive'] = $_GET['arrival_date'];
	$_SESSION['depart'] = $_GET['departure_date'];
	$_SESSION['adlt'] = $_GET['adults'];
	$_SESSION['child'] = $_GET['children'];

?>

	<div class="copybody" style="background-image: url(<?php bloginfo('template_url'); ?>/images/index2.jpg);">
	
		<!-- rooms output -->
	
		<div class="opener">
			
			<h3>Guest Rooms</h3>
		
		</div>

		<?php

			$link = 'http://refineryhotelnewyork.reztrip.com/rt/hotels/rooms.json?hotel_id=NYCREF&locale=en&portal_id=1&session_id=30&arrival_date_0=&departure_date_0=&adults_0=1&children_0=0&rooms=1';
			$data = file_get_contents($link);
			
			$results = json_decode($data);
			$reg_exUrls = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
			$reg_exHashs = "/#([a-z_0-9]+)/i";
			$reg_exUsers = "/@([a-z_0-9]+)/i";

			$locations = [];
			
			$i = 0;
			foreach ($results->rooms as $post):{
			    $imager = $post->photos->thumb_jumbo;
			    $featimg = $post->photos[0]->large;
			    $avgprc = $post->min_average_price;
			    $latitude = $post->location->latitude;
			    $longitude = $post->location->longitude;
			    $locations [] = ["longitudes"=>$longitude, "latitudes"=>$latitude, "images"=>$images];
			    $text = $post->caption->text;
			    $linker = $post->promo_url;
			    $roomtype = $post->name;
			    $roomcode = $post->code;
		    
	    ?>

		<!-- Portfolio item -->
		<article class="roomtype">
			<a href="https://refineryhotelnewyork.reztrip.com/search?<?php echo $roomcode; ?>" class="roomimage" style="background-image: url(<?php echo $featimg; ?>)"></a>
				<header>
					<h3><?php echo $roomtype; ?></h3>
					<span class="strokebutton">More Details</span>
				</header>
			
		</article>
	
		<?php 
		    
		    // echo "<li class='map-location' data-jmapping='{id: ". $i .", point: {lat:  ". $latitude . ", lng: " . $longitude . " }, category: 'place', bounded: false}'><a href='#' class='map-link insta' rel='insta'>" . $i ."</a><div class='info-box'><a href='#'><h3>#</h3></a></div></li>";
		    
			     $i++; 
			} endforeach;
		
		
			//echo json_encode($locations);		
		
		?>
		
		<!-- end rooms output -->		
		
	</div> <!-- END COPYBODY -->
	
	<?php include('includes/superfooter.php'); ?>	
	
<?php include('includes/footer.php'); ?>
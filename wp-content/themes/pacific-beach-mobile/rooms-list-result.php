<?php 

session_start();

/* TEMPLATE NAME: ROOMS QUERY LIST


*/

get_header(); ?>



<?php 
	
	$arrival = $_GET['arrival_date'];
	$departure = $_GET['departure_date'];
	$adults = $_GET['adults'];
	$children = $_GET['children'];		
	
	$_SESSION['arrive'] = $_GET['arrival_date'];
	$_SESSION['depart'] = $_GET['departure_date'];
	$_SESSION['adlt'] = $_GET['adults'];
	$_SESSION['child'] = $_GET['children'];
 	
 	


?>
				
	<?php $arv = $_SESSION['arrive']; $date = DateTime::createFromFormat('Y-m-d', $arv);
	$output = $date->format('F j, Y'); ?>	
	
	<?php $dep = $_SESSION['depart']; $dates = DateTime::createFromFormat('Y-m-d', $dep);
	$outputs = $dates->format('F j, Y'); ?>			

	<div class="copybody" style="background-image: url(<?php bloginfo('template_url'); ?>/images/index2.jpg);">
	
	
		<div class="opener">
				
			<h3><?php echo $output; ?> - <?php echo $outputs; ?></h3>
		
		</div>

		<!-- rooms output -->
		<?php

			$link = 'http://refineryhotelnewyork.reztrip.com/rt/hotels/rooms.json?hotel_id=NYCREF&locale=en&portal_id=1&session_id=30&arrival_date_0='.$_SESSION['arrive'].'&departure_date_0='.$_SESSION['depart'].'&adults_0=1&children_0=0&rooms=1';
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
			    $text = $post->caption->text;
			    $roomtype = $post->name;
	     	    $roomcode = $post->code;
				$availability = $post->available;
			    
	    ?>
			    
		<!-- Portfolio item -->
		<article class="roomtype">

			<a href="<?php bloginfo('url'); ?>/room-details?roomid=<?php echo $roomcode; ?>&arrive=<?php echo $_SESSION['arrive']; ?>&depart=<?php echo $_SESSION['depart']; ?>&adult=&child=" class="roomimage" style="background-image: url(<?php echo $featimg; ?>)"></a>
			<header>
				<h3><?php echo $roomtype; ?></h3>			
				<span class="strokebutton">$<?php echo $avgprc[0]; ?>/ngt avg</span>
			</header>
			
		</article>
		
		
		<?php 		    
		    $i++; 
			} endforeach;		
		?>
		
		<!-- end rooms output -->
		
	</div>
	<!-- END COPYBODY -->
	
	<?php include('includes/superfooter.php'); ?>	
	
<?php include('includes/footer.php'); ?>

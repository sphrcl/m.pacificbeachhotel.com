<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="initial-scale=1.0">
<title>Mobile Development</title>

<!-- BEGIN FONTS + STYLESHEETS + JS INCLUDES -->

<link rel='stylesheet' id='style-css' href='css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='elements-css' href='css/elements.css' type='text/css' media='all' />

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="js/jquery-1.7.1.min.js"></script>
<link rel="stylesheet" href="css/idangerous.swiper.css">
<link rel="stylesheet" href="css/swiper-style.css">
<script src="js/idangerous.swiper-1.9.1.min.js"></script>
<script src="js/swiper-demos.js"></script>

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){

		$.datepicker._defaults.dateFormat = 'yy-mm-dd';
		
		$(".datepicker").datepicker({
			minDate: 0,
			numberOfMonths: [1,1],
			beforeShowDay: function(date) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			},
			onSelect: function(dateText, inst) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
                var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);

                
                if (!date1 || date2) {
					$("#arrival_date").val(dateText);
					$("#departure_date").val("");
                    $(this).datepicker();
                } else if( selectedDate < date1 ) {
                    $("#departure_date").val( $("#arrival_date").val() );
                    $("#arrival_date").val( dateText );
                    $(this).datepicker();
                } else {
					$("#departure_date").val(dateText);
                    $(this).datepicker();
				}
			}
		});
			
		$.datepicker._defaults.dateFormat = 'yy-mm-dd';
		
		$(".datepickers").datepicker({
			minDate: 0,
			numberOfMonths: [1,1],
			beforeShowDay: function(date) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_dates").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_dates").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			},
			onSelect: function(dateText, inst) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_dates").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_dates").val());
                var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);

                
                if (!date1 || date2) {
					$("#arrival_dates").val(dateText);
					$("#departure_dates").val("");
                    $(this).datepicker();
                } else if( selectedDate < date1 ) {
                    $("#departure_dates").val( $("#arrival_dates").val() );
                    $("#arrival_dates").val( dateText );
                    $(this).datepicker();
                } else {
					$("#departure_dates").val(dateText);
                    $(this).datepicker();
				}
			}
		});
		
		$(".more").toggle(
			function() {
			    $(this).addClass('aaa');
			    $('.detail-content p').addClass('longer');
			}, 
			function() {
			    $(this).removeClass('aaa');
			     $('.detail-content p').removeClass('longer');
			});
	});

</script>

<script type='text/javascript' src='js/general-header.js'></script>
<script type='text/javascript' src='js/elements.js'></script>

<link href="photoswipe/styles.css" type="text/css" rel="stylesheet">
<link href="photoswipe/photoswipe.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="photoswipe/lib/klass.min.js"></script>
<script type="text/javascript" src="photoswipe/code.photoswipe-3.0.5.min.js"></script>
<!-- END FONTS + STYLESHEETS + JS INCLUDES -->

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

<!-- BEGIN PHOTOSWIPE -->
<script>
(function(window, PhotoSwipe){
	document.addEventListener('DOMContentLoaded', function(){
		var
			options = {},
			instance = PhotoSwipe.attach( window.document.querySelectorAll('#Gallery a'), options );
	}, false);
}(window, window.Code.PhotoSwipe));
</script>
<!-- END PHOTOSWIPE -->

<body>

<!-- BEGIN SITE LOGO -->
<div id="header-bar">
	<div class="site-logo-wrapper">

		<!-- BEGIN LOGO -->
		<div class="site-logo">
			
		</div>
		<!-- END LOGO -->

	</div>
</div>
<!-- END SITE LOGO -->



<!-- BEGIN MENU INCLUDE -->
<div id="menu"><!-- BEGIN MENU -->
<ul id="menu-main-menu" class="menu">
<li class="menu-item"><a href="index.php">Home</a></li>
<li class="menu-item"><a href="rooms-list.php">View All Guest Rooms</a></li>
<li class="menu-item"><a href="specials.php">Special Offers</a></li>

<li class="menu-item"><a href="#">Refinery Gallery</a>
	<!--<ul class="sub-menu">
	<li class="menu-item"><a href="post-standard.html">STANDARD</a></li>
	<li class="menu-item"><a href="post-video.html">VIDEO</a></li>
	</ul>-->
</li>

<li class="menu-item"><a href="#">Explore Refinery</a></li>
<li class="menu-item"><a href="#">Contact</a></li>
</ul>
<!-- END MENU --></div>


<!-- BEGIN MENU INCLUDE -->
<div id="other-menu"><!-- BEGIN MENU -->
<div class="menucontainer">
	
	<div class="calendars">
		<div class="datepickers"></div>
	</div>
	<div class="reservationforms">
					
		
		<form method="get" action="rooms-list-result.php?=">
			
			<!-- hidden arrival and departure dates -->
			<span class="calsec" style="display: none;">
				<input type="text"  id="arrival_dates" name="arrival_date" placeholder="Arrival" class="calendarsection" />
				<input type="hidden"  id="arv">
				<input type="text" id="departure_dates" name="departure_date" placeholder="Departure" class="calendarsection" />
				<input type="hidden" id="dep">
			</span>
			
			<span class="ad-drop">
				<select name="adults" class="halfsies">
					<option value="1">1 Adult</option>
					<option value="2">2 Adults</option>
					<option value="3">3 Adults</option>
					<option value="4">4 Adults</option>
				</select>
			</span>
			
			<span class="kid-drop">
				<select name="children" class="halfsies">
					<option value="">0 Kids</option>
					<option value="1">1 Kid</option>
					<option value="2">2 Kids</option>
					<option value="3">3 Kids</option>
				</select>
			</span>
			
			<div class="clear"></div>
			
			<div class="inputpromo">
				<input type="text" id="promo" name="promo" placeholder="Coupon Code" />
			</div>
			
			<div class="clear"></div>
			
			<button class="button" type="submit">Search Now</button>

		</form>
	</div>
</div>

</div>
<!-- END MENU -->



<!-- BEGIN MENU CLOSE AREA -->
<div id="menu-open-overlay"></div>
<!-- END MENU CLOSE AREA -->

<!-- BEGIN IF MENU OPEN, SHOW BLUE BACKGROUND -->
<div id="menu-open-background">
	<div class="menu-open-background"></div>
</div>
<!-- END IF MENU OPEN, SHOW BLUE BACKGROUND -->

<div id="sitewrap" style="background-image: url(images/index2.jpg);">
<div id="content">
<div class="wrapper-outer">
<div class="content-wrapper">



<!-- BEGIN MENU BUTTON -->
<div class="menu-wrapper">
	<div class="menu-button"><i class="menubar"></i></div>
	<div class="other-menu-button"><i class="fa fa-search"></i></div>
</div>
<!-- END MENU BUTTON -->


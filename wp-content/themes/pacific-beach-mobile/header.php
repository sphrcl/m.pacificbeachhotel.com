<!DOCTYPE HTML>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <title><?php wp_title(); ?></title>
	<!-- BEGIN FONTS + STYLESHEETS + JS INCLUDES -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link rel="icon" href="/sites/default/files/favicon.ico" type="image/x-ico"/>

<link rel='stylesheet' id='style-css' href='<?php bloginfo ('template_url'); ?>/css/style.css' type='text/css' media='all' />
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/media.css">
<link rel='stylesheet' id='elements-css' href='<?php bloginfo ('template_url'); ?>/css/elements.css' type='text/css' media='all' />

<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/idangerous.swiper.css">
<link rel="stylesheet" href="<?php bloginfo ('template_url'); ?>/css/swiper-style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo ('template_url'); ?>/css/fonts.css" />
<!-- Consolidated this css into one file. This styles the notification -->
<link rel='stylesheet' id='style-css' href='<?php bloginfo('template_url'); ?>/css/ns-style.css' type='text/css' media='all' />

<!-- google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){

		$.datepicker._defaults.dateFormat = 'yy-mm-dd';

		$(".datepicker").datepicker({
			minDate: new Date(),
			gotoCurrent: true,
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

		var the_date = new Date();
		
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

	});

</script>

<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/main.js"></script>
      
<script id='code_1'>
		$(function() {			
		// 	//Keep track of how many swipes
		// 	var count=0;

		// 	//Enable swiping...
		// 	$(".reservationfooter").swipe( {
		// 		//Generic swipe handler for all directions
		// 		swipeDown:function(event, direction, distance, duration, fingerCount) {
					
		// 			$(".reservationlink h4").show();
		// 			$(".reservationfooter").removeClass("uppers");
		// 		},
		// 		//Default is 75px, set to 0 for demo so any distance triggers swipe
		// 		threshold:0
		// 	});

			$('.swipe-down').click(function() {
				$(".reservationlink h4").show();
				$(".reservationfooter").removeClass("uppers");
			});
			
			
		// 	//Enable swiping...
		// 	$("#menu").swipe( {
		// 		//Generic swipe handler for all directions
		// 		swipeRight:function(event, direction, distance, duration, fingerCount) {
		// 			$(this).removeClass("menu-active");
		// 			$(".wrapper-outer").removeClass("wrapper-outer-active-scale-right").removeClass(" wrapper-outer-active-position-right");
		// 		},
		// 		//Default is 75px, set to 0 for demo so any distance triggers swipe
		// 		threshold:0
		// 	});
			
		// 	//Enable swiping...
		// 	$(".wrapper-outer").swipe( {
		// 		//Generic swipe handler for all directions
		// 		swipeRight:function(event, direction, distance, duration, fingerCount) {
					
		// 			$(this).removeClass("wrapper-outer-active-scale-right").removeClass(" wrapper-outer-active-position-right");
		// 		},
		// 		//Default is 75px, set to 0 for demo so any distance triggers swipe
		// 		threshold:0
		// 	});
			
		});
	</script> 

<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/js/jquery.accordion.js"></script>
<script>

$(function() { 
	$('#st-accordion').accordion(); 
	$('.content-opener').click(function(){
		$(this).parent().find('a').trigger('click');
	});
});

$(document).ready(function(){

	$(".closesays").hide();
	
	$(".opensays").click(function(e) {
		e.preventDefault();
		$('.textbox').addClass("opened");
		$(".closesays").show();
		$(this).hide();
	});
	
	$(".closesays").click(function(e) {
		e.preventDefault();
		$('.textbox').removeClass("opened");
		$(".opensays").show();
		$(this).hide();
	});
	$(".reservationlink h4 a").click(function(e) {
		e.preventDefault();
		$(".reservationfooter").addClass("uppers");
	});
	
});

$(document).ready(function(){

	var getdate = $.datepicker.formatDate('yy-mm-dd', new Date());
	$('#arrival_date').val(getdate);

});

</script>

<!-- There are the scripts need for the pushdown. -->
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/classie.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/modernizr.custom.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/notificationFx.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/snap.svg-min.js'></script>
<script type='text/javascript' src='<?php bloginfo('template_url'); ?>/js/cbpAnimatedHeader.js'></script>

<script>
	$(document).ready(function() {


		<?php if( is_home() || is_front_page() ) { ?>

				if (!sessionStorage.getItem('nsclose_id')) {
				    
				    setTimeout( function() {
					
						$('.ns-box').addClass('ns-show');

					}, 1300 );

				} else {

					$('.ns-box').addClass('ns-hide'),
					$('.ns-box').hide();

				}
				
		<?php } else { ?>

				if (!sessionStorage.getItem('nsclose_id')) {
				    
				    $('.ns-box').addClass('ns-show-page');

				} else {

					$('.ns-box').addClass('ns-hide'),
					$('.ns-box').hide();

				}
				
		<?php } ?>	

		$('.ns-close').click(function(){
			$('.ns-box').removeClass('ns-show'),
			$('.ns-box').addClass('ns-hide');
			$('.ns-box').fadeOut(300);
		});

	});
</script>

<script src="<?php bloginfo ('template_url'); ?>/js/idangerous.swiper-1.9.1.min.js"></script>
<script src="<?php bloginfo ('template_url'); ?>/js/swiper-demos.js"></script>

<script type='text/javascript' src='<?php bloginfo ('template_url'); ?>/js/general-header.js'></script>
<script type='text/javascript' src='<?php bloginfo ('template_url'); ?>/js/elements.js'></script>

<link href="<?php bloginfo ('template_url'); ?>/photoswipe/styles.css" type="text/css" rel="stylesheet">
<link href="<?php bloginfo ('template_url'); ?>/photoswipe/photoswipe.css" type="text/css" rel="stylesheet">

<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/photoswipe/lib/klass.min.js"></script>
<script type="text/javascript" src="<?php bloginfo ('template_url'); ?>/photoswipe/code.photoswipe-3.0.5.min.js"></script>
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
	<?php
		/****************** DO NOT REMOVE **********************
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>



</head>

<body <?php body_class(); ?>>

<?php query_posts('post_type=notification&posts_per_page=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>

	<?php if( get_post_meta($post->ID,'cebo_special', true) && get_post_meta($post->ID,'cebo_live', true) && get_post_meta($post->ID,'cebo_icon', true) ) { ?>

		<div class="ns-box ns-bar ns-effect-slidetop ns-type-notice"><div class="ns-box-inner"><i class="fa fa-<?php echo get_post_meta($post->ID,'cebo_icon', true); ?>"></i><p><a href="<?php echo get_post_meta($post->ID,'cebo_special', true); ?>"><?php the_title(); ?></a></p></div><span class="ns-close" onClick="sessionStorage.setItem('nsclose_id', '1')"></span></div>

	<?php } ?>

<?php endwhile; endif; wp_reset_query(); ?>

<!-- BEGIN SITE LOGO -->
<div id="header-bar">
	<div class="site-logo-wrapper">

		
	</div>
</div>
<!-- END SITE LOGO -->



<!-- BEGIN MENU INCLUDE -->
<div id="menu"><!-- BEGIN MENU -->
<ul id="menu-main-menu" class="menu">
<li class="menu-item" style="display: block; width: 85%; margin: 10px auto 20px;"><img src="<?php bloginfo ('template_url'); ?>/images/logo.png" /></li>
<li style="border-top: 1px solid #666;" class="menu-item"><a href="<?php bloginfo('url'); ?>">Home</a></li>
<?php wp_nav_menu( array( 'theme_location' => 'primary' ,  'container' => false, 'menu_class' => '', 'items_wrap' => '%3$s' ) ); ?>		
<!-- END MENU --></div>


<!-- BEGIN MENU CLOSE AREA -->
<div id="menu-open-overlay"></div>
<!-- END MENU CLOSE AREA -->

<!-- BEGIN IF MENU OPEN, SHOW BLUE BACKGROUND -->
<div id="menu-open-background">
	<div class="menu-open-background"></div>
</div>
<!-- END IF MENU OPEN, SHOW BLUE BACKGROUND -->

<div id="sitewrap" style="background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2014/10/LobbyFull2-2.jpg);">
<div id="content">
<div class="wrapper-outer">
<div class="content-wrapper">



<!-- BEGIN MENU BUTTON -->
<div class="menu-wrapper">


		<div class="menu-button">
			<i class="menubar"></i>
			<span class="hamburger-helper">menu</span>
		</div>
		<!-- BEGIN LOGO -->
		<div class="site-logo">
			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/logo.png" /></a>
		</div>
		<!-- END LOGO -->

		<!-- start translation flag -->
		<!-- <div class="trans-flags">
			<ul>
				<li><a href="#"><i class="fa fa-flag"></i></a></li>
				<li><a href="#"><i class="fa fa-flag"></i></a></li>
			</ul>
		</div> -->
		<!-- end translation flags -->

		<div class="languages"><?php language_selector_flags(); ?></div>

</div>
<!-- END MENU BUTTON -->
<!DOCTYPE HTML>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	 <title><?php wp_title(); ?></title>
	 <?php 
		if ( file_exists( dirname( __FILE__ ) . '/noindex.php' ) ) {
		    include( dirname( __FILE__ ) . '/noindex.php' );
		}
	?>
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

<!-- font awesome -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- google analyticsl -->
 
<script> 

	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
	Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-39967051-1', 'auto',{'allowLinker': true });
	ga('require', 'linker'); ga('linker:autoLink', ['pacificbeachhotel.reztrip.com','pacificbeachhotel.reztripmobile.com']);
	ga('send', 'pageview');

</script>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NGR3R9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NGR3R9');</script>
<!-- End Google Tag Manager -->


<!-- google fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

<!-- iosSlider plugin -->
<script src = "<?php bloginfo ('template_url'); ?>/js/jquery.iosslider.js"></script>
<script src = "<?php bloginfo ('template_url'); ?>/js/jquery.easing-1.3.js"></script>
<script src = "<?php bloginfo ('template_url'); ?>/js/jquery.scrollLock.js"></script>

<?php if(is_home()){ ?>
<script type="text/javascript">

	$(document).ready(function() {
		
		<?php 

			query_posts(array(
				'post_type' => "specials", 
				'posts_per_page' => 3,
				'order' => 'DESC',
				'meta_query' => array(
					array (
					'key' => 'cebo_homepop',
					'value'=>'on'
					)
			))); 

			if(have_posts() && is_home()) { 

		?>

			$.scrollLock(true);

		<?php } wp_reset_query(); ?>

		$('.iosSlider').iosSlider({
			snapToChildren: true,
			desktopClickDrag: true,
			infiniteSlider: true,
			snapSlideCenter: true,
			autoSlide: true,
			onSlideChange: slideChange
		});

		$('.nothanks').click(function(e){
			e.preventDefault();
			$('.mobile-popup').fadeOut(200);
			$("body.home.blog").css({ overflow: "auto" });
			$("body.home.blog").css({ position: "initial" });
			$.scrollLock(false);
		});

		$('a.nothanks.first').click(function(e){
			e.preventDefault();
			$('.mobile-popup').fadeOut(200);
			$("body.home.blog").css({ overflow: "auto" });
			$("body.home.blog").css({ position: "initial" });
			$.scrollLock(false);
		});	
				
	}); 

	function slideChange(args) {
	
		try {
			console.log('changed: ' + (args.currentSlideNumber - 1));
		} catch(err) {
		}
		
		$('.indicators .item').removeClass('selected');
		$('.indicators .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
	 	$('.item').removeClass('someClass');
        $(args.currentSlideObject).addClass('someClass'); 
	
	}
</script>
<?php } ?>


<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript">

	$(document).ready(function(){

		$.datepicker._defaults.dateFormat = 'yy-mm-dd';

		$(".datepicker").datepicker({
			minDate: 0,
			// gotoCurrent: true,
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

		$('.swipe-down').click(function() {
			$(".reservationlink h4").show();
			$(".reservationfooter").removeClass("uppers");
		});
		
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

// $(document).ready(function(){

// 	var getdate = $.datepicker.formatDate('yy-mm-dd', new Date());
// 	$('#arrival_date').val(getdate);

// });

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

<?php if(is_home()){ ?>

<?php 

	query_posts(array(
		'post_type' => "specials", 
		'posts_per_page' => 3,
		'order' => 'DESC',
		'meta_query' => array(
			array (
			'key' => 'cebo_homepop',
			'value'=>'on'
			)
	))); 

	if(have_posts()) : if(is_home()){ include('mobile-pop-up.php'); } endif; wp_reset_query();

?>

<?php } ?>

<?php query_posts('post_type=notification&posts_per_page=1'); if(have_posts()) : while(have_posts()) : the_post(); ?>


<style type="text/css">
.ns-box.ns-bar{
    background: <?php the_field('color'); ?>;
}


.ns-box-inner::before{
    background: <?php the_field('icon_color'); ?>;
}
</style>

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
<li class="menu-item" style="display: block; width: 35%; margin: 0px auto 10px;"><img src="<?php bloginfo ('template_url'); ?>/images/logo.png" /></li>
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

<div id="sitewrap">
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

		<!-- <div class="languages"><?php //language_selector_flags(); ?></div> -->

</div>
<!-- END MENU BUTTON -->
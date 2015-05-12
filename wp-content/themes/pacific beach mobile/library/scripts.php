<script type="text/javascript">

	$(document).ready(function(){


						
			   	   /** HIDE MENU **/
		    $("#navigation").css("margin-top", "-88px");
		    
		    
		    <?php if(is_front_page()) { ?> 
		    
		    $(window).scroll(function() {
		        
		        var verschil = ($(window).scrollTop() / 5);
		    
		        if (verschil > 40) 
		            
		            $('#navigation').animate({'margin-top': '0px' }, {duration: 500, queue: false}).addClass('jumpshot');
		        
		        else if (verschil < 40)
		            
		            $('#navigation').animate({'margin-top': '-88px' }, {duration: 500, queue: false}).removeClass('jumpshot');
		    });
		    
		    
		    <?php } else { ?>
		    
		    
		     $(window).scroll(function() {
		        
		        var verschil = ($(window).scrollTop() / 5);
		    
		        if (verschil > 40) 
		            
		            $('#navigation').animate({'margin-top': '0px' }, {duration: 500, queue: false}).addClass('jumpshot');
		        
		        else if (verschil < 40)
		            
		            $('#navigation').animate({'margin-top': '-88px' }, {duration: 500, queue: false}).removeClass('jumpshot');
		    });



		    <?php } ?>
		    
		    
		    
		if ($(window).width() > 399) {
			$("a[rel^='prettyPhoto']").prettyPhoto({
		    	default_width: 800,
		    	default_height: 600
		    });
		}
	    
		$(".closebox a").click(function(e) {
			e.preventDefault();
			
			$(".specialsbox").addClass("shutit");

			
		})

	    // Hidden calendar

	    $("#primary-nav .button.input-append.date").hover(function() {
					
			$(".ressys").addClass("dropit");
			$(this).removeClass("fixeer");
		
		},function(){
		
			$(".ressys").removeClass("dropit");
		
		
		});

		$("#primary-nav .button.input-append.date").toggle(function() {
					
			$(".ressys").addClass("dropit");
			$(this).removeClass("fixeer");
		
		},function(){
		
			$(".ressys").removeClass("dropit");
		
		
		});
		
		


		// Reserve button hover
		
		 $('.ressys').hover(function() {
			$("#primary-nav .button").stop().addClass("nothingness");
			
			
		 	}, function() {
	 		$("#primary-nav .button").removeClass("nothingness");			
		 });

		$('.slides-mini').slidesjs({
		    width: 540,
		    height: 292,
		    navigation: false,
		    effect: {
			      slide: {
			        // Slide effect settings.
			        speed: 500
			          // [number] Speed in milliseconds of the slide animation.
			      },
			      fade: {
			      	speed: 1000,
			      	crossfade: true
			      }
			  },
			  navigation: {
			      active: false,
			        // [boolean] Generates next and previous buttons.
			        // You can set to false and use your own buttons.
			        // User defined buttons must have the following:
			        // previous button: class="slidesjs-previous slidesjs-navigation"
			        // next button: class="slidesjs-next slidesjs-navigation"
			      effect: "fade"
			        // [string] Can be either "slide" or "fade".
			    },
		    pagination: {
		    	effect: 'fade',
		    }
		});



		// Flexslider

		$('.flexslider').flexslider({
			animation: "fade",
			animationSpeed: 1200,
			slideshowSpeed: 3500,
			pauseOnAction: false,
		});

		   
		$.datepicker._defaults.dateFormat = 'yy-mm-dd';
		
		var days = new Array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
		var months = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ];
		
			$('.datepicker').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#arve',
    			altFormat : 'dd',
    			minDate: new Date(),
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#arv').val(selectedMonthName);
			        $("#arrival_date").val(event);

			        var d = $(this).datepicker("getDate");
			        var d1 =  d.getFullYear() + '-' + (d.getMonth()) + '-' + (d.getDate() + 1);
					var d2 =  (d.getDate() + 1);
			        $("#depee").val(d2);
			        $("#departure_date").val(d1);
			       
			    }
			     
			});
			
			var tester = $("#arrival_date").val();
			
			$('.departdatepicker').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#depee',
    			altFormat : 'dd',
    			minDate: 1,
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#dep').val(selectedMonthName);
			        $("#departure_date").val(event);
			        
			    }
			});

			$('.datepickerr').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#arve-1',
    			altFormat : 'dd',
    			minDate: new Date(),
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
					var d = $(this).datepicker("getDate");
					var d1 =  d.getFullYear() + '-' + (d.getMonth()) + '-' + (d.getDate() + 1);
					var d2 =  (d.getDate() + 1);

			        $('#arv-1').val(selectedMonthName);
			        $("#arrival_date-1").val(event);
			        $("#depee-1").val(d2);
			        $("#departure_date-1").val(d1);
			       
			    }
			     
			});
						
			$('.departdatepickerr').datepicker({
			    dateFormat: 'yy-mm-dd',
			    altField  : '#depee-1',
    			altFormat : 'dd',
    			minDate: 1,
			    onSelect: function(event, ui) {
			        var dayOfWeek = $(this).datepicker('getDate').getUTCDay();
			        var selectedMonthName = months[$(this).datepicker('getDate').getMonth()];
			        $('#dep-1').val(selectedMonthName);
			        $("#departure_date-1").val(event);
			    }
			});

			$(".datepicker-ressys").datepicker({
				minDate: 0,
				numberOfMonths: [2,1],
				beforeShowDay: function(date) {
					var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-nav").val());
					var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-nav").val());
					return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
				},
				onSelect: function(dateText, inst) {
					var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date-nav").val());
					var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date-nav").val());
	                var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);

	                
	                if (!date1 || date2) {
						$("#arrival_date-nav").val(dateText);
						$("#departure_date-nav").val("");
	                    $(this).datepicker();
	                } else if( selectedDate < date1 ) {
	                    $("#departure_date-nav").val( $("#arrival_date-nav").val() );
	                    $("#arrival_date-nav").val( dateText );
	                    $(this).datepicker();
	                } else {
						$("#departure_date-nav").val(dateText);
	                    $(this).datepicker();
					}
				}
			});
			
			
			
			
			var d=new Date();
			var month=new Array();
			month[0]="January";
			month[1]="February";
			month[2]="March";
			month[3]="April";
			month[4]="May";
			month[5]="June";
			month[6]="July";
			month[7]="August";
			month[8]="September";
			month[9]="October";
			month[10]="November";
			month[11]="December";
			var n = month[d.getMonth()];
			
			$("#arv").attr("placeholder", n);
			$("#dep").attr("placeholder", n);
			$("#arv-1").attr("placeholder", n);
			$("#dep-1").attr("placeholder", n);
			
			
			
			jQuery('form a.button').click(function(e) {
				e.preventDefault();
				_gaq.push(['_link', createURL() ]);
				return false;
			});





		// Question box

		 $("input.check").click(function(){
	        if($(this).is(":checked")){
	            $(this).parent().addClass("question-box-active");
	        }
	    });



		// Pretty Photo

	    $('a[rel=tooltip]').mouseover(function(e) {
	         
	        //Grab the title attribute's value and assign it to a variable
	        var tip = $(this).attr('title');   
	         
	        //Remove the title attribute's to avoid the native tooltip from the browser
	        $(this).attr('title','');
	         
	        //Append the tooltip template and its value
	        $(this).append('<div id="tooltip"><div class="tipHeader"></div><div class="tipBody">' + tip + '</div><div class="tipFooter"></div></div>');    
	         
	        //Set the X and Y axis of the tooltip
	        $('#tooltip').css('top', e.pageY + 10 );
	        $('#tooltip').css('left', e.pageX + 20 );
	         
	        //Show the tooltip with faceIn effect
	        $('#tooltip').fadeIn('500');
	        $('#tooltip').fadeTo('10',0.8);
	         
	    }).mousemove(function(e) {
	     
	        //Keep changing the X and Y axis for the tooltip, thus, the tooltip move along with the mouse
	        $('#tooltip').css('top', e.pageY + 10 );
	        $('#tooltip').css('left', e.pageX + 20 );
	         
	    }).mouseout(function() {
	     
	        //Put back the title attribute's value
	        $(this).attr('title',$('.tipBody').html());
	     
	        //Remove the appended tooltip template
	        $(this).children('div#tooltip').remove();
	         
	    });
	    
	    $('.section-photos').remove('.gallery');



	    // Tabbing - TABS FUNCTION

		$('.tabs-wrapper').each(function() {
			$(this).find(".tab-content").hide(); //Hide all content
			$(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
			$(this).find(".tab-content:first").show(); //Show first tab content
		});

		$("ul.tabs li").click(function(e) {
			$(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
			$(this).addClass("active"); //Add "active" class to selected tab
			$(this).parents('.tabs-wrapper').find(".tab-content").hide(); //Hide all tab content

			var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
			$("li.tab-item:first-child").css("background", "none" );
			$(this).parents('.tabs-wrapper').find(activeTab).fadeIn(1000); //Fade in the active ID content
			e.preventDefault();
		});

		$("ul.tabs li a").click(function(e) {
			e.preventDefault();
		})

		$("li.tab-item:last-child").addClass('last-item');




		// iosslider

		<?php if ( 'rooms' == get_post_type() || 'property' == get_post_type() ) 	{ ?>

			$('#room-details-slider .iosSlider').iosSlider({
				snapToChildren: true,
				desktopClickDrag: true,
				infiniteSlider: true,
				snapSlideCenter: true,
				onSlideChange: slideChange,
				autoSlideTransTimer: 2000,
				keyboardControls: true,
				onSlideComplete: slideComplete,
				navNextSelector: $('.iosslider-next'),
			    navPrevSelector: $('.iosslider-prev'),
			});
			
			$('.slideSelectors .item').eq(0).addClass('selected');

			function slideComplete(args) {
					
				$('.iosslider-next, .iosslider-prev').removeClass('unselectable');
			    if(args.currentSlideNumber == 1) {
			        $('.iosslider-prev').addClass('unselectable');
			    } else if(args.currentSliderOffset == args.data.sliderMax) {
			        $('.iosslider-next').addClass('unselectable');
		    	}

		    }

			function slideChange(args) {

				try {
					console.log('changed: ' + (args.currentSlideNumber - 1));
				} catch(err) {
				}
				
				$('.indicators .item').removeClass('selected');
				$('.indicators .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

				$('.slideSelectors .item').removeClass('selected');
				$('.slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');

				$('.iosSlider .item').removeClass('current');
			    $(args.currentSlideObject).addClass('current');

			}
			
			/*

			$('.iosSlider').bind('mousewheel', function(event, delta) {

			    var currentSlide = $('.iosSlider').data('args').currentSlideNumber;

			    //if delta is a positive number, go to prev slide. If delta is a negative number, go to next slide.
			    if(delta > 0) {

			        $('.iosSlider').iosSlider('goToSlide', currentSlide - 1);

			    } else {

			        $('.iosSlider').iosSlider('goToSlide', currentSlide + 1);

			    }

			});
			
			*/

		<?php } ?>

	


		// Sidebar not working fix

		$("body a").attr('data-ajax', false);

		$('.section-photos li').bind("vmousedown", function(){});

		$('.thumbgal li').bind("vmousedown", function(){});

	});



	$( function() {

		// Quotes Rotator

		$( '#cbp-qtrotator' ).cbpQTRotator();

	} );



	// Sticky Nav

	



	// FadeIn logo

	 $(window).scroll(function() {
		        
        var verschil = ($(window).scrollTop() / 5);
    
      if (verschil > 40) 
            
           $('.droplogo').addClass('jumpshot');
        
        else if (verschil < 40)
            
           $('.droplogo').removeClass('jumpshot');
    });



	 // Calendar in Navigation

	 $(function() {

	 	if ($(window).width() < 940) {
			   
		   var pos 	= 'mm-top mm-right mm-bottom',
				zpos	= 'mm-front mm-next';

			var $html 	= $('html'),
				$menu	= $('nav#menu'),
				$both	= $html.add( $menu );

			$menu.mmenu();

			//	Add the position-classnames onChange
			$('input[name="pos"]').change(function() {
				$both.removeClass( pos ).addClass( 'mm-' + this.value );
			});
			$('input[name="zpos"]').change(function() {
				$both.removeClass( zpos ).addClass( 'mm-' + this.value );
			});

		}

	 	$( window ).resize(function() {

			if ($(window).width() > 940) {

				var $menu	= $('nav#menu');
				$menu.removeClass()
				$('nav#menu ul').removeClass()
				$('#primary-nav .container').prepend($menu);

			} else {

				var $menu	= $('nav#menu');
				$menu.addClass('fl mm-menu mm-horizontal mm-ismenu')
				$('nav#menu ul').addClass('mm-list mm-panel mm-opened mm-current')
				$('html').prepend($menu);

			}

		});
			
	});

</script>
<!-- BEGIN SHOW/HIDE MAIN MENU -->

jQuery('#reserve-swipe').on('touchstart click', function(e) {

e.preventDefault();



if(e.type == "touchstart") {

	/* touchstart events */

	if(jQuery('#reserve-swipe').hasClass('swipeform-active'))

	{
	
		/* menu elements */
		
		jQuery("#reserve-swipe").removeClass("swipeform-active");
		document.getElementById("reserve-swipe").innerHTML = "Click here for Reservations";
		jQuery(".reserve-form").slideUp(500);


	} else {
	
		/* menu elements */

		jQuery('#reserve-swipe').addClass('swipeform-active');
		document.getElementById("reserve-swipe").innerHTML = "Close Reservation Form";
		jQuery("#reserve-swipe").scrollTop($("#reserve-swipe").scrollTop() + 500);
		jQuery(".reserve-form").slideDown(500);
		$('html, body').animate({scrollTop: $("#reserve-swipe").offset().top}, 2000);

	}

} else if(e.type == "click") {

	/* click events */

	if(jQuery('#reserve-swipe').hasClass('swipeform-active'))

	{
	
		/* menu elements */
		
		jQuery("#reserve-swipe").removeClass("swipeform-active");
		document.getElementById("reserve-swipe").innerHTML = "Click here for Reservations";
		jQuery(".reserve-form").slideUp(500);
		
	} else {

		/* menu elements */

		jQuery('#reserve-swipe').addClass('swipeform-active');
		document.getElementById("reserve-swipe").innerHTML = 'Close Reservation Form';
		jQuery(".reserve-form").slideDown(500);
		$('html, body').animate({scrollTop: $("#reserve-swipe").offset().top}, 2000);

	}

}

});

<!-- END SHOW/HIDE MAIN MENU -->

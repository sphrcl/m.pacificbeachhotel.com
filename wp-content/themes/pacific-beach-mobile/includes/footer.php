<div class="reservationlink">
	<i class="fa fa-calendar"></i>
	<h4><a href="#"><?php _e('Click to Reserve','cebolang'); ?></a></h4>

</div>
<div class="reservationfooter">

	<p class="swipe-down" align="center"><?php _e('Click to Close','cebolang'); ?></p>
	
	<div class="rescontiner">
		<div class="calendars">
						
			<div class="datepicker"></div>
					
		</div>
		<div class="reservationform">
					
			<form method="get" action="http://pacificbeachhotel.reztrip.com">
				
				<input type="hidden" name="propertyId" value="228">
				<input type="hidden" name="locale" value="en-us">
				<input type="hidden" name="sub" value="pacificbeachhotel">

				<!-- hidden arrival and departure dates -->
				<span class="calsec" style="display: none;">
					<input type="text"  id="arrival_date" name="arrival_date" placeholder="Arrival" class="calendarsection" />
					<input type="hidden"  id="arv">
					<input type="text" id="departure_date" name="departure_date" placeholder="Departure" class="calendarsection" />
					<input type="hidden" id="dep">
				</span>
				
				

					<select name="adults" class="halfsies lefter">
						<option value="1">1 Adult</option>
						<option value="2">2 Adults</option>
						<option value="3">3 Adults</option>
						<option value="4">4 Adults</option>
					</select>
				
				
			
					<select name="numChildren" class="halfsies righter">
						<option value="0"><?php _e('0 Kids', 'cebolang'); ?></option>
						<option value="1"><?php _e('1 Kid', 'cebolang'); ?></option>
						<option value="2"><?php _e('2 Kids', 'cebolang'); ?></option>
						<option value="3"><?php _e('3 Kids', 'cebolang'); ?></option>
					</select>
				
				
				<div class="clear"></div>
				
				<div class="inputpromo">
					<input type="text" id="promo" name="promo" placeholder="<?php _e('Promo Code', 'cebolang'); ?>" />
				</div>
				
				<div class="clear"></div>
				
				<button class="button" type="submit"><?php _e('Book Now','theme-text-domain'); ?></button>

			</form>
		</div>
	</div>
</div>

</div>




</div>
<!-- END CONTENT -->



		

</div>
</div>
</div>

<!-- BEGIN FOOTER JS INCLUDES -->
<!-- <script type='text/javascript' src='<?php // bloginfo ('template_url'); ?>/js/leftswipe.js'></script> -->
<script type='text/javascript' src='<?php bloginfo ('template_url'); ?>/js/upswipe.js'></script>
<script type='text/javascript' src='<?php bloginfo ('template_url'); ?>/js/rightswipe.js'></script>
<script type='text/javascript' src='<?php bloginfo ('template_url'); ?>/js/autogrow/jquery.autogrow-textarea.js'></script>
<script type='text/javascript' src='<?php bloginfo ('template_url'); ?>/js/placeholder-fix.js'></script>
<script type='text/javascript' src='<?php bloginfo ('template_url'); ?>/js/jquery.scrollTo-min.js'></script>
<!-- END FOOTER JS INCLUDES -->

<!-- Google Code for Remarketing Tag --><!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup -->
<script type="text/javascript">/* <![CDATA[ */var google_conversion_id = 974611831;var google_custom_params = window.google_tag_params;var google_remarketing_only = true;/* ]]> */</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script><noscript><div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/974611831/?value=0&amp;guid=ON&amp;script=0"/></div></noscript>

</body>
</html>
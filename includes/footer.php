<div class="reservationlink">
	<h4><a href="#">Click to Reserve</a></h4>

</div>
<div class="reservationfooter">

	<p class="swipe-down" align="center">Click to close</p>
	
	<div class="rescontiner">
		<div class="calendars">
						
			<div class="datepicker"></div>
					
		</div>
		<div class="reservationform">
					
			<form method="get" action="http://rownyc.reztripmobile.com/rt/m/results?">
				
				<input type="hidden" name="propertyId" value="71">
				<input type="hidden" name="locale" value="en-us">
				<input type="hidden" name="sub" value="rownyc">

				<!-- hidden arrival and departure dates -->
				<span class="calsec" style="display: none;">
					<input type="text"  id="arrival_date" name="arrival" placeholder="Arrival" class="calendarsection" />
					<input type="hidden"  id="arv">
					<input type="text" id="departure_date" name="departure" placeholder="Departure" class="calendarsection" />
					<input type="hidden" id="dep">
				</span>
				
				
					<select name="numAdults" class="halfsies lefter">
						<option value="1">1 Adult</option>
						<option value="2">2 Adults</option>
						<option value="3">3 Adults</option>
						<option value="4">4 Adults</option>
					</select>
				
				
			
					<select name="numChildren" class="halfsies righter">
						<option value="0">0 Kids</option>
						<option value="1">1 Kid</option>
						<option value="2">2 Kids</option>
						<option value="3">3 Kids</option>
					</select>
				
				
				<div class="clear"></div>
				
				<div class="inputpromo">
					<input type="text" id="promo" name="promo" placeholder="Coupon Code" />
				</div>
				
				<div class="clear"></div>
				
				<button class="button" type="submit">Book Now</button>

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

</body>
</html>

<div class="mobile-popup fadeIn">

	<p style="position: absolute;right: 10px;"><a href="#" class="nothanks first">x</a></p>

	<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo ('template_url'); ?>/images/logo.png" /></a>

	<p><span class="mainbold">New Special Offers</span></p>

	<div class = 'containerOuter'>
		
			<div class = 'container'>
				
				<div class = 'iosSliderContainer'>
					
					<div class = 'iosSlider'>
					
						<div class = 'slider'>

					<?php query_posts(array(
						'post_type' => "specials", 
						'posts_per_page' => 3,
						'order' => 'DESC',
						'meta_query' => array(
							array (
							'key' => 'cebo_homepop',
							'value'=>'on'
							)
						))); 

					$counter = 1;

					if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

					<div class = 'item <?php echo $counter;?>' style="background:url(<?php if($imgsrc) { echo $imgsrc[0]; } else { ?><?php bloginfo('template_url'); ?>/images/main.jpg<?php } ?>);">

						<div class = 'text'>

							<div class = 'title'>
								<span><?php if (get_post_meta($post->ID, 'cebo_mob_title', true)){echo get_post_meta($post->ID, 'cebo_mob_title', true);} else{ the_title(); } ?></span>
							</div>

							<div class = 'button'>
								<span><a href="<?php the_permalink(); ?>">View More</a></span>
							</div>

							<div class = 'button book'>
								<span><a href="<?php get_post_meta($post->ID, 'cebo_mob_booklink', true); ?>">Book Now</a></span>
							</div>

						</div>

					</div>

					<?php $counter++; endwhile; endif; wp_reset_query(); ?>	

				</div>

			</div>

				<div class = 'indicators'>
		<div class = 'item selected'></div>
		<div class = 'item'></div>
		<div class = 'item'></div>
	</div>

	<div class = 'button unlock'>
		<span><a href="http://m.pacificbeachhotel.com/specials-offers/">Unlock All Offers</a></span>
	</div>

	<p><a href="#" class="nothanks">no thanks</a></p>

		</div>

	</div>

	</div>



</div>
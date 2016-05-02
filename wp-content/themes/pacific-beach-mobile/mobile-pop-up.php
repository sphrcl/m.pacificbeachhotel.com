
<div class="mobile-popup fadeIn">

	<p style="position: absolute;right: 10px;"><a href="javascipt:void(0);" class="nothanks first">x</a></p>

	<a href="<?php bloginfo('url'); ?>"><img style="height:70px;" src="<?php bloginfo ('template_url'); ?>/images/logo.png" /></a>

	<p><span class="mainbold">New Special Offers</span></p>

	<div class = 'fluidHeight'>
			
			<div class = 'sliderContainer'>
				
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

					<div class = 'item'>
								  
						<img src="<?php if (get_post_meta($post->ID, 'cebo_mob_image', true)){echo get_post_meta($post->ID, 'cebo_mob_imagee', true);} else{ echo $imgsrc[0]; } ?>">

						<div class = 'text'>

							<div class = 'title'>
								<span><?php if (get_post_meta($post->ID, 'cebo_mob_title', true)){echo get_post_meta($post->ID, 'cebo_mob_title', true);} else{ the_title(); } ?></span>
							</div>

							<div class="button-wrapper-pop">
								<div class="button">
									<span><a href="<?php the_permalink(); ?>">View More</a></span>
								</div>

								<div class="button book">
									<span><a href="<?php get_post_meta($post->ID, 'cebo_mob_booklink', true); ?>">Book Now</a></span>
								</div>
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

	<p><a href="javascipt:void(0);" class="nothanks">no thanks</a></p>

		</div>

	</div>

</div>
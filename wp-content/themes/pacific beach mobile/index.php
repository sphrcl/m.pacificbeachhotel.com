<?php

session_start();

$_SESSION['roompush'] = $push;

get_header(); ?>



	<div class="copybody" style="background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2014/10/LobbyFull2-2.jpg);">

	<div class="stage">

		<div class="swiper-main homeswipe shadow">
			<div class="swiper-container swiper1">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="slidimge" style="background: url('<?php bloginfo ('template_url'); ?>/images/pacific-beach-hotel-image3.jpg')"></div>
						<p>
							<span class="mainbold">Pacific Beach Hotel</span>
							<span class="textthin">Beautiful Oceanfront</span>
						</p>
						<a class="book-now" href="http://pacificbeachhotel.reztripmobile.com">Book Now</a>
					</div>

					<div class="swiper-slide">
						<div class="slidimge" style="background-image: url('<?php bloginfo ('template_url'); ?>/images/pacific-beach-hotel-waterfront-with-kiddos.jpg');"></div>
						<p>
							<span class="mainbold">Pacific Beach Hotel</span>
							<span class="textthin">Family-Friendly</span>
						</p>
						<a class="book-now" href="http://pacificbeachhotel.reztripmobile.com">Book Now</a>
					</div>

					<div class="swiper-slide">
						<div class="slidimge" style="background-image: url('<?php bloginfo ('template_url'); ?>/images/pacific-beach-banner4.jpg');"></div>
						<p>
							<span class="mainbold">Pacific Beach Hotel</span>
							<span class="textthin">Just Steps from Waikiki Beach</span>
						</p>
						<a class="book-now" href="http://pacificbeachhotel.reztripmobile.com">Book Now</a>
					</div>
				</div>
				<div class="pagination1"></div>
			</div>
		</div>

		<div class="mainboo">

		</div> <!-- .main-boo -->

		<div class="halfybox">

			<?php query_posts('post_type=page&p=9'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

			<div class="halfy left shadow" style="background: url('<?php echo $imgsrc[0]; ?>')">
				<p><?php the_title(); ?></p>
				<a class="coverlink" href="<?php the_permalink(); ?>"></a>
			</div>

			<?php endwhile; endif; wp_reset_query(); ?>
			<?php query_posts('post_type=page&p=7'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

			<div class="halfy right shadow" style="background: url('<?php echo $imgsrc[0]; ?>')">
				<p><?php the_title(); ?></p>
				<a class="coverlink" href="<?php the_permalink(); ?>"></a>
			</div>

			<?php endwhile; endif; wp_reset_query(); ?>
		</div>

		<div id="st-accordion" class="st-accordion">

			<ul class="linkers" style="margin-bottom: 0;">
			<?php query_posts('post_type=page&p=338'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>

				<li>
					<a style="padding: 0px; height: 58px; line-height: 58px;" href="#"><?php the_title(); ?></a>

					<div class="st-content">

						<div class="st-content-container">

							<p><?php the_content(); ?></p>

						</div>

		            </div>

		            <div class="content-opener"><i class="fa fa-plus"></i></div>

				</li>

			<?php endwhile; endif; wp_reset_query(); ?>
			</ul>

		</div>

		<?php query_posts('post_type=page&p=13'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
		<div class="fullybox shadow" style="background: url('<?php echo $imgsrc[0]; ?>')">
			<p class="fullytext"><?php the_title(); ?></p>
				<a class="coverlink" href="<?php the_permalink(); ?>"></a>
		</div>
		<?php endwhile; endif; wp_reset_query(); ?>
		<div class="fullybox shadow" style="background: url('http://sphericalcommunications.com/pb-mobile/wp-content/uploads/2015/05/pacific-beach-cceanarium-tank.jpg')">
			<p class="fullytext">Dining</p>
				<a class="coverlink" href="/dining/"></a>
		</div>
		<?php include(TEMPLATEPATH . '/includes/superfooter.php'); ?>

	</div>



<?php include(TEMPLATEPATH . '/includes/footer.php'); ?>

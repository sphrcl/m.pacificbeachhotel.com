<?php 

session_start();

$_SESSION['roompush'] = $push;

get_header(); ?>



	<div class="copybody" style="background-image: url(<?php bloginfo('url'); ?>/wp-content/uploads/2014/10/LobbyFull2-2.jpg);">

	<div class="stage">
	
		<div class="swiper-main homeswipe">
			<div class="swiper-container swiper1">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="slidimge" style="background-image: url('<?php bloginfo ('template_url'); ?>/images/LobbyFull2-2.jpg');"></div>
						<p>
							<span class="mainbold">ROW NYC</span>
							<span class="textthin">TIMES SQUARE <br>NEVER LOOKED SO <br>GOOD</span>
						</p>
					</div>
					
					<div class="swiper-slide"> 
						<div class="slidimge" style="background-image: url('<?php bloginfo ('template_url'); ?>/images/LobbyWide2-1.jpg');"></div>
						<p>
							<span class="mainbold">ROW NYC</span>
							<span class="textthin">TIMES SQUARE <br>NEVER LOOKED SO <br>GOOD</span>
						</p>
					</div>
				</div>
				<div class="pagination1"></div>
			</div>
		</div>
		
		<div class="mainboo">
		
		</div> <!-- .main-boo -->
		
		<div class="halfybox">
		
			<?php query_posts('post_type=page&p=19'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
			
			<div class="halfy left" style="background: url('<?php echo $imgsrc[0]; ?>')">
				<p><?php the_title(); ?></p>
				<a class="coverlink" href="<?php the_permalink(); ?>"></a>
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>	
			<?php query_posts('post_type=page&p=9'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
			
			<div class="halfy right" style="background: url('<?php echo $imgsrc[0]; ?>')">
				<p><?php the_title(); ?></p>
				<a class="coverlink" href="<?php the_permalink(); ?>"></a>
			</div>
			
			<?php endwhile; endif; wp_reset_query(); ?>	
		</div>
		
		
		<?php query_posts('post_type=page&p=23'); if(have_posts()) : while(have_posts()) : the_post(); $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full"); ?>
		<div class="fullybox" style="background: url('<?php echo $imgsrc[0]; ?>')">
			<p class="fullytext"><?php the_title(); ?></p>
				<a class="coverlink" href="<?php the_permalink(); ?>"></a>
		</div>
		<?php endwhile; endif; wp_reset_query(); ?>	
		<div class="fullybox" style="background: url('http://m.rownyc.com/wp-content/themes/rownyc-mobile/images/row-nyc-city-kitchen-homepage-mobile.jpg')">
			<p class="fullytext">City Kitchen</p>
				<a class="coverlink" href="http://citykitchen.rownyc.com/"></a>
		</div>
		<?php include(TEMPLATEPATH . '/includes/superfooter.php'); ?>
		
	</div>



<?php include(TEMPLATEPATH . '/includes/footer.php'); ?>

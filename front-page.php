<?php 
/*
* Template Name: Front Page
*/
get_header();
 ?>

 <!-- Template: front-page.php -->
	
	<?php if (have_rows('front_page_slider')): ?>
	<!-- Intro Banner -->
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<?php while (have_rows('front_page_slider')): the_row();
				$title 	= get_sub_field('front_slider_title');
				$desc 	= get_sub_field('front_slider_description');
				$image 	= get_sub_field('front_slider_image');
			 ?>
			<section id="" class="swiper-slide front-page-intro parallax transition" style="background-image: url('<?php echo $image ["url"]; ?>');">

				<div class="container">
					<div id="parallax-content" class="parallax-content">
						<h1 class="white"><?php echo $title; ?></h1> 
						<summary class="white"><?php echo $desc; ?></summary>
					</div>
				</div>
			</section>	
			<?php endwhile; ?>
		</div>
		<!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
	</div><!-- Swiper container -->
	<?php endif; ?>
	
	
	<!-- Intro Second in two columns -->
	<section class="section-2">
		<div class="container">
			<div class="one-third">
				<?php the_field('front_second_text'); ?>
				<a href="<?php the_field('front_second_link_to_page'); ?>" class="but blue">Know more</a>
			</div>
			<div class="two-third">
				<div class='embed-container hide'><iframe src='https://www.youtube.com/embed/<?php the_field('front_second_video'); ?>' frameborder='0' allowfullscreen></iframe></div>
			</div>
		</div>
	</section>

<?php include (TEMPLATEPATH . '/list-of-services.php'); ?>

<!-- Call to action (such as Headline with Contact button) -->
<section class="section-4 table">
	<div class="table-cell">
		<div class="container">
			<div class="two-third">
				<h4 class="white">For dedicated and individualised care</h4>
			</div>
			<div class="one-third">
				<a href="#" class="but-2 white-but">Contact Dr Chang</a>
			</div>
		</div>
	</div>
</section>
<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>
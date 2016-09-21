<?php 
/*
* Template Name: Front Page
*/
get_header();
 ?>

 <!-- Template: front-page.php -->

	<!-- Intro Banner -->
	<div class="swiper-container">
		<div class="swiper-wrapper">
			<section id="parallax" class="swiper-slide front-page-intro" style="background-image: url('<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/home-intro.png');">
				<div class="container">
					<div id="parallax_content">
						<div class="title">
							<h1 class="white">Philip Chang</h1> 
							<summary class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit totam!</summary>
						</div>
					</div>
				</div>
			</section>	
			<section id="parallax" class="swiper-slide front-page-intro" style="background-image: url('<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/home-intro.png');">
				<div class="container">
					<div id="parallax_content">
						<div class="title">
							<h1 class="white">Philip Chang</h1> 
							<summary class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit totam!</summary>
						</div>
					</div>
				</div>
			</section>	
			<section id="parallax" class="swiper-slide front-page-intro" style="background-image: url('<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/home-intro.png');">
				<div class="container">
					<div id="parallax_content">
						<div class="title">
							<h1 class="white">Philip Chang</h1> 
							<summary class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit totam!</summary>
						</div>
					</div>
				</div>
			</section>	
		</div>
		<!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
	</div>

	<!-- Intro Second in two columns -->
	<section class="section-2">
		<div class="container">
			<div class="one-third">
				<h2>Dr. Philip Chang</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic architecto, nam incidunt porro recusandae excepturi consequatur eaque deserunt ex perferendis, quia earum. Recusandae dolor accusantium dignissimos molestiae ducimus pariatur necessitatibus.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima inventore, animi minus illum dolore natus delectus odit ipsam architecto quis reprehenderit vel labore ipsa assumenda aperiam neque fugiat veritatis impedit.</p>
				<a href="#" class="but blue">Know more</a>
			</div>
			<div class="two-third">
				<div class='embed-container hide'><iframe src='https://www.youtube.com/embed/eKk8AWIT610' frameborder='0' allowfullscreen></iframe></div>
			</div>
		</div>
	</section>

<!-- List of services with Background image: (Such as: Surgical Experience and Expertise) -->
<section class="section-3 table" id="parallax-2" style="background-image: url('<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/surgical.jpg');">
	<div class="table-cell">
		<div class="container">
			<div class="row" id="parallax_content-2">
				<h3 class="white">Surgical Experience and Expertise</h3>
				<ul>
					<li><a class="but-3 transparent" href="#">Paediatric Ear</a></li>
					<li><a class="but-3 transparent" href="#">Adult Ear</a></li>
					<li><a class="but-3 transparent" href="#">Cochlear Implants</a></li>
					<li><a class="but-3 transparent" href="#">Acoustic Neuroma</a></li>
					<li><a class="but-3 transparent" href="#">Specialised Ent</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

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
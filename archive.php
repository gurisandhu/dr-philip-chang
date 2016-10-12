<?php 
/*
* Template Name: Category page
*/
get_header();
 ?>


<!-- Template: archive.php -->
<section class="banner parallax inner-banner" style="background-image: url('<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/IMG_0281.JPG');">
	<div class="container">
		<!-- No text here -->
	</div>
</section>

<section class="category-title table">
	<div class="row table-cell">
		<div class="container">
			<div class="desc">Experience and Expertise</div>
			<h1>Adult Ear Surgeon</h1>
		</div>
	</div>
</section>

<section class="service-list">
	<div class="container">
		<div class="width-70">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur nisi debitis nihil illo ad, consequuntur voluptas aut culpa maxime sequi est ab, suscipit aliquam in nam magni ullam maiores sapiente. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, quod tenetur nisi. Non eum, itaque, inventore quae id adipisci veritatis atque a deleniti et dicta, esse alias, ex doloremque modi?</p>
			<p>Laboriosam maxime dolores eius ipsam qui nemo culpa, ad voluptatem deserunt, doloremque ipsa!</p>
		</div>
		<ul class="row">
			<li><a href="#" class="but-4 transparent-blue">Stapedecotomy</a></li>
			<li><a href="#" class="but-4 transparent-blue">Cochlear Implant</a></li>
			<li><a href="#" class="but-4 transparent-blue">Repair of Superior Semicircular Canal Dehiscence</a></li>
			<li><a href="#" class="but-4 transparent-blue">Exostoses</a></li>
			<li><a href="#" class="but-4 transparent-blue">Bone Conduction Implant</a></li>
			<li><a href="#" class="but-4 transparent-blue">Perilymph Fistula Repair</a></li>
			<li><a href="#" class="but-4 transparent-blue">Cholesteatoma</a></li>
			<li><a href="#" class="but-4 transparent-blue">Surgery for Meniere's Disease</a></li>
			<li><a href="#" class="but-4 transparent-blue">Endoscopic Ear Surgery</a></li>
			<li><a href="#" class="but-4 transparent-blue">Middle Ear and Mastoid</a></li>
			<li><a href="#" class="but-4 transparent-blue">Surgery for Eustachian Tube Dysfunction</a></li>
			<li><a href="#" class="but-4 transparent-blue">Surgery for Sudden Hearing Loss</a></li>
			<li><a href="#" class="but-4 transparent-blue">Surgery for Sudden Hearing Loss</a></li>
			<li><a href="#" class="but-4 transparent-blue">Surgery for Sudden Hearing Loss</a></li>
		</ul>
	</div>
</section>

<?php include (TEMPLATEPATH . '/list-of-services.php'); ?>

<!-- Call to action (such as Headline with Contact button) -->
<section class="section-4 table">
	<div class="table-cell">
		<div class="container">
			<div class="two-third">
				<h4 class="white">Dr Chang is a specialist in ear surgery based at St Vincent's Private hospital</h4>
			</div>
			<div class="one-third verticalAlign">
				<a href="#" class="but-2 white-but">Contact Dr Chang</a>
			</div>
		</div>
	</div>
</section>

<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>
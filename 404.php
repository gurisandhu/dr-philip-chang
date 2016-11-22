<?php get_header(); ?>

<!-- Template 404.php -->

<section class="inner-banner-container">
	<section class="inner-banner-fixed">
		<section class="inner-banner show-loader" style="background-image: url('<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/IMG_0281.JPG');">
				<div class="container">
					<!-- No text here -->
				</div>
			</section>
	</section>
</section>

<section class="service-list">
	<div class="container">
		<div class="width-70">
			<h1>Page not found</h1>
			Whoops. looks like the page you were looking for does not exit. Maybe try checking in Menu or <a href="<?php echo esc_url( home_url('')); ?>/contact/">contact us</a>.
		</div>
	</div>
</section>

<?php include (TEMPLATEPATH . '/call-to-action.php'); ?>

<?php include (TEMPLATEPATH . '/list-of-services.php'); ?>

<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>
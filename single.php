<?php 
/*
* Template Name: Single Page
*/
get_header();
 ?>

<!-- Template: single.php -->

<?php $singleBanner = get_field('single_template_banner'); ?>

<?php if($catBanner): ?>
	<!-- Template: archive.php -->
	<section class="banner parallax inner-banner" style="background-image: url('<?php echo $singleBanner; ?>');">
		<div class="container">
			<!-- No text here -->
		</div>
	</section>
	<?php else: ?>
	<section class="banner parallax inner-banner" style="background-image: url('<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/Dr-Chang-Set-2116.jpg');">
		<div class="container">
		<!-- No text here -->
		</div>
	</section>
<?php endif; ?>

<section class="single-content">
	<div class="container">
		<div class="row">
			<div class="two-third"><h1><?php the_title(); ?></h1></div>
			<?php if(get_field('single_template_tagline')): ?>
				<div class="one-third">
					<blockquote>&#8220;<?php the_field('single_template_tagline'); ?>&#8221;</blockquote>
				</div>
			<?php endif; ?>
		</div>
		<div class="row single-body">
			<div class="two-third">
				<?php if(get_field('single_template_content')): ?>
					<div class="row single-page-intro">
						<?php echo (the_field('single_template_content')); ?>
					</div>
				<?php endif; ?>
				
				<?php if(get_field('single_add_accordion')): ?>
					<h2><?php echo the_field('single_template_repeater_title'); ?></h2>
					<?php if(have_rows('single_template_repeater')): 
							while(have_rows('single_template_repeater')): the_row();
					?>
					<h3 class="toggle-button"><?php echo the_sub_field('single_template_repeater_title'); ?></h3>
					<div class="toggle-content">
						<?php echo the_sub_field('single_template_repeater_content'); ?>
					</div>
					<?php endwhile; endif; ?>
				<?php endif; ?>
			</div>
			<div class="one-third">
				<div class='embed-container hide'>
					<iframe src='https://www.youtube.com/embed/<?php echo the_field('single_template_video'); ?>' frameborder='0' allowfullscreen></iframe>
				</div>
				<?php if(get_field('single_template_right_content')): ?>
					<h2><?php echo the_field('single_template_right_title'); ?></h2>
					<?php echo the_field('single_template_right_content'); ?>
				<?php endif; ?>

				<?php if(get_field('single_template_right_add_accordion')): ?>
					<?php if(have_rows('single_template_right_accordain')): 
							while(have_rows('single_template_right_accordain')): the_row();
					?>
						<h6 class="toggle-button"><?php echo the_sub_field('single_template_right_accordain_title'); ?></h6>
						<div class="toggle-content">
							<?php echo the_sub_field('single_template_right_accordain_content'); ?>
						</div>
				<?php endwhile; endif; endif; ?>
			</div>
		</div>
	</div>
</section>

<?php include (TEMPLATEPATH . '/call-to-action.php'); ?>

<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>
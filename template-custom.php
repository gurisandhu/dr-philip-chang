<?php 
/*
Template Name: Custom Template
*/
get_header(); ?>

<?php $customBanner = get_field('custom_banner'); ?>

<?php if($customBanner): ?>
	<!-- Template: archive.php -->
	<section class="banner parallax inner-banner" style="background-image: url('<?php echo $customBanner; ?>');">
		<div class="container">
			<!-- No text here -->
		</div>
	</section>
	<section class="custom-page">
	<?php else: ?>
	<section class="custom-page no-banner">
<?php endif; ?>
	<div class="container">
			<h1 class="title"><?php the_title(); ?></h1>
		<?php if(get_field('show_sidebar_on_right')): ?>
			<div class="cols two-third white-bg-template-2-page">
			<?php else: ?>
			<div class="cols row white-bg-template-2-page">
		<?php endif; ?> 

			<?php if(have_rows('add_custom_rows')): 
					while(have_rows('add_custom_rows')): the_row();
			?>
				<?php if(get_sub_field('choose_column') == 'Full Width'): ?>
					<div class="row">
					<?php elseif((get_sub_field('choose_column') == '2 Columns')): ?>
					<div class="col-2">
					<?php elseif((get_sub_field('choose_column') == '3 Columns')): ?>
					<div class="col-3">
					<?php elseif((get_sub_field('choose_column') == '1/4 Cols')): ?>
					<div class="one-third">
					<?php elseif((get_sub_field('choose_column') == '3/4 Cols')): ?>
					<div class="two-third">
				<?php endif; ?>
					
					<?php echo the_sub_field('custom_content'); ?>

					<?php if (get_sub_field('custom_add_button')): ?>
							<a class="blue but" href="<?php echo the_sub_field('custom_button_link'); ?>">
								<?php echo the_sub_field('custom_button_text'); ?>
							</a>
					<?php endif; ?>

					<?php if(get_sub_field('custom_add_accordion')): ?>
							
							<?php if(have_rows('custom_add_accordion_repeater')): ?>
								<?php while(have_rows('custom_add_accordion_repeater')): the_row(); ?>
							<h3 class="toggle-button"><?php echo the_sub_field('custom_accordion_title'); ?></h3>

							<div class="toggle-content"><?php echo the_sub_field('custom_accordion_content'); ?></div>
							<?php endwhile; endif; ?>

					<?php endif; ?>



					</div>
			<?php endwhile; endif; ?>
		</div> <!-- two-third -->
		<?php if(get_field('show_sidebar_on_right')): ?>
			<div class="cols one-third">
				<?php if(get_field('sidebar_content', 'option')): ?>
					<div class="sidebar row">
						<h2><?php echo the_field('sidebar_title', 'option'); ?></h2>
						<?php echo the_field('sidebar_content', 'option'); ?>

						<a class="transparent-blue but-2" href="<?php echo the_field('sidebar_button_link', 'option'); ?>"><?php echo the_field('sidebar_button_text', 'option'); ?></a>
					</div>
				<?php endif; ?>
				
				<?php if(get_field('sidebar_2_street_address', 'option')): ?>
					<div class="sidebar row">
							<h2>Contact</h2>
					<?php if(get_field('sidebar_2_show_map_in_sidebar', 'option')): ?>	
						<div class="map-wrapper">
							<div id="map">
							
							</div>
						</div>
					<?php endif; ?>
						
						<a class="address" href="<?php echo the_field('sidebar_2_building_address', 'option'); ?><?php echo the_field('sidebar_2_street_address', 'option'); ?><?php echo the_field('sidebar_2_suburb', 'option'); ?>">
							<ul>
								<li><?php echo the_field('sidebar_2_building_address', 'option'); ?></li>
								<li><?php echo the_field('sidebar_2_street_address', 'option'); ?></li>
								<li><?php echo the_field('sidebar_2_suburb', 'option'); ?></li>
							</ul>
						</a>
						<ul class="side-contacts">
							<li>Phone:</li>
							<li><a href="tel:<?php echo the_field('sidebar_2_phone', 'option'); ?>"><?php echo the_field('sidebar_2_phone', 'option'); ?></a></li>
							<li>Fax:</li>
							<li><?php echo the_field('sidebar_2_fax', 'option'); ?></li>
						</ul>

						<a class="transparent-blue but-2" href="<?php echo the_field('sidebar_2_button_link', 'option'); ?>"><?php echo the_field('sidebar_2_button_text', 'option'); ?></a>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?> <!-- show sidebar -->	
	</div><!-- container -->
</section>

<script>
	var address = "<?php echo the_field('sidebar_2_building_address', 'option'); ?><?php echo the_field('sidebar_2_street_address', 'option'); ?><?php echo the_field('sidebar_2_suburb', 'option'); ?>";
</script>

<?php include (TEMPLATEPATH . '/call-to-action.php'); ?>

<?php include (TEMPLATEPATH . '/list-of-services.php'); ?>

<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>
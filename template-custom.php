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
			<?php if(get_field('show_sidebar_on_right')){ ?>
				<div class="cols two-third white-bg template-2-page">
				<?php } else { ?>
				<div class="cols row white-bg template-2-page">
			<?php }; ?>

			<?php if(have_rows('custom_flexible_content')): ?>
				<?php while(have_rows('custom_flexible_content')): the_row(); ?>

					<?php if(get_row_layout() == 'full_width'): ?>
					<div class="row">
					<!-- Full Width -->
						<?php if(get_sub_field('full_width_content')): ?>
							<?php the_sub_field('full_width_content'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('full_width_add_button')): ?>
								<a class="blue but" href="<?php the_sub_field('full_width_button_link'); ?>">
									<?php the_sub_field('full_width_button_text'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('full_width_add_accordion')): ?>
								<h2><?php the_sub_field('full_width_accordion_main_title'); ?></h2>
								<?php if(have_rows('full_width_accordion')): ?>
								<div class="row">
										<?php while(have_rows('full_width_accordion')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('full_width_accordion_title'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('full_width_accordion_content'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
						<!-- Full Width -->
							</div>
					<?php elseif(get_row_layout() == 'two_columns'): ?>
					<div class="row">
						
					
					<div class="col-2">
						<!-- two cols -->
						<?php if(get_sub_field('content_two_columns')): ?>
							<?php the_sub_field('content_two_columns'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('add_button_two_columns')): ?>
								<a class="blue but" href="<?php the_sub_field('button_link_two_columns'); ?>">
									<?php the_sub_field('button_text_two_columns'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('add_accordion_two_columns')): ?>
								<h2><?php the_sub_field('accordion_main_title_two_columns'); ?></h2>
								<?php if(have_rows('accordion_two_columns')): ?>
								<div class="row">
										<?php while(have_rows('accordion_two_columns')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('accordion_title_two_columns'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('accordion_content_two_columns'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
							<!-- two cols -->
					</div>
					<div class="col-2">
						<!-- two cols -->
						<?php if(get_sub_field('content_two_columns_2')): ?>
							<?php the_sub_field('content_two_columns_2'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('add_button_two_columns_2')): ?>
								<a class="blue but" href="<?php the_sub_field('button_link_two_columns_2'); ?>">
									<?php the_sub_field('button_text_two_columns_2'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('add_accordion_two_columns_2')): ?>
								<h2><?php the_sub_field('accordion_main_title_two_columns_2'); ?></h2>
								<?php if(have_rows('accordion_two_columns_2')): ?>
								<div class="row">
										<?php while(have_rows('accordion_two_columns_2')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('accordion_title_two_columns_2'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('accordion_content_two_columns_2'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
							<!-- two cols -->
					</div>
					<!-- end of row -->
					</div>
					
					<?php elseif(get_row_layout() == 'three_columns'): ?>
					<div class="row">
						<div class="col-3">
						<!-- three cols -->
						<?php if(get_sub_field('content_three_columns')): ?>
							<?php the_sub_field('content_three_columns'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('add_button_three_columns')): ?>
								<a class="blue but" href="<?php the_sub_field('button_link_three_columns'); ?>">
									<?php the_sub_field('button_text_three_columns'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('add_accordion_three_columns')): ?>
								<h2><?php the_sub_field('accordion_main_title_three_columns'); ?></h2>
								<?php if(have_rows('accordion_three_columns')): ?>
								<div class="row">
										<?php while(have_rows('accordion_three_columns')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('accordion_title_three_columns'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('accordion_content_three_columns'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
							<!-- three cols -->
					</div>
					<div class="col-3">
						<!-- three cols -->
						<?php if(get_sub_field('content_three_columns_2')): ?>
							<?php the_sub_field('content_three_columns_2'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('add_button_three_columns_2')): ?>
								<a class="blue but" href="<?php the_sub_field('button_link_three_columns_2'); ?>">
									<?php the_sub_field('button_text_three_columns_2'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('add_accordion_three_columns_2')): ?>
								<h2><?php the_sub_field('accordion_main_title_three_columns_2'); ?></h2>
								<?php if(have_rows('accordion_three_columns_2')): ?>
								<div class="row">
										<?php while(have_rows('accordion_three_columns_2')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('accordion_title_three_columns_2'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('accordion_content_three_columns_2'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
							<!-- three cols -->
					</div>
					<div class="col-3">
						<!-- three cols -->
						<?php if(get_sub_field('content_three_columns_3')): ?>
							<?php the_sub_field('content_three_columns_3'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('add_button_three_columns_3')): ?>
								<a class="blue but" href="<?php the_sub_field('button_link_three_columns_3'); ?>">
									<?php the_sub_field('button_text_three_columns_3'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('add_accordion_three_columns_3')): ?>
								<h2><?php the_sub_field('accordion_main_title_three_columns_3'); ?></h2>
								<?php if(have_rows('accordion_three_columns_3')): ?>
								<div class="row">
										<?php while(have_rows('accordion_three_columns_3')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('accordion_title_three_columns_3'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('accordion_content_three_columns_3'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
							<!-- three cols -->
					</div>
					<!-- end of row -->
				</div>
					
				<?php elseif(get_row_layout() == '14_and_34'): ?>
					<div class="row">
						<div class="one-third">
						<!-- one-third cols -->
						<?php if(get_sub_field('content_14_and_34')): ?>
							<?php the_sub_field('content_14_and_34'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('add_button_14_and_34')): ?>
								<a class="blue but" href="<?php the_sub_field('button_link_14_and_34'); ?>">
									<?php the_sub_field('button_text_14_and_34'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('add_accordion_14_and_34')): ?>
								<h2><?php the_sub_field('accordion_main_title_14_and_34'); ?></h2>
								<?php if(have_rows('accordion_14_and_34')): ?>
								<div class="row">
										<?php while(have_rows('accordion_14_and_34')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('accordion_title_14_and_34'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('accordion_content_14_and_34'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
							<!-- one-third cols -->
					</div>
						<div class="two-third">
						<!-- two-third -->
						<?php if(get_sub_field('content_14_and_34_2')): ?>
							<?php the_sub_field('content_14_and_34_2'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('add_button_14_and_34_2')): ?>
								<a class="blue but" href="<?php the_sub_field('button_link_14_and_34_2'); ?>">
									<?php the_sub_field('button_text_14_and_34_2'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('add_accordion_14_and_34_2')): ?>
								<h2><?php the_sub_field('accordion_main_title_14_and_34_2'); ?></h2>
								<?php if(have_rows('accordion_14_and_34_2')): ?>
								<div class="row">
										<?php while(have_rows('accordion_14_and_34_2')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('accordion_title_14_and_34_2'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('accordion_content_14_and_34_2'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
							<!-- two-third cols -->
					</div>	
					<!-- row -->
				</div>

				<?php elseif(get_row_layout() == '34_and_14'): ?>
					<div class="row">
						<div class="two-third">
						<!-- two-third -->
						<?php if(get_sub_field('content_34_and_14')): ?>
							<?php the_sub_field('content_34_and_14'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('add_button_34_and_14')): ?>
								<a class="blue but" href="<?php the_sub_field('button_link_34_and_14'); ?>">
									<?php the_sub_field('button_text_34_and_14'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('add_accordion_34_and_14')): ?>
								<h2><?php the_sub_field('accordion_main_title_34_and_14'); ?></h2>
								<?php if(have_rows('accordion_34_and_14')): ?>
								<div class="row">
										<?php while(have_rows('accordion_34_and_14')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('accordion_title_34_and_14'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('accordion_content_34_and_14'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
							<!-- two-third cols -->
					</div>
						<div class="one-third">
							
						<!-- one-third -->
						<?php if(get_sub_field('content_34_and_14_2')): ?>
							<?php the_sub_field('content_34_and_14_2'); ?>
						<?php endif; ?>

							<?php if (get_sub_field('add_button_34_and_14_2')): ?>
								<a class="blue but" href="<?php the_sub_field('button_link_34_and_14_2'); ?>">
									<?php the_sub_field('button_text_34_and_14_2'); ?>
								</a>
							<?php endif; ?>

							<?php if(get_sub_field('add_accordion_34_and_14_2')): ?>
								<h2><?php the_sub_field('accordion_main_title_34_and_14_2'); ?></h2>
								<?php if(have_rows('accordion_34_and_14_2')): ?>
								<div class="row">
										<?php while(have_rows('accordion_34_and_14_2')): the_row(); ?>
									<h3 class="toggle-button"><?php the_sub_field('accordion_title_34_and_14_2'); ?></h3>

									<div class="toggle-content"><?php the_sub_field('accordion_content_34_and_14_2'); ?></div>
								<?php endwhile;?> 
								</div>
							<?php endif; ?>

							<?php endif; ?>
							<!-- one-third cols -->
					</div>
					<!-- row	 -->
				</div>
						<?php endif; ?>

					

				<?php endwhile; ?>	
			<?php endif; ?>
			</div> <!-- two-third or full-->


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

						<a class="address" target="_blank" href="http://maps.google.com/?q=<?php echo the_field('sidebar_2_building_address', 'option'); ?><?php echo the_field('sidebar_2_street_address', 'option'); ?><?php echo the_field('sidebar_2_suburb', 'option'); ?>">
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
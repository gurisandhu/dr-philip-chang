<?php 
/*
Template Name: Template with Sidebar
*/
get_header(); ?>


<section>
		<div class="container">
			<div class="one-thrid white-bg template-2-page">
				<h1 class="blue"><?php the_title(); ?></h1>
				
					<?php if (have_rows('column_content')): while (have_rows('column_content')): the_row(); ?>
						<?php $full_content = get_sub_field('full_column_content'); ?>
						<?php if($full_content): ?>
							<section class="custom-cols full-width">
								<?php echo $full_content; ?>
							</section>
						<?php endif; ?> 

						<?php if (have_rows('two_columns')): ?>
						<section class="custom-cols">
						<?php while (have_rows('two_columns')): the_row(); ?>

						<?php $two_cols = get_sub_field('two_column_content'); ?>
						<div class="col-2">
							<?php echo $two_cols; ?>
						</div>
					<?php endwhile; ?>
					</section>
					<?php endif; ?> 

					<?php if (have_rows('three_columns')): ?>
					<section class="custom-cols">
					<?php while (have_rows('three_columns')): the_row(); ?>

						<?php $three_cols = get_sub_field('three_column_content'); ?>

						<div class="col-3">
							<?php echo $three_cols; ?>
						</div>
					<?php endwhile; ?>
					</section>
					<?php endif; ?> 

					<?php if (have_rows('four_columns')): ?>
					<section class="custom-cols">
					<?php while (have_rows('four_columns')): the_row(); ?>

						<?php $four_cols = get_sub_field('four_column_content'); ?>
	
						<div class="col-4">
							<?php echo $four_cols; ?>
						</div>
					<?php endwhile; ?>
					</section>
					<?php endif; ?> 
					 <?php $oneThird = get_sub_field('13_column'); ?>
					 <?php $twoThird = get_sub_field('23_column'); ?>

					 <?php if ($oneThird): ?>
					 <section class="custom-cols">
					 	 <?php if(get_sub_field('position_13_and_23') == '2/3 than 1/3'): ?>
					 	 <div class="row">
					 	 	<div class="two-third">
							 	<?php echo $twoThird; ?>
							 </div>
							 <div class="one-third">
							 	<?php echo $oneThird; ?>
							 </div>
					 	 </div>
						<?php elseif(get_sub_field('position_13_and_23') == '1/3 than 2/3'): ?>
						<div class="row">
							<div class="one-third">
							 	<?php echo $oneThird; ?>
							 </div>
							 <div class="two-third">
							 	<?php echo $twoThird; ?>
							 </div>
						</div>
						<?php endif; ?>	 
					</section>	
					<?php endif; ?>

					<?php endwhile; endif; ?> 
			</div> <!-- one-thrid -->
			<div class="two-third">
				<aside>
					<h1>This is side bar</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni ullam cumque reiciendis quisquam qui id, ducimus nostrum in laboriosam quas, error excepturi. Voluptatum qui, quasi necessitatibus laborum beatae possimus aut.</p>
				</aside>
			</div>
		</div> <!-- end of container -->
</section>

<?php get_footer(); ?>


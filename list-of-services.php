<!-- List of services with Background image: (Such as: Surgical Experience and Expertise) -->

<?php $posts = get_field('list_of_services_above_widget_list_of_services', 'option'); 
		
?>

<?php if($posts): ?>
	<section class="section-3 table parallax" style="background-image: url('<?php echo the_field('list_of_services_above_widget_background_image', 'option'); ?>');">
		<div class="table-cell">
			<div class="container">
				<div class="row">
					<h3 class="white"><?php echo the_field('list_of_services_above_widget_title', 'option'); ?></h3>
					<ul>
						<?php foreach($posts as $post): 
							setup_postdata($post);
						?>
							<li><a class="but-3 transparent" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>
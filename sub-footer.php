<section class="sub-footer">
	<div class="container">
		<?php if (get_field('footer_widget_content', 'option')): ?>
			<div class="col-4">
				<h5 class="white"><?php echo the_field('footer_widget_title', 'option'); ?></h5>
				<p><?php echo the_field('footer_widget_content', 'option'); ?></p>
				<a href="<?php echo the_field('footer_widget_button_link', 'option'); ?>" class="but transparent"><?php echo the_field('footer_widget_button_text', 'option'); ?></a>
				
				<div class="row">
					<img src="<?php echo the_field('footer_widget_image_1', 'option'); ?>" alt="">
				</div>
				<div class="row">
					<img src="<?php echo the_field('footer_widget_image_2', 'option'); ?>" alt="">
				</div>
			</div><!-- col-4 -->
		<?php endif; ?>

		<?php $footer_widgets_2 = get_field('footer_widget_2_list_of_services', 'option'); 
			if ($footer_widgets_2): ?>
			<div class="col-4">
				<h5 class="white"><?php echo the_field('footer_widget_2_title', 'option'); ?></h5>
				<ul class="sub-footer-menu">
					<?php foreach ($footer_widgets_2 as $post): 
						setup_postdata($post);
					?>
						<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div><!-- col-4 -->
		<?php endif; ?>

		<?php if (get_field('footer_widget_3_content', 'option')): ?>
		<div class="col-4">
			<h5 class="white"><?php echo the_field('footer_widget_3_title', 'option'); ?></h5>
			<p><?php echo the_field('footer_widget_3_content', 'option'); ?></p>
			<a href="<?php echo the_field('footer_widget_3_button_link', 'option'); ?>" class="but transparent"><?php echo the_field('footer_widget_3_button_text', 'option'); ?></a>

			<h5 class="white"><?php echo the_field('footer_widget_3_b_title', 'option'); ?></h5>
			<p><?php echo the_field('footer_widget_3_b_content', 'option'); ?></p>
			<a href="<?php echo the_field('footer_widget_3_b_button_link', 'option'); ?>" class="but transparent"><?php echo the_field('footer_widget_3_b_button_text', 'option'); ?></a>
		</div>
		<?php endif; ?>
		
		<?php if (get_field('footer_widget_4_title', 'option')): ?>
			<div class="col-4">
				<h5 class="white"><?php the_field('footer_widget_4_title', 'option'); ?></h5>
				<a target="_blank" href="https://maps.google.com/?q=<?php the_field('footer_widget_4_stret_address', 'option'); ?> <?php the_field('footer_widget_4_suburb', 'option'); ?>" class="address">
					<ul>
						<li><?php the_field('footer_widget_4_building_address', 'option'); ?></li>
						<li><?php the_field('footer_widget_4_street_address', 'option'); ?></li>
						<li><?php the_field('footer_widget_4_suburb', 'option'); ?></li>
					</ul>
				</a>
				<ul class="contacts">
					<li>Phone:</li>
					<li><a href="tel:<?php the_field('footer_widget_4_phone', 'option'); ?>"><?php the_field('footer_widget_4_phone', 'option'); ?></a></li>
					<li>Fax:</li>
					<li><?php the_field('footer_widget_4_fax', 'option'); ?></li>
				</ul>
				<a href="<?php the_field('footer_widget_4_button_link', 'option'); ?>" class="but transparent"><?php the_field('footer_widget_4_button_text', 'option'); ?></a>
			</div><!-- col-4 -->
		<?php endif; ?>

	</div><!-- container -->
</section>
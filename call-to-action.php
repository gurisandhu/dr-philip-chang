<!-- Call to action (such as Headline with Contact button) -->
<section class="section-4 table">
	<div class="table-cell">
		<div class="container">
			<?php if(get_field('change_call_to_action')): ?>
				<div class="two-third">
					<h4 class="white"><?php echo the_field('call_to_action_title'); ?></h4>
				</div>
				<div class="one-third">
					<?php if(get_field('require_to_change_button')): ?>
						<a href="<?php echo the_field('call_to_action_button_link'); ?>" class="but-2 white-but"><?php echo the_field('call_to_action_title'); ?></a>
						<?php else: ?>
						<a href="<?php echo esc_url( home_url('')); ?>/contact/" class="but-2 white-but">Contact Dr Chang</a>
					<?php endif; ?>
				</div>

			<?php else: ?>

				<div class="two-third">
					<h4 class="white">For expertise in <?php the_title(); ?></h4>
				</div>
				<div class="one-third">
					<a href="<?php echo esc_url( home_url('')); ?>/contact/" class="but-2 white-but">Contact Dr Chang</a>
				</div>

			<?php endif; ?>
		</div> <!-- container -->
	</div>
</section>
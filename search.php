<?php get_header(); ?>
 <!-- Template: search.php -->
 <section class="banner parallax inner-banner" style="background-image: url('<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/IMG_0281.JPG');">
	<div class="container">
		<!-- No text here -->
	</div>
</section>

<section class="custom-page">
	<div class="container">
		<?php
		$s=get_search_query();
		$args = array(
		                's' =>$s
		            );
		    // The Query
		$the_query = new WP_Query( $args );
		if ( $the_query->have_posts() ):
		        _e("<h4>Search Results for: ".get_query_var('s')."</h4><br />");
		        while ( $the_query->have_posts() ):
		           $the_query->the_post();
		                 ?>	
		                 <div class="row">
		                 	<h2><?php the_title(); ?></h2>
		                 	<?php $content_post = get_post();
		                 		$content = $content_post->post_content;
		                 		$post_id = $content_post->ID;
		                 		$fields = get_fields($post_id);
		                 		reset($fields);
		                 		while (list($key, $val) = each($fields)){

	                 			if ($key == 'single_template_content'){
		                 				echo $val;
		                 			}
		                 		}
		                 		if ($key == 'category_content'){
		                 				echo $val;
		                 			}
		                 		if ($key == 'full_width_content'){
		                 				echo $val;
		                 			}	
							?>

							
							









							<div class="row">
								<a class="but-4 transparent-blue" href="<?php the_permalink(); ?>">Read More</a>
							</div>
		                 </div>
		         <?php endwhile; ?>
		<?php else: ?>         
		        <h2>Nothing Found</h2>
		        <div class="alert alert-info">
		          <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
		        </div>
		<?php endif; ?>
	</div>
</section>

<section class="search-input">
	<div class="container">
		<form class="row" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
			<div>
				<input class="row search-input" type="text" value="" name="s" id="s" placeholder="Search here ...." />
				<summary class="row">Press Enter to begin your search</summary>
			</div>
		</form>
	</div>
</section>
<?php include (TEMPLATEPATH . '/list-of-services.php'); ?>

<?php include (TEMPLATEPATH . '/call-to-action.php'); ?>

<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>
<?php get_footer(); ?>
<?php 
/*
* Template Name: Category page
*/
get_header();

global $post;
?>


<?php $catBanner = get_field('category_banner'); ?>

<?php if($catBanner): ?>
	<!-- Template: archive.php -->
	<section class="banner parallax inner-banner" style="background-image: url('<?php echo $catBanner; ?>');">
		<div class="container">
			<!-- No text here -->
		</div>
	</section>
	<?php else: ?>
		<section class="banner parallax inner-banner" style="background-image: url('<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/IMG_0281.JPG');">
		<div class="container">
			<!-- No text here -->
		</div>
	</section>
<?php endif; ?>

<section class="category-title table">
	<div class="row table-cell">
		<div class="container">
			<div class="desc"><?php echo the_field('category_tagline'); ?></div>
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</section>

<section class="service-list">
	<div class="container">
		<div class="width-70">
			<?php echo the_field('category_content'); ?>
		</div>
		
		<ul class="child-pages row">
			<?php
				global $post;
					wp_list_pages(array(
						'title_li'    => '',
						'child_of'    => $post->ID,
						'show_date'   => 'modified',
						'date_format' => $date_format,
						'depth' 	  => 1
					));
			?>
		</ul>
	</div>
</section>

<?php include (TEMPLATEPATH . '/call-to-action.php'); ?>

<?php include (TEMPLATEPATH . '/list-of-services.php'); ?>

<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>
<?php 
/*

Template Name: Search Page

*/
get_header(); ?>

 <!-- Template: searchform.php -->
	

	<section>
		<div class="container">
			<h1>Search form</h1>
			<?php get_search_form(); ?>
		</div>
	</section>
<?php include (TEMPLATEPATH . '/sub-footer.php'); ?>

<?php get_footer(); ?>
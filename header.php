<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title><?php wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11"> 
	<!-- [if IE]>
		<script src="http://html5shiv.google.ecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if gte IE 9]
		<style type="text/css">
		.gradient {
		filter: none;
		}
		</style>
	<![endif]-->
	<link rel="shortcut icon" href="<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo esc_url( home_url( '' ) ); ?>/wp-content/uploads/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body>

	<!-- header fixed -->
	<?php if(is_page_template('template-custom.php')): ?>
			<?php if(!get_field('custom_banner')): ?>	
				<header class="header-fixed shadow">
			<?php else: ?>
				<header class="header-fixed">
			<?php endif; ?>
		<?php else: ?>	
			<header class="header-fixed">
	<?php endif; ?>
	<!-- Top menu -->
	<section class="top-menu desktop">
		<div class="container">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">About Dr Chang</a></li>
				<li><a class="toggle-button-2" href="#">Search</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>for-patients">For Patients</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>for-professionals">For Professionals</a></li>
				<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact</a></li>
				<li><a href="tel:+61283826080">+61 2 8382 6080</a></li>
			</ul>
		</div>
	</section>

	<!-- Main menu and Banners -->
	<section class="main-header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/logo.png" title="Dr Chang" alt="Dr Chang Logo"></a>
			</div>

			<?php include (TEMPLATEPATH . '/menu-main.php'); ?>

		</div>
	</section>
	<section class="toggle-content-2 search-input desktop">
		<div class="container">
			<form class="row" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<div>
					<input class="row search-input" type="text" value="" name="s" id="s" placeholder="Start typing ..." />
					<summary class="row">Press Enter to begin your search</summary>
				</div>
			</form>
		</div>
</section>
</header>
<div class="responsive-menu row">
	<div class="container">
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>
		<div class="row search"><form class="row" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
					<input class="row" type="text" value="" name="s" id="s" placeholder="Start typing ..." />
			</form></div>	
	</div>
</div>


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
	<link rel="shortcut icon" href="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo esc_url( home_url( '/' ) ); ?>/wp-content/uploads/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>
<body>

	<!-- header fixed -->
<header class="header-fixed">
	<!-- Top menu -->
	<section class="top-menu desktop">
		<div class="container">
			<ul>
				<li><a href="#">About Dr Chang</a></li>
				<li><a class="toggle-button-2" href="#">Search</a></li>
				<li><a href="#">For Patients</a></li>
				<li><a href="#">For Professionals</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="tel:+61283826080">+61 2 8382 6080</a></li>
			</ul>
		</div>
	</section>

	<!-- Main menu and Banners -->
	<section class="main-header">
		<div class="container">
			<div class="logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/logo.svg" title="Dr Chang" alt="Dr Chang Logo"></a>
			</div>

			<?php include (TEMPLATEPATH . '/menu-main.php'); ?>

		</div>
	</section>
	<section class="toggle-content-2 search-input desktop">
		<div class="container">
			<form class="row" action="<?php //echo home_url('/'); ?>" method="get" role="search">
				<input class="row" type="text" placeholder="Start typing ...">
				<summary class="row">Press Enter to begin your search</summary>
			</form>

<!-- <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form> -->


		</div>
</section>
</header>
<div class="responsive-menu row">
	<div class="container">
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>
		<div class="row search"><input type="text" placeholder="Start typing . . ."></div>	
	</div>
</div>
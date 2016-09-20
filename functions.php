<?php 

// *************************
// Add links for stylesheet, fonts and scripts (Instead of inserting in <head> section or before </body>)
// *************************
function my_styles(){
	wp_enqueue_style('drchang-font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.4.2');

    wp_enqueue_style('drchang-fonts-pop', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');

    wp_enqueue_style('drchang-fonts-open', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic');

    wp_enqueue_style( 'drchang-swipere' , get_template_directory_uri() . '/library/swiper.min.css');

     wp_enqueue_style( 'drchang-style' , get_template_directory_uri() . '/style.css');
}
add_action('template_redirect', 'my_styles');
//end of styles

function my_scripts(){
	wp_enqueue_script( 'drchang-swiper', get_bloginfo('template_directory') . '/library/swiper.min.js', array('jquery'), true);

  wp_enqueue_script( 'drchang-script', get_bloginfo('template_directory') . '/compressed/script.js', array('jquery'), true);
}
add_action('template_redirect', 'my_scripts');
 //end of my_scripts

// General Jquery CDN Start here
    if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

    function my_jquery_enqueue() {
       wp_deregister_script('jquery');
       wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", false, null);
       wp_enqueue_script('jquery');
    }
// End of General Jquery CDN

// *************************
// Display Main Navigation in admin section
// *************************

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'page-menu' => __( 'Page Menu' ),
      'page-menu-second' => __('Page menu second')
    )
  );
}
add_action( 'init', 'register_my_menus' );

// *************************
// Contact info (ACF: option page)
// *************************

if (function_exists('acf_add_options_page')){
  $contact_info = acf_add_options_page(array(
      'page_title'  =>  'Misc.',
      'menu_title'  => 'Misc.',
      'menu_slug'   =>  'contact-info-settings',
      'capability'  =>  'edit_posts',
      'icon_url'    =>  'dashicons-list-view',
      'redirect'    =>  false
    ));
  add_filter('menu_order', 'custom_menu_order', 99);
}

 ?>
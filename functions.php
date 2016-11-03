<?php 
// *************************
// Make ACF content on search page
// *************************
function cf_search_join( $join ) {
    global $wpdb;

    if ( is_search() ) {    
        $join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
    }
    
    return $join;
}
add_filter('posts_join', 'cf_search_join' );

/**
 * Modify the search query with posts_where
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_where
 */
function cf_search_where( $where ) {
    global $pagenow, $wpdb;
   
    if ( is_search() ) {
        $where = preg_replace(
            "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
            "(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );
    }

    return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

/**
 * Prevent duplicates
 *
 * http://codex.wordpress.org/Plugin_API/Filter_Reference/posts_distinct
 */
function cf_search_distinct( $where ) {
    global $wpdb;

    if ( is_search() ) {
        return "DISTINCT";
    }

    return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

// *************************
// Add links for stylesheet, fonts and scripts (Instead of inserting in <head> section or before </body>)
// *************************

function my_styles(){
  wp_enqueue_style('drchang-font-awesome', 'http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css?ver=4.4.2');

    wp_enqueue_style('drchang-fonts-pop', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700');

    wp_enqueue_style('drchang-fonts-open', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic');

    wp_enqueue_style('drchang-fonts-garamond', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond:400i');

    wp_enqueue_style( 'drchang-swipere' , get_template_directory_uri() . '/library/swiper.min.css');

     wp_enqueue_style( 'drchang-style' , get_template_directory_uri() . '/style.css', array(), '2.0.0', false, 'all');
}
add_action('template_redirect', 'my_styles');
//end of styles

function my_scripts(){
  wp_enqueue_script( 'drchang-swiper', get_bloginfo('template_directory') . '/library/swiper.min.js', null, null, true);

  wp_enqueue_script('googlemaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBlfPgnC0Z0WBajAY03r5t94uwHecdsmfE&callback=initMap',null,null,true);
  
  wp_enqueue_script( 'drchang-script', get_bloginfo('template_directory') . '/compressed/script.js', null, null, true);

    // check if ACF working properly after comminting out
   
}
add_action('template_redirect', 'my_scripts');
 //end of my_scripts

// General Jquery CDN Start here
    if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);

    function my_jquery_enqueue() {
       wp_deregister_script('jquery');
       wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", true, null);
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
      'footer-menu' => __('Footer Menu')
    )
  );
}
add_action( 'init', 'register_my_menus' );


// *************************
// Contact info (ACF: option page)
// *************************
if (function_exists('acf_add_options_page')){
  $contact_info = acf_add_options_page(array(
      'page_title'  =>  'Sidebar Widget',
      'menu_title'  => 'Sidebar Widget',
      'menu_slug'   =>  'sidebar-widget-settings',
      'capability'  =>  'edit_posts',
      'icon_url'    =>  'dashicons-index-card',
      'redirect'    =>  false
    ));
  add_filter('menu_order', 'custom_menu_order', 99);
}
if (function_exists('acf_add_options_page')){
  $contact_info = acf_add_options_page(array(
      'page_title'  =>  'Footer Widget',
      'menu_title'  => 'Footer Widget',
      'menu_slug'   =>  'footer-widget-settings',
      'capability'  =>  'edit_posts',
      'icon_url'    =>  'dashicons-editor-insertmore',
      'redirect'    =>  false
    ));
  add_filter('menu_order', 'custom_menu_order', 99);
}

  function wpb_list_child_pages() {
    global $post;
    if ( is_page() && $post->post_parent )
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
    else
      $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
    if ( $childpages ) {
      $string = $childpages;   
    }
    echo $string;
    }
  add_shortcode('wpb_childpages', 'wpb_list_child_pages');
  
 ?>
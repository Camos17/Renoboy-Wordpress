<?php

function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'ionicons_css', get_template_directory_uri() . '/css/ionicons.min.css' );
    wp_enqueue_style( 'font-awesome_css', get_template_directory_uri() . '/css/font-awesome.min.css' );
    wp_enqueue_style( 'mCustomScrollBar_css', get_template_directory_uri() . '/css/jquery.mCustomScrollbar.css' );
    wp_enqueue_style( 'style_css', get_template_directory_uri() . '/css/style.css' );
}
add_action('wp_enqueue_scripts',  'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
	wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

	$wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
	$wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery-1.12.1.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'clamp_min_js', get_template_directory_uri() . '/js/clamp.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'mCustomScrollBar_js', get_template_directory_uri() . '/js/jquery.mCustomScrollbar.concat.min.js', array('jquery'), '', true );
}

add_action('wp_enqueue_scripts',  'theme_js');

add_theme_support('menus');
add_theme_support( 'post-thumbnails' ); 

function register_theme_menus(){
	register_nav_menus(
		array(
			'header-menu' => __('Header Menu')
		)
	);
}
add_action('init','register_theme_menus');

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
     if( in_array('current-menu-item', $classes) ){
             $classes[] = 'active ';
     }
     return $classes;
}

add_action('acf/register_fields', 'my_register_fields');

function my_register_fields()
{
    //include_once( '/home/gfnycolombia/public_html/wp-content/plugins/advanced-custom-fields-oembed-field/acf-oembed.php');
}

// function to call custom post entities with ajax  
add_action('wp_ajax_load_custom_post','load_custom_post');
add_action('wp_ajax_nopriv_load_custom_post','load_custom_post');

function load_custom_post(){

	$postid=$_POST['postid'];
	$mypost = get_fields($postid);
	echo json_encode($mypost);
	wp_die(); // this is required to terminate immediately and return a proper response
}

//GET CUSTOM POSTS
add_action("wp_ajax_get_custom_posts", "get_custom_posts");
add_action("wp_ajax_nopriv_get_custom_posts", "get_custom_posts");

function get_custom_posts(){
	$ptype=$_POST['ptype'];
	$ppp = $_POST['ppp'];
	$pageNumber = $_POST['pageNumber'];

	$args = array(
		'posts_per_page'   => $ppp,
		'offset'           => $ppp*($pageNumber-1),
		'orderby'          => 'date',
		'post_type'        => $ptype,
		'post_status'      => 'publish'
	);

	$posts_array = new WP_Query($args);

	echo json_encode($posts_array);
	wp_die();	
}

//FILTER DISEÑOS
add_action("wp_ajax_filter_designs", "filter_designs");
add_action("wp_ajax_nopriv_filter_designs", "filter_designs");

function filter_designs(){
	$ptype=$_POST['ptype'];
	$ppp = $_POST['ppp'];
	$pageNumber = $_POST['pageNumber'];

	$args = array(
		'posts_per_page'   => $ppp,
		'offset'           => $ppp*($pageNumber-1),
		'orderby'          => 'date',
		'post_type'        => $ptype,
		'post_status'      => 'publish'
	);

	$posts_array = new WP_Query($args);

	echo json_encode($posts_array);
	wp_die();	
}

//FILTER PRODUCTS


// REMOVE POST FROM ADMIN NAVBAR
function post_remove () 
{ 
   remove_menu_page('edit.php');
} 
add_action('admin_menu', 'post_remove');

function custom_upload_mimes ( $existing_mimes=array() ) {

	// add the file extension to the array

	$existing_mimes['svg'] = 'mime/type';

        // call the modified list of extensions

	return $existing_mimes;

}
add_filter('upload_mimes', 'custom_upload_mimes');

?>
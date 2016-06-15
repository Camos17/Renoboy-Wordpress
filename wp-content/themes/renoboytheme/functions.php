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
	wp_enqueue_script( 'jquery_js', get_template_directory_uri() . '/js/jquery.validate.min.js', array('jquery'), '', true );
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

// function to call custom post entities with ajax  
add_action('wp_ajax_load_custom_planta','load_custom_planta');
add_action('wp_ajax_nopriv_load_custom_planta','load_custom_planta');

function load_custom_planta(){
	
	$postid=$_POST['postid'];

	if($postid == "1101" OR $postid == "1102" OR $postid == "1103" ){
		$mypost = get_fields($postid);
		echo json_encode($mypost);
	} else {
		if(!isset($_COOKIE['plantavirtual'])) {
		  	setcookie('plantavirtual', "false",   (time()+3600), "/");
		  	echo json_encode("1:The cookie is not set.");
		} else {
			$cookie =  $_COOKIE['plantavirtual'];
			if($cookie == 'true' ){		  	
				$mypost = get_fields($postid);
				echo json_encode($mypost);
			} else if($cookie == 'false'){
				echo json_encode("The cookie is false.");
			} else {
				setcookie('plantavirtual', "false", (time()+3600), "/");
				echo json_encode("2:The cookie is not set.");
			}
		}
	}	

	wp_die(); // this is required to terminate immediately and return a proper response
}
//LOGIN function
add_action('wp_ajax_login_planta','login_planta');
add_action('wp_ajax_nopriv_login_planta','login_planta');
function login_planta(){
	
	global $wpdb;
	$data = $_POST['email']; 
	parse_str($data);

	$query = $wpdb->prepare( 
		"
			SELECT usrpswd 
			FROM reno_subscribers
			WHERE email = %s
		", 
	    $email
	); 

	$password_hashed = $wpdb->query($query);

	if($wp_hasher->CheckPassword($password, $password_hashed)) {
		unset( $_COOKIE['plantavirtual'] );
	  	setcookie( 'plantavirtual', '', time() - ( 15 * 60 ) );
		setcookie('plantavirtual', "true", (time()+3600), "http://prueba.renoboy.com/?page_id=123");
	    echo json_encode("YES, Matched");
	} else {
	    echo json_encode("No, Wrong Password");
	}
	
	wp_die();
	
}

// function to subscribe email 
add_action('wp_ajax_subscribe_planta','subscribe_planta');
add_action('wp_ajax_nopriv_subscribe_planta','subscribe_planta');

function subscribe_planta(){
	global $wpdb;
	$data = $_POST['data']; 
	parse_str($data);

	$query = $wpdb->prepare( 
		"
			SELECT * 
			FROM reno_subscribers
			WHERE email = %s
		", 
	    $email
	); 

	$registered = $wpdb->query($query);

	if($registered){

		echo json_encode("ya se encuentra registrado");

	} else {

		$hashedPassword = wp_hash_password($password);
		$token = sha1(uniqid());
		$wpdb->insert('reno_subscribers', array(		
		    'email' => $email,
		    'nombresapellidos' => $nombresapellidos,
		    'empresa' => $empresa,
		    'ciudad' => $ciudad,
		    'telefono' => $telefono,
		    'cantidadvehiculos' => $cantidadvehiculos,
		    'tipovehiculos' => $tipovehiculos,
		    'token' => $token,
		    'usrpswd' => $hashedPassword
		));

		$headers[] = 'Content-Type: text/html; charset=UTF-8';
		$headers[] = 'From: Renoboy <noreply@renoboy>';	

		$email = htmlentities($email);

		$message = 'Gracias por registrarte. Para continuar visitando nuestra planta virtual por favor da click en el siguiente <a href="http://prueba.renoboy.com/?page_id=123&email=%d&token=%s">link</a>.';
		wp_mail($email,'Registro Renoboy', sprintf($message, $email, $token), $headers);

	  	/*unset( $_COOKIE['plantavirtual'] );
	  	setcookie( 'plantavirtual', '', time() - ( 15 * 60 ) );
		setcookie('plantavirtual', "true", (time()+3600), "http://prueba.renoboy.com/?page_id=123");*/

		echo json_encode("registro exitoso");

	}
	
	wp_die();
	
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
	$utilizacion=$_POST['utilizacion'];
	$utilizacionarray = explode(",", $utilizacion);
	$posicion = $_POST['posicion'];
	$posicionarray = explode(",", $posicion);
	$dimension = $_POST['dimension'];
	$categoria = $_POST['categoria'];

	$args = array(
		'posts_per_page'	=> -1,
		'post_type'		=> 'd_bandas',
		'meta_query'	=> array(
			'relation'		=> 'AND',
			array(
				'key'		=> 'categoria',
				'value'		=> $categoria,
				'compare'	=> 'LIKE'
			),
			array(
				'key'		=> 'utilizacion_recomendada',
				'value'		=> $utilizacionarray,
				'compare'	=> 'IN'
			),
			array(
				'key'		=> 'posicion_recomendada',
				'value'		=> $posicionarray,
				'compare'	=> 'IN'
			)
		)
	);

	$posts_array = new WP_Query($args);

	$posts_json = json_encode($posts_array);

	$posts_json = json_decode($posts_json, true);

	//$divs = [];
	$divs = array();

	foreach ($posts_json['posts'] as $post) {
		array_push($divs,get_fields($post['ID']));	    
	}

	echo json_encode($divs);
	//echo json_encode($args);
	wp_die();	
}

//JOIN DISEÑOS Y PRODUCTOS
add_action("wp_ajax_getproducts", "getproducts");
add_action("wp_ajax_nopriv_getproducts", "getproducts");

function getproducts(){

	global $wpdb;
	
	/*$query = "
	SELECT wp_posts.*, meta. AS url
	FROM wp_posts
	LEFT JOIN $wpdb->postmeta as meta ON ($wpdb->posts.ID = $wpdb->postmeta.post_id)
	WHERE post_type = 'd_bandas'
	LIMIT 10";*/

	$key = ''; 
	$type = 'd_bandas';
	$status = 'publish';
	$utilizacion = $_POST['utilizacion'];
	$replaced = str_replace("\'", "'", $utilizacion);
	$posicion = $_POST['posicion'];
	$dimension = $_POST['dimension'];
	$categoria = $_POST['categoria'];

	 $query = "
        SELECT  wp_posts.*, mt1.meta_value as categoria, mt2.meta_value as diseño_de_banda, mt3.meta_value as utilizacion_recomendada, mt4.meta_value as posicion_recomendada, (SELECT guid FROM wp_posts WHERE ID= mt5.meta_value) as imagen, mt7.meta_value as dimension
		FROM wp_posts  
		LEFT JOIN wp_postmeta AS mt1 ON (wp_posts.ID = mt1.post_id AND mt1.meta_key='categoria')
		LEFT JOIN wp_postmeta AS mt2 ON (wp_posts.ID = mt2.post_id  AND mt2.meta_key='diseño_de_banda') 
		LEFT JOIN wp_postmeta AS mt3 ON (wp_posts.ID = mt3.post_id  AND mt3.meta_key='utilizacion_recomendada') 
		LEFT JOIN wp_postmeta AS mt4 ON (wp_posts.ID = mt4.post_id  AND mt4.meta_key='posicion_recomendada') 
		LEFT JOIN wp_postmeta AS mt5 ON (wp_posts.ID = mt5.post_id  AND mt5.meta_key='imagen')
		LEFT JOIN wp_postmeta AS mt6 ON (mt2.meta_value = mt6.meta_value  AND mt6.meta_key='diseno_banda')
		LEFT JOIN wp_postmeta AS mt7 ON (mt6.post_id = mt7.post_id  AND mt7.meta_key='p_dimension')
		WHERE (wp_posts.post_type = 'd_bandas')
		AND (mt3.meta_value IN (".$replaced.")) 
		AND (mt4.meta_value LIKE '".$posicion."')
		AND (mt7.meta_value LIKE '".$dimension."')
		AND (mt1.meta_value LIKE '".$categoria."')
		AND (wp_posts.post_status = 'publish' OR wp_posts.post_status = 'private')  
		GROUP BY wp_posts.ID ORDER BY wp_posts.post_date DESC
		LIMIT 12";
	 
	$results = $wpdb->get_results($query);

    header("Content-type: application/json"); 
    echo json_encode( $results);

    wp_die();
}

// REMOVE POST FROM ADMIN NAVBAR
function post_remove () 
{ 
   remove_menu_page('edit.php');
} 
add_action('admin_menu', 'post_remove');


function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// SETTING UP COOKIE
function set_user_cookie() {
    setcookie('plantavirtual', "false",   (time()+3600), "/");

    //setcookie('plantavirtual', "false",false, '/', '',false);

}
add_action( 'init', 'set_user_cookie');

?>
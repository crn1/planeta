<?php

include_once get_theme_file_path('inc/kirki-installer.php');

if(class_exists('Kirki'))
{
	include_once get_theme_file_path('inc/customizer.php');
}else{
	include_once get_theme_file_path('inc/fallback.php');
}

//Register Custom Post Types
include_once get_theme_file_path('inc/post-types/testimonial.php');
include_once get_theme_file_path('inc/post-types/project.php');
include_once get_theme_file_path('inc/post-types/client.php');
include_once get_theme_file_path('inc/post-types/tech.php');
include_once get_theme_file_path('inc/post-types/gallery.php');
include_once get_theme_file_path('inc/post-types/service.php');
include_once get_theme_file_path('inc/post-types/team.php');
include_once get_theme_file_path('inc/post-types/number.php');

//Internationalization
add_action('after_setup_theme', 'planeta_i18n_setup');
function planeta_i18n_setup(){
	load_theme_textdomain('planeta', get_template_directory() . '/languages');
}

//Theme support
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');

//Register all menus
function register_menus()
{
	register_nav_menus(array(
		'footer-menu' => 'Footer Menu',
	));
}
add_action('after_setup_theme', 'register_menus');

//Register widgets
function register_widgets()
{
	register_sidebar(array(
		'name'	=> 'Left Page/Post Sidebar',
		'id'		=> 'page-sidebar-left',
	));

	register_sidebar(array(
		'name'	=> 'Right Page/Post Sidebar',
		'id'		=> 'page-sidebar-right',
	));

	register_sidebar(array(
		'name'	=> 'Footer (Left)',
		'id'		=> 'footer-left',
	));

	register_sidebar(array(
		'name'	=> 'Footer (Right)',
		'id'		=> 'footer-right',
	));
}
add_action('widgets_init', 'register_widgets');

//Excerpt
add_filter( 'excerpt_length', function($length){ return get_theme_mod('excerpt_length', 25); });

function init_scripts()
{
	// Wordpress Required Styles
	wp_enqueue_style('wordpress-required-style', get_stylesheet_uri());

	// Normalize CSS
	wp_enqueue_style('normalize-css', get_template_directory_uri() . '/css/normalize.min.css', false, '8.0.1', 'all');

	$hover_class = get_theme_mod('typography_button_link_hover', 'none');
	if($hover_class != 'none')
	{
		wp_enqueue_style('hover-css', get_template_directory_uri() . "/css/hover/${hover_class}.css", false, '1.0.1', 'all');
	}

	// Macy Masonry
	wp_enqueue_script('masonry-script', get_template_directory_uri() . '/js/macy.min.js', array(), '2.5.1');

	// IcoFont CSS
	wp_enqueue_style('icofont-css', get_template_directory_uri() . '/css/icofont.min.css', false, '1.0.1', 'all');

	// Hamburgers CSS
	$hamburger_class = get_theme_mod('hamburger_class', '3dx');
	wp_enqueue_style('hamburger-css', get_template_directory_uri() . "/css/hamburgers/${hamburger_class}.css", false, 'all');

	// AOS CSS and JS
	wp_enqueue_style('aos-css', get_template_directory_uri() . '/css/aos.css', false, '3.0.0', 'all');
	wp_enqueue_script('aos-script', get_template_directory_uri() . '/js/aos.js', true, '3.0.0', 'all');

	// Laxxx
	wp_enqueue_script('lax-script', get_template_directory_uri() . '/js/lax.min.js');

	// Sticky Sidebars JS
	if(is_page() || is_single())
	{
		wp_enqueue_script('sticky-script', get_template_directory_uri() . '/js/sticky.min.js', array('jquery'), '1.2.2', true);
	}

	// Main Styles and Scripts
	//wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', false, filemtime(get_stylesheet_directory() . '/style.css'), 'all');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'init_scripts');

//Protected Posts
add_filter('the_password_form', 'planeta_password_form');
function planeta_password_form()
{
	global $post;
	$site_url = get_option('siteurl');
	$enter_password = esc_html__('Enter Password', 'planeta');
	$output = "<form
			id='protected-post-form'
			action='${site_url}/wp-login.php?action=postpass'
			method='POST'>
		<input
			type='password'
			required
			placeholder='${enter_password}'
			name='post_password'
		/>
		<button type='submit'>
			<i class='icofont-simple-right'></i>
		</button>
	</form>";
	return $output;
}

//Admin Styles
function init_admin_styles()
{
  wp_enqueue_style('admin-styles', get_template_directory_uri() . '/css/admin.css');
	wp_enqueue_script('admin-script', get_template_directory_uri() . '/js/admin.js', array('jquery'), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'init_admin_styles');

//Planeta Welcome Menu
require_once(get_template_directory() . '/welcome.php');
function planeta_register_welcome_page() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
	add_menu_page('Planeta', 'Planeta', 'manage_options', 'planeta_welcome', 'planeta_get_welcome_page', 'dashicons-welcome-widgets-menus', 90);
}
add_action('admin_menu', 'planeta_register_welcome_page');

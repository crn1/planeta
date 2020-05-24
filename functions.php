<?php

//TGM Activation Plugin
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
add_action('tgmpa_register', 'planeta_register_required_plugins');
function planeta_register_required_plugins()
{
	$plugins = array(
		array(
			'name'					=> 'Planeta Core',
			'slug'					=> 'planeta-core',
			'required'			=> true,
			'source'				=> 'planeta-core.zip',
			'version'				=> '1.0.0',
		),
		array(
			'name'					=> 'Kirki Customizer Framework',
			'slug'					=> 'kirki',
			'required'			=> true,
			'version'				=> '3.1.3',
		),
		array(
			'name'					=> 'One Click Demo Import',
			'slug'					=> 'one-click-demo-import',
			'version'				=> '2.5.2',
		),
	);

	$config = array(
		'id'						=> 'planeta',
		'default_path'	=> get_template_directory() . '/inc/tgm/plugins/',
		'menu'					=> 'tgmpa-install-plugins',
		'has_notices'		=> true,
		'dismissable'		=> true,
		'is_automatic'	=> true,
	);

	tgmpa($plugins, $config);
}

//Fallback function for Kirki
if(class_exists('Kirki'))
{
	include_once get_template_directory() . '/inc/customizer.php';
}else{
	include_once get_template_directory() . '/inc/kirki-fallback.php';
}

//Protected Posts
include_once get_template_directory() . '/inc/protected-posts.php';

//Internationalization
add_action('after_setup_theme', 'planeta_i18n_setup');
function planeta_i18n_setup()
{
	load_theme_textdomain('planeta', get_template_directory() . '/languages');
}

//Theme support
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');

//Custom Background
$defaults = array(
	'default-color'          => '#212121',
	'default-image'          => '',
	'default-repeat'         => 'repeat',
	'default-position-x'     => 'left',
	'default-position-y'     => 'top',
	'default-size'           => 'auto',
	'default-attachment'     => 'scroll',
);
add_theme_support('custom-background', $defaults);

add_action('comment_form_before', 'planeta_enqueue_comments_reply');
function planeta_enqueue_comments_reply()
{
	if(get_option('thread_comments'))
	{
		wp_enqueue_script('comment-reply');
	}
}

if(!isset($content_width))
{
	$content_width = get_theme_mod('container_article', 700);
}

//Register all menus
function register_menus()
{
	register_nav_menus(array(
		'header-menu' => 'Header Menu',
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

add_action('wp_enqueue_scripts', 'init_scripts');
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

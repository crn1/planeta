<?php

include_once get_theme_file_path('inc/kirki-installer.php');
include_once get_theme_file_path('inc/customizer.php');

//Theme support
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('automatic-feed-links');

//Register all menus
function register_menus()
{
	register_nav_menus(array(
		'main-menu' => 'Main Menu',
		'footer-menu' => 'Footer Menu',
	));
}
add_action('after_setup_theme', 'register_menus');

//Register widgets
function register_widgets()
{
	register_sidebar(array(
		'name'	=> 'Blog Left Sidebar',
		'id'		=> 'blog-left-sidebar',
	));

	register_sidebar(array(
		'name'	=> 'Blog Right Sidebar',
		'id'		=> 'blog-right-sidebar',
	));

	register_sidebar(array(
		'name'	=> 'Page Left Sidebar',
		'id'		=> 'page-left-sidebar',
	));

	register_sidebar(array(
		'name'	=> 'Page Right Sidebar',
		'id'		=> 'page-right-sidebar',
	));

	register_sidebar(array(
		'name'	=> 'Promotion',
		'id'		=> 'promotion',
	));

	register_sidebar(array(
		'name'	=> 'Extended Header',
		'id'		=> 'extended-header',
	));

	register_sidebar(array(
		'name'	=> 'Extended Footer',
		'id'		=> 'extended-footer',
	));
}
add_action('widgets_init', 'register_widgets');

//Excerpt
add_filter( 'excerpt_length', function($length){ return 25; });

function init_scripts()
{
	// Wordpress Required Styles
	wp_enqueue_style('wordpress-required-style', get_stylesheet_uri());

	// Normalize CSS
	wp_enqueue_style('normalize-css', get_template_directory_uri() . '/css/normalize.min.css', false, '8.0.1', 'all');

	// Macy Masonry
	wp_enqueue_script('masonry-script', get_template_directory_uri() . '/js/macy.min.js', array(), '2.5.1');

	// Hover CSS
	wp_enqueue_style('hover-css', get_template_directory_uri() . '/css/hover.css', false, '1.0.0', 'all');

	// Fittext
	wp_enqueue_script('fittext-script', get_template_directory_uri() . '/js/fittext.min.js', array('jquery'), '1.2.0');

	// AOS CSS and JS
	if(get_theme_mod('section_title_anims_trigger', 'none') == 'aos' or
		get_theme_mod('section_subtitle_anims_trigger', 'none') == 'aos' or
		get_theme_mod('card_anims_trigger', 'none') == 'aos' or
		get_theme_mod('page_title_anims_trigger', 'none') == 'aos')
	{
		wp_enqueue_style('aos-css', get_template_directory_uri() . '/css/aos.css', false, '3.0.0', 'all');
		wp_enqueue_script('aos-script', get_template_directory_uri() . '/js/aos.js', true, '3.0.0', 'all');
	}

	// Laxxx
	if(get_theme_mod('section_title_anims_trigger', 'none') == 'lax' or
		get_theme_mod('section_subtitle_anims_trigger', 'none') == 'lax' or
		get_theme_mod('page_title_anims_trigger', 'none') == 'lax' or
		get_theme_mod('card_anims_trigger', 'none') == 'lax')
	{
		wp_enqueue_script('lax-script', get_template_directory_uri() . '/js/lax.min.js');
	}

	// Scroll To
	wp_enqueue_script('scroll-script', get_template_directory_uri() . '/js/scroll.min.js', array('jquery'), '2.1.2', true);

	// Main Styles and Scripts
	wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', false, '1.0.0', 'all');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'init_scripts');

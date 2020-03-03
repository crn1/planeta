<?php

include_once get_theme_file_path( 'inc/kirki-installer.php' );
include_once get_theme_file_path( 'inc/customizer.php' );

//Theme support
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('title-tag');

//Remove WordPress junk
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'rsd_link');
remove_action( 'wp_head', 'wlwmanifest_link');

function deregister_scripts(){
	wp_deregister_script('wp-embed');
}
add_action('wp_footer', 'deregister_scripts');

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
		'id'		=> 'promotion-sidebar',
	));

	register_sidebar(array(
		'name'	=> 'Portfolio',
		'id'		=> 'portfolio-sidebar',
	));

	register_sidebar(array(
		'name'	=> 'Footer',
		'id'		=> 'footer-sidebar',
	));
}
add_action('widgets_init', 'register_widgets');

//Excerpt
add_filter( 'excerpt_length', function($length){ return 25; });

function init_scripts()
{
	wp_enqueue_style('wordpress-required-style', get_stylesheet_uri());
	wp_enqueue_style('main-style', get_template_directory_uri() . '/css/style.css', false, '1.0.0', 'all');
	wp_enqueue_script('masonry-script', get_template_directory_uri() . '/js/macy.min.js', array(), '2.5.1');
	wp_enqueue_script('main-script', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'init_scripts');

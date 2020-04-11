<?php

Kirki::add_panel('404_panel', array(
	'title'	=> esc_html__('404 (Not Found) Page', 'planeta'),
	'panel'	=> 'modules_panel',
));

Kirki::add_section('404_content', array(
	'title'	=> esc_html__('Content', 'planeta'),
	'panel'	=> '404_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'image',
	'settings'				=> '404_image',
	'label'						=> esc_html__('Image', 'planeta'),
	'section'					=> '404_content',
	'default'					=> '',
	'choices'     		=> array(
		'save_as' 				=> 'id',
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> '404_title',
	'label'						=> esc_html__('Title', 'planeta'),
	'section'					=> '404_content',
	'default'					=> '404',
	'partial_refresh'	=> array(
		'404_title'				=> array(
			'selector'				=> '#not-found-container > .page-title',
			'render_callback'	=> function()
			{
				return get_theme_mod('404_title', '404');
			}
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'textarea',
	'settings'				=> '404_subtitle',
	'label'						=> esc_html__('Subtitle', 'planeta'),
	'section'					=> '404_content',
	'default'					=> 'Page not Found!',
	'partial_refresh'	=> array(
		'404_subtitle'		=> array(
			'selector'				=> '#not-found-container > .page-subtitle',
			'render_callback'	=> function()
			{
				return get_theme_mod('404_subtitle', 'Page Not Found!');
			}
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> '404_homepage',
	'label'						=> esc_html__('Homepage Caption', 'planeta'),
	'section'					=> '404_content',
	'default'					=> 'Return to Homepage',
	'partial_refresh'	=> array(
		'404_homepage'		=> array(
			'selector'				=> '#not-found-homepage > span > a',
			'render_callback'	=> function()
			{
				return get_theme_mod('404_homepage', 'Return to Homepage');
			}
		),
	),
));

require_once(get_template_directory() . '/inc/customizer/video-background.php');
planeta_add_video_background(
	$section = 'not_found',
	$panel = '404_panel',
	$bg_output = '#not_found-overlay'
);

?>

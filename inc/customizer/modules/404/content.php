<?php

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
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> '404_title',
	'label'						=> esc_html__('Title', 'planeta'),
	'section'					=> '404_content',
	'default'					=> '404',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'textarea',
	'settings'				=> '404_subtitle',
	'label'						=> esc_html__('Subtitle', 'planeta'),
	'section'					=> '404_content',
	'default'					=> 'Page not Found!',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> '404_homepage',
	'label'						=> esc_html__('Homepage Caption', 'planeta'),
	'section'					=> '404_content',
	'default'					=> 'Return to Homepage',
));

?>

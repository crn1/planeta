<?php

Kirki::add_section('social_menu_section', array(
	'title'	=> esc_html__('Social Media Menu', 'planeta'),
	'panel'	=> 'modules_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'enable_social_menu',
	'label'				=> esc_html__('Enable Social Menu', 'planeta'),
	'section'			=> 'social_menu_section',
	'default'			=> 0,
));

Kirki::add_field('planeta_config', array(
	'type' 				=> 'slider',
	'settings'		=> 'social_menu_size',
	'label'				=> esc_html__('Icon Size (rem)', 'planeta'),
	'section'			=> 'social_menu_section',
	'default'			=> 1,
	'choices'     => array(
		'min'					=> 0.1,
		'max'					=> 10,
		'step'				=> 0.1,
	),
	'active_callback'	=> array(
		array(
			'setting'		=> 'enable_social_menu',
			'operator'	=> '==',
			'value'			=> '1',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'color',
	'settings'				=> 'social_menu_color',
	'label'						=> esc_html__('Icon Color', 'planeta'),
	'section'					=> 'social_menu_section',
	'default'					=> '#FFFFFF',
	'choices'					=> array(
		'alpha'						=> true,
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'enable_social_menu',
			'operator'			=> '==',
			'value'					=> '1',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'repeater',
	'settings'				=> 'social_menu_items',
	'label'						=> esc_html__('Items', 'planeta'),
	'section'					=> 'social_menu_section',
	'row_label' 			=> array(
		'type'  					=> 'field',
		'field' 					=> 'service',
	),
	'fields'					=> array(
		'url'							=> array(
			'type'						=> 'link',
			'default'					=> 'https://www.example.org',
			'label'						=> esc_html__('URL', 'planeta'),
		),
		'service'					=> array(
			'type'						=> 'select',
			'default'					=> 'linkedin',
			'label'						=> esc_html__('Service', 'planeta'),
			'choices'					=> array(
				'linkedin'				=> esc_html__('Linked In', 'planeta'),
				'faceboook'				=> esc_html__('Facebook', 'planeta'),
				'instagram'				=> esc_html__('Instagram', 'planeta'),
				'twitter'					=> esc_html__('Twitter', 'planeta'),
				'youtube'					=> esc_html__('YouTube', 'planeta'),
				'github'					=> esc_html__('GitHub', 'planeta'),
			),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'enable_social_menu',
			'operator'			=> '==',
			'value'					=> '1',
		),
	),
));

?>

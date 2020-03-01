<?php

Kirki::add_section('social_menu_section', array(
	'title'	=> esc_html__('Social Media Menu', 'kirki'),
	'panel'	=> 'modules_panel',
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'enable_social_menu',
	'label'				=> esc_html__('Enable Social Menu', 'kirki'),
	'section'			=> 'social_menu_section',
	'default'			=> 0,
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'dimension',
	'settings'				=> 'social_menu_size',
	'label'						=> esc_html__('Icon Size', 'kirki'),
	'section'					=> 'social_menu_section',
	'default'					=> '16px',
	'active_callback'	=> array(
		array(
			'setting'				=> 'enable_social_menu',
			'operator'			=> '==',
			'value'					=> '1',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'color',
	'settings'				=> 'social_menu_color',
	'label'						=> esc_html__('Icon Color', 'kirki'),
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

Kirki::add_field('kirki_config', array(
	'type' 						=> 'repeater',
	'settings'				=> 'social_menu_items',
	'label'						=> esc_html__('Items', 'kirki'),
	'section'					=> 'social_menu_section',
	'row_label' 			=> array(
		'type'  					=> 'field',
		'field' 					=> 'service',
	),
	'fields'					=> array(
		'url'							=> array(
			'type'						=> 'link',
			'default'					=> 'https://www.example.org',
			'label'						=> esc_html__('URL', 'kirki'),
		),
		'service'					=> array(
			'type'						=> 'select',
			'default'					=> 'linkedin',
			'label'						=> esc_html__('Service', 'kirki'),
			'choices'					=> array(
				'linkedin'				=> esc_html__('Linked In', 'kirki'),
				'faceboook'				=> esc_html__('Facebook', 'kirki'),
				'instagram'				=> esc_html__('Instagram', 'kirki'),
				'twitter'					=> esc_html__('Twitter', 'kirki'),
				'youtube'					=> esc_html__('YouTube', 'kirki'),
				'github'					=> esc_html__('GitHub', 'kirki'),
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

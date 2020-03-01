<?php

Kirki::add_section('cursor_section', array(
	'title'	=> esc_html__('Cursor', 'kirki'),
	'panel'	=> 'theme_options_panel',
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'cursor_enable',
	'label'			=> esc_html__('Enable Custom Cursor', 'kirki'),
	'section'		=> 'cursor_section',
	'default'		=> false,
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'cursor_alonsiode_default',
	'label'			=> esc_html__('Show Both Custom and Default Cursor', 'kirki'),
	'section'		=> 'cursor_section',
	'default'		=> false,
	'active_callback' => array(
		array(
			'setting'					=> 'cursor_enable',
			'operator'				=> '==',
			'value'						=> true,
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'slider',
	'settings'	=> 'cursor_follow_time',
	'label'			=> esc_html__('Cursor Follow Time (in milliseconds)', 'kirki'),
	'section'		=> 'cursor_section',
	'default'		=> 700,
	'choices'		=> array(
		'min'				=> 0,
		'max'				=> 7000,
		'step'			=> 100,
	),
	'active_callback' => array(
		array(
			'setting'					=> 'cursor_enable',
			'operator'				=> '==',
			'value'						=> true,
		),
	),
));

supplier_add_cursor_type_fields('Default', 'default');
supplier_add_cursor_type_fields('Hover', 'hover');
supplier_add_cursor_type_fields('Click', 'click');

function supplier_add_cursor_type_fields($name, $type)
{

	Kirki::add_field('kirki_config', array(
		'type' 									=> 'background',
		'settings'							=> "cursor_${type}_bg",
		'label'									=> esc_html__("${name} Cursor Backround", 'kirki'),
		'section'								=> 'cursor_section',
		'default'     					=> array(
			'background-color'			=> 'rgba(0, 0, 0, 0)',
			'background-image'			=> '',
			'background-repeat'			=> 'repeat',
			'background-position'		=> 'center center',
			'background-size'				=> 'cover',
			'background-attachment'	=> 'scroll',
		),
		'output'								=> array(
			array(
				'element'								=> ".${type}-cursor",
			),
		),
		'active_callback' => array(
			array(
				'setting'					=> 'cursor_enable',
				'operator'				=> '==',
				'value'						=> true,
			),
		),
	));

	Kirki::add_field('kirki_config', array(
		'type' 			=> 'slider',
		'settings'	=> "cursor_${type}_width",
		'label'			=> esc_html__("${name} Cursor Width", 'kirki'),
		'section'		=> 'cursor_section',
		'default'		=> 14,
		'choices'		=> array(
			'min'				=> 1,
			'max'				=> 100,
			'step'			=> 1,
		),
		'active_callback' => array(
			array(
				'setting'					=> 'cursor_enable',
				'operator'				=> '==',
				'value'						=> true,
			),
		),
	));

	Kirki::add_field('kirki_config', array(
		'type' 			=> 'slider',
		'settings'	=> "cursor_${type}_height",
		'label'			=> esc_html__("${name} Cursor Height", 'kirki'),
		'section'		=> 'cursor_section',
		'default'		=> 14,
		'choices'		=> array(
			'min'				=> 1,
			'max'				=> 100,
			'step'			=> 1,
		),
		'active_callback' => array(
			array(
				'setting'					=> 'cursor_enable',
				'operator'				=> '==',
				'value'						=> true,
			),
		),
	));

	Kirki::add_field('kirki_config', array(
		'type' 			=> 'slider',
		'settings'	=> "cursor_${type}_border_radius",
		'label'			=> esc_html__("${name} Cursor Border Radius (in %)", 'kirki'),
		'section'		=> 'cursor_section',
		'default'		=> 50,
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 50,
			'step'			=> 1,
		),
		'active_callback' => array(
			array(
				'setting'					=> 'cursor_enable',
				'operator'				=> '==',
				'value'						=> true,
			),
		),
	));

	Kirki::add_field('kirki_config', array(
		'type' 			=> 'slider',
		'settings'	=> "cursor_${type}_border_width",
		'label'			=> esc_html__("${name} Cursor Border Width", 'kirki'),
		'section'		=> 'cursor_section',
		'default'		=> 2,
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 50,
			'step'			=> 1,
		),
		'active_callback' => array(
			array(
				'setting'					=> 'cursor_enable',
				'operator'				=> '==',
				'value'						=> true,
			),
		),
	));

	Kirki::add_field('kirki_config', array(
		'type' 			=> 'color',
		'settings'	=> "cursor_${type}_border_color",
		'label'			=> esc_html__("${name} Cursor Border Color", 'kirki'),
		'section'		=> 'cursor_section',
		'default'		=> 'rgba(0, 0, 0, 0)',
		'choices'		=> array(
			'alpha'			=> true,
		),
		'active_callback' => array(
			array(
				'setting'					=> 'cursor_enable',
				'operator'				=> '==',
				'value'						=> true,
			),
		),
	));
}


?>

<?php

Kirki::add_section('effects_section', array(
	'title'       => esc_html__('Effects', 'kirki' ),
	'panel'       => 'theme_options_panel',
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'radio-buttonset',
	'settings'		=> 'scroll_direction',
	'label'				=> esc_html__('Scroll Direction', 'kirki'),
	'section'			=> 'effects_section',
	'default'			=> 'normal',
	'choices'			=> array(
		'normal'			=> esc_html__('Normal', 'kirki'),
		'to_left'			=> esc_html__('To Left', 'kirki'),
		'to_right'		=> esc_html__('To Right', 'kirki'),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'effects_trigger_type',
	'label'						=> esc_html__('Effects Trigger Type', 'kirki'),
	'section'					=> 'effects_section',
	'default'					=> 'popup',
	'choices'					=> array(
		'popup'						=> esc_html__('Pop-up', 'kirki'),
		'scroll'					=> esc_html__('Scroll', 'kirki'),
	),
	'active_callback' => array(
		array(
			'setting'					=> 'scroll_direction',
			'operator'				=> '==',
			'value'						=> 'normal',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'select',
	'settings'				=> 'transitions_type',
	'label'						=> esc_html__('Transitions Type', 'kirki'),
	'section'					=> 'effects_section',
	'default'					=> 'static',
	'choices'					=> array(
		'static'						=> esc_html__('Static/No Effect (default)', 'kirki'),
		'fade_in'						=> esc_html__('Fade in', 'kirki'),
		'rise_top'					=> esc_html__('Rise from Top', 'kirki'),
		'rise_bottom'				=> esc_html__('Rise from Bottom', 'kirki'),
		'grow'							=> esc_html__('Grow/Shrink', 'kirki'),
		'rotate'						=> esc_html__('Rotate (3D)', 'kirki'),
	),
	'active_callback' => array(
		array(
			'setting'					=> 'scroll_direction',
			'operator'				=> '==',
			'value'						=> 'normal',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'effects_rotate_x',
	'label'						=> esc_html__('Rotate X', 'kirki'),
	'section'					=> 'effects_section',
	'default'					=> 0,
	'choices'					=> array(
		'min'							=> -180,
		'max'							=> 1,
		'step'						=> 180,
	),
	'active_callback' => array(
		array(
			'setting'				=> 'transitions_type',
			'operator'			=> '==',
			'value'					=> 'rotate',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'effects_rotate_y',
	'label'						=> esc_html__('Rotate Y', 'kirki'),
	'section'					=> 'effects_section',
	'default'					=> 0,
	'choices'					=> array(
		'min'							=> -180,
		'max'							=> 1,
		'step'						=> 180,
	),
	'active_callback' => array(
		array(
			'setting'				=> 'transitions_type',
			'operator'			=> '==',
			'value'					=> 'rotate',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'effects_timing',
	'label'						=> esc_html__('Timing (in milliseconds)', 'kirki'),
	'section'					=> 'effects_section',
	'default'					=> 700,
	'choices'					=> array(
		'min'							=> 0,
		'max'							=> 8000,
		'step'						=> 100,
	),
	'active_callback' => array(
		array(
			'setting'				=> 'effects_trigger_type',
			'operator'			=> '==',
			'value'					=> 'popup',
		),
		array(
			'setting'				=> 'transitions_type',
			'operator'			=> '!=',
			'value'					=> 'static',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'effects_scale_from',
	'label'						=> esc_html__('Scale from', 'kirki'),
	'section'					=> 'effects_section',
	'default'					=> 1,
	'choices'					=> array(
		'min'							=> 0.1,
		'max'							=> 10,
		'step'						=> 0.1,
	),
	'active_callback' => array(
		array(
			'setting'				=> 'scroll_direction',
			'operator'			=> '==',
			'value'					=> 'normal',
		),
		array(
			'setting'				=> 'transitions_type',
			'operator'			=> '==',
			'value'					=> 'grow',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'effects_scale_to',
	'label'						=> esc_html__('Scale to', 'kirki'),
	'section'					=> 'effects_section',
	'default'					=> 1,
	'choices'					=> array(
		'min'							=> 0.1,
		'max'							=> 10,
		'step'						=> 0.1,
	),
	'active_callback' => array(
		array(
			'setting'				=> 'scroll_direction',
			'operator'			=> '==',
			'value'					=> 'normal',
		),
		array(
			'setting'				=> 'transitions_type',
			'operator'			=> '==',
			'value'					=> 'grow',
		),
	),
));

?>

<?php

Kirki::add_section('frontpage_section', array(
	'title'       => esc_html__('Frontpage', 'kirki' ),
	'panel'       => 'modules_panel',
));

Kirki::add_field('kirki_config', array(
	'type' 									=> 'background',
	'settings'							=> 'frontpage_background',
	'label'									=> esc_html__('Backround', 'kirki'),
	'section'								=> 'footer_section',
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
			'element'								=> '.frontpage-bg',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'toggle',
	'label'			=> esc_html__('Sticky Fullscreen Section Title', 'kirki'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_title_is_sticky',
	'default'		=> true,
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'frontpage_effects_trigger_type',
	'label'						=> esc_html__('Effects Trigger Type', 'kirki'),
	'section'					=> 'frontpage_section',
	'default'					=> 'reveal',
	'choices'					=> array(
		'reveal'						=> esc_html__('Reveal', 'kirki'),
		'scroll'					=> esc_html__('Scroll', 'kirki'),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'effects_timing',
	'label'						=> esc_html__('Timing (in milliseconds)', 'kirki'),
	'section'					=> 'frontpage_section',
	'default'					=> 700,
	'choices'					=> array(
		'min'							=> 0,
		'max'							=> 7000,
		'step'						=> 100,
	),
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_effects_trigger_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'repeater',
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_effects',
	'label'			=> esc_html__('Effects for Section Title', 'kirki'),
	'row_label'	=> array(
		'type'			=> 'field',
		'field'			=> 'title',
		'value'   	=> esc_html__('Item', 'kirki'),
	),
	'default'		=> array(),
	'fields'		=> array(
		array(
			'type'					=> 'select',
			'label'					=> esc_html__('Effect Type', 'kirki'),
			'default'					=> 'fade_in',
			'choices'					=> array(
				'fade_in'					=> esc_html__('Fade in (default)', 'kirki'),
				'rise_top'				=> esc_html__('Rise from Top', 'kirki'),
				'rise_bottom'			=> esc_html__('Rise from Bottom', 'kirki'),
				'grow'						=> esc_html__('Grow/Shrink', 'kirki'),
				'rotate'					=> esc_html__('Rotate (3D)', 'kirki'),
			),
		),
		array(
			'type'					=> 'text',
			'label'					=> esc_html__('Strength From', 'kirki'),
			'default'				=> esc_html__('0', 'kirki'),
		),
		array(
			'type'					=> 'text',
			'label'					=> esc_html__('Strength To', 'kirki'),
			'default'				=> esc_html__('0', 'kirki'),
		),
	),
));

?>

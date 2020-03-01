<?php

Kirki::add_section('card_section', array(
	'title'       => esc_html__('Card', 'kirki' ),
	'panel'       => 'modules_panel',
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'radio-buttonset',
	'settings'		=> 'card_type',
	'label'				=> esc_html__('Type/Appearance', 'kirki'),
	'section'			=> 'card_section',
	'default'			=> 'static',
	'choices'			=> array(
		'static'			=> esc_html__('Static', 'kirki'),
		'zigzag'			=> esc_html__('Zig-Zag', 'kirki'),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'card_zigzag_level',
	'label'						=> esc_html__('Zig-Zag Effect Level', 'kirki'),
	'section'					=> 'card_section',
	'default'					=> 3,
	'choices'					=> array(
		'min'							=> 0,
		'max'							=> 10,
		'step'						=> 1,
	),
	'active_callback' => array(
		array(
			'setting'					=> 'card_type',
			'operator'				=> '==',
			'value'						=> 'zigzag',
		),
		array(
			'setting'					=> 'card_zigzag_is_random',
			'operator'				=> '==',
			'value'						=> '0',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'card_zigzag_is_random',
	'label'				=> esc_html__('Random Zig-Zag Level', 'kirki'),
	'section'			=> 'card_section',
	'default'			=> '0',
	'active_callback' => array(
		array(
			'setting'					=> 'card_type',
			'operator'				=> '==',
			'value'						=> 'zigzag',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'slider',
	'settings'		=> 'card_image_opacity',
	'label'				=> esc_html__('Featured Image Opacity', 'kirki'),
	'section'			=> 'card_section',
	'default'			=> '0',
	'choices'			=> array(
		'min'					=> 0,
		'max'					=> 1,
		'step'				=> 0.01,
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'card_parallax_title',
	'label'				=> esc_html__('Parallax Title', 'kirki'),
	'section'			=> 'card_section',
	'default'			=> '0',
));

?>

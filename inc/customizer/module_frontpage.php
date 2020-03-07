<?php

Kirki::add_section('frontpage_section', array(
	'title'       => esc_html__('Frontpage', 'kirki' ),
	'panel'       => 'modules_panel',
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'toggle',
	'label'			=> esc_html__('Use Parallax', 'kirki'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_parallax',
	'default'		=> false,
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'toggle',
	'label'			=> esc_html__('Random Parallax Speed', 'kirki'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_parallax_random',
	'default'		=> false,
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_parallax',
			'operator'			=> '==',
			'value'					=> true,
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'frontpage_title_type',
	'label'						=> esc_html__('Section Title Type', 'kirki'),
	'section'					=> 'frontpage_section',
	'default'					=> 'reveal',
	'choices'					=> array(
		'reveal'					=> esc_html__('Reveal', 'kirki'),
		'scroll'					=> esc_html__('Scroll', 'kirki'),
	),
));
Kirki::add_field('kirki_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'kirki'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_title_effects_reveal',
	'default'				=> 'fade_in',
	'choices'				=> array(
		'fade_in'				=> esc_html__('Fadess in (default)', 'kirki'),
		'rise_top'			=> esc_html__('Rise from Top', 'kirki'),
		'rise_bottom'		=> esc_html__('Rise from Bottom', 'kirki'),
		'grow'					=> esc_html__('Grow/Shrink', 'kirki'),
		'rotate'				=> esc_html__('Rotate (3D)', 'kirki'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '==',
			'value'					=> 'reveal'
		),

	),
));

Kirki::add_field('kirki_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'kirki'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_title_effects_scroll',
	'default'				=> 'fade_in',
	'choices'				=> array(
		'fade_in'				=> esc_html__('Fade in (default)', 'kirki'),
		'rise_top'			=> esc_html__('Rise from Top', 'kirki'),
		'rise_bottom'		=> esc_html__('Rise from Bottom', 'kirki'),
		'grow'					=> esc_html__('Grow/Shrink', 'kirki'),
		'rotate'				=> esc_html__('Rotate (3D)', 'kirki'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '==',
			'value'					=> 'scroll'
		),

	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'frontpage_title_timing',
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
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'slider',
	'label'			=> esc_html__('Section Title Padding Top & Bottom (vh)', 'kirki'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_title_padding',
	'default'		=> 10,
	'choices'		=> array(
		'min'			=> '2',
		'max'			=> '200',
		'step'		=> '2',
	),
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
	'output'		=> array(
		array(
			'element'		=> '.frontpage-title',
			'units'			=> 'vh',
			'property'	=> 'padding-top',
		),
		array(
			'element'		=> '.frontpage-title',
			'units'			=> 'vh',
			'property'	=> 'padding-bottom',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'frontpage_subtitle_type',
	'label'						=> esc_html__('Section Subtitle Type', 'kirki'),
	'section'					=> 'frontpage_section',
	'default'					=> 'reveal',
	'choices'					=> array(
		'reveal'					=> esc_html__('Reveal', 'kirki'),
		'scroll'					=> esc_html__('Scroll', 'kirki'),
	),
));

Kirki::add_field('kirki_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'kirki'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_subtitle_effects_reveal',
	'default'				=> 'fade_in',
	'choices'				=> array(
		'fade_in'				=> esc_html__('Fade in dd(default)', 'kirki'),
		'rise_top'			=> esc_html__('Rise from Top', 'kirki'),
		'rise_bottom'		=> esc_html__('Rise from Bottom', 'kirki'),
		'grow'					=> esc_html__('Grow/Shrink', 'kirki'),
		'rotate'				=> esc_html__('Rotate (3D)', 'kirki'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal'
		),

	),
));

Kirki::add_field('kirki_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'kirki'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_subtitle_effects_scroll',
	'default'				=> 'fade_in',
	'choices'				=> array(
		'fade_in'				=> esc_html__('Fade in (default)', 'kirki'),
		'rise_top'			=> esc_html__('Rise from Top', 'kirki'),
		'rise_bottom'		=> esc_html__('Rise from Bottom', 'kirki'),
		'grow'					=> esc_html__('Grow/Shrink', 'kirki'),
		'rotate'				=> esc_html__('Rotate (3D)', 'kirki'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'scroll'
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'frontpage_subtitle_timing',
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
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));


Kirki::add_field('kirki_config', array(
	'type'			=> 'slider',
	'label'			=> esc_html__('Section Subtitle Padding Top & Bottom (vh)', 'kirki'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_subtitle_padding',
	'default'		=> 10,
	'choices'		=> array(
		'min'			=> '2',
		'max'			=> '200',
		'step'		=> '2',
	),
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
	'output'		=> array(
		array(
			'element'		=> '.frontpage-subtitle',
			'units'			=> 'vh',
			'property'	=> 'padding-top',
		),
		array(
			'element'		=> '.frontpage-subtitle',
			'units'			=> 'vh',
			'property'	=> 'padding-bottom',
		),
	),
));

?>

<?php

require_once(get_template_directory() . '/inc/customizer/video-background.php');

Kirki::add_panel('footer_panel', array(
	'title'       => esc_html__('Footer', 'planeta'),
));

Kirki::add_section('footer_spacing', array(
	'title'       => esc_html__('Spacing', 'planeta'),
	'panel'       => 'footer_panel',
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Minimum Height (vh)', 'planeta'),
	'section'				=> "footer_spacing",
	'settings'			=> "footer_min_height",
	'default'				=> 10,
	'choices'				=> array(
		'min'						=> 0,
		'max'						=> 100,
		'step'					=> 1,
	),
	'transport'			=> 'auto',
	'output'				=> array(
		array(
			'element'			=> '#main-footer',
			'property'		=> 'min-height',
			'units'				=> 'vh',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Padding Top (rem)', 'planeta'),
	'section'				=> "footer_spacing",
	'settings'			=> "footer_padding_top",
	'default'				=> 5,
	'choices'				=> array(
		'min'						=> 0,
		'max'						=> 30,
		'step'					=> 0.5,
	),
	'transport'			=> 'auto',
	'output'				=> array(
		array(
			'element'			=> '#main-footer',
			'property'		=> 'padding-top',
			'units'				=> 'rem',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Spacing Top (rem)', 'planeta'),
	'section'				=> "footer_spacing",
	'settings'			=> "footer_margin_top",
	'default'				=> 5,
	'choices'				=> array(
		'min'						=> 0,
		'max'						=> 30,
		'step'					=> 0.5,
	),
	'transport'			=> 'auto',
	'output'				=> array(
		array(
			'element'			=> '#main-footer',
			'property'		=> 'margin-top',
			'units'				=> 'rem',
		),
	),
));

planeta_add_video_background(
	$section = 'footer',
	$panel = 'footer_panel',
	$bg_output = '#main-footer .background-overlay'
);

planeta_add_shape(array(
	'title'					=> 'Background Shape',
	'section'				=> 'footer',
	'panel'					=> "footer_panel",
	'height_output'	=> array(
		"#main-footer .background-overlay",
		"#main-footer .video-background",
	),
	'outside_output'	=> "#main-footer",
));

?>

<?php

require_once(get_template_directory() . '/inc/customizer/video-background.php');

Kirki::add_panel('footer_panel', array(
	'title'       => esc_html__('Footer', 'planeta'),
	'panel'       => 'modules_panel',
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
	'label'					=> esc_html__('Padding Top (vh)', 'planeta'),
	'section'				=> "footer_spacing",
	'settings'			=> "footer_padding_top",
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
			'property'		=> 'padding-top',
			'units'				=> 'vh',
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Spacing Top (vh)', 'planeta'),
	'section'				=> "footer_spacing",
	'settings'			=> "footer_margin_top",
	'default'				=> 10,
	'choices'				=> array(
		'min'						=> 0,
		'max'						=> 30,
		'step'					=> 1,
	),
	'transport'			=> 'auto',
	'output'				=> array(
		array(
			'element'			=> '#main-footer',
			'property'		=> 'margin-top',
			'units'				=> 'vh',
		),
	),
));

planeta_add_video_background(
	$section = 'footer',
	$panel = 'footer_panel',
	$bg_output = '#main-footer-overlay'
);

?>

<?php

function planeta_add_separator($section, $panel)
{
	Kirki::add_section("${section}_separator", array(
		'title' => esc_html__('Separator', 'planeta'),
		'panel' => $panel,
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'select',
		'label'			=> esc_html__('Shape', 'planeta'),
		'section'		=> "${section}_separator",
		'settings'	=> "${section}_separator",
		'default'		=> 'none',
		'choices'		=> array(
			'none'				=> esc_html__('None (default)', 'planeta'),
			'line-left'		=> esc_html__('Line (Left)', 'planeta'),
			'line-right'	=> esc_html__('Line (Right)', 'planeta'),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Angle (%)', 'planeta'),
		'section'		=> "${section}_separator",
		'settings'	=> "${section}_separator_angle",
		'default'		=> 10,
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 100,
			'step'			=> 1,
		),
		'active_callback'	=> array(
			array(
				'setting'					=> "${section}_separator",
				'operator'				=> 'contains',
				'value'						=> array('line-left', 'line-right'),
			)
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Height (%)', 'planeta'),
		'section'		=> "${section}_separator",
		'settings'	=> "${section}_separator_height",
		'default'		=> 100,
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 100,
			'step'			=> 1,
		),
		'output'		=> array(
			array(
				'element'			=> "#${section}-overlay",
				'property'		=> 'height',
				'units'				=> '%',
			),
			array(
				'element'			=> "#${section}-video-background",
				'property'		=> 'height',
				'units'				=> '%',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'color',
		'label'			=> esc_html__('Color', 'planeta'),
		'section'		=> "${section}_separator",
		'settings'	=> "${section}_separator_color",
		'default'		=> 'rgba(0, 0, 0, 0)',
		'choices'		=> array(
			'alpha'			=> true,
		),
		'output'		=> array(
			array(
				'element'			=> "#${section}",
				'property'		=> 'background-color',
			),
		),
		'active_callback' => array(
			array(
				'setting'					=> "${section}_separator",
				'operator'				=> '!=',
				'value'						=> 'none',
			),
		),
	));
}

?>

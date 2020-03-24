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
			'line-left'		=> esc_html__('Line Left', 'planeta'),
			'line-right'	=> esc_html__('Line Right', 'planeta'),
			'point'				=> esc_html__('Point', 'planeta'),
			'circle'			=> esc_html__('Circle', 'planeta'),
			'zigzag-1'		=> esc_html__('Zig Zag 1', 'planeta'),
			'zigzag-2'		=> esc_html__('Zig Zag 2', 'planeta'),
			'zigzag-3'		=> esc_html__('Zig Zag 3', 'planeta'),
			'zigzag-4'		=> esc_html__('Zig Zag 4', 'planeta'),
			'zigzag-5'		=> esc_html__('Zig Zag 5', 'planeta'),
			'zigzag-6'		=> esc_html__('Zig Zag 6', 'planeta'),
			'zigzag-7'		=> esc_html__('Zig Zag 7', 'planeta'),
			'zigzag-8'		=> esc_html__('Zig Zag 8', 'planeta'),
			'paper-left'	=> esc_html__('Paper Left', 'planeta'),
			'paper-right'	=> esc_html__('Paper Right', 'planeta'),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Strength (%)', 'planeta'),
		'section'		=> "${section}_separator",
		'settings'	=> "${section}_separator_strength",
		'default'		=> 10,
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 100,
			'step'			=> 1,
		),
		'active_callback'	=> array(
			array(
				'setting'					=> "${section}_separator",
				'operator'				=> '!=',
				'value'						=> 'none',
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

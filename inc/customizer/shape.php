<?php

function planeta_add_shape($args)
{
	$args = array_merge(array(
		'height_output'		=> array(),
		'outside_output'	=> array(),
		'section'					=> '',
		'inline'					=> false,
		'panel'						=> '',
		'title'						=> esc_html('Shapes', 'planeta'),
	), $args);

	$section = $args['inline'] ? $args['section'] : $args['section'] . '_shape';
	$type = $args['inline'] ? "${section}_shape" : $section;

	if(!$args['inline'])
	{
		Kirki::add_section($section, array(
			'title' => $args['title'],
			'panel' => $args['panel'],
		));
	}

	Kirki::add_field('planeta_config', array(
		'type'			=> 'select',
		'label'			=> esc_html__('Shape', 'planeta'),
		'section'		=> $section,
		'settings'	=> $type,
		'default'		=> 'none',
		'choices'		=> array(
			'none'								=> esc_html__('None (default)', 'planeta'),
			'rounded'							=> esc_html__('Rounded', 'planeta'),
			'line-top-left'				=> esc_html__('Line Top Left', 'planeta'),
			'line-top-right'			=> esc_html__('Line Top Right', 'planeta'),
			'line-bottom-left'		=> esc_html__('Line Bottom Left', 'planeta'),
			'line-bottom-right'		=> esc_html__('Line Bottom Right', 'planeta'),
			'line-both-left'			=> esc_html__('Line Both Left', 'planeta'),
			'line-both-right'			=> esc_html__('Line Both Right', 'planeta'),
			'point-up'						=> esc_html__('Point Up', 'planeta'),
			'point-down'					=> esc_html__('Point Down', 'planeta'),
			'point-left'					=> esc_html__('Point Left', 'planeta'),
			'point-right'					=> esc_html__('Point Right', 'planeta'),
			'circle-up'						=> esc_html__('Circle Up', 'planeta'),
			'circle-down'					=> esc_html__('Circle Down', 'planeta'),
			'circle-full'					=> esc_html__('Circle Full', 'planeta'),
			'paper-top-left'			=> esc_html__('Paper Top Left', 'planeta'),
			'paper-top-right'			=> esc_html__('Paper Top Right', 'planeta'),
			'paper-bottom-left'		=> esc_html__('Paper Bottom Left', 'planeta'),
			'paper-bottom-right'	=> esc_html__('Paper Bottom Right', 'planeta'),
			'trapezoid-up'				=> esc_html__('Trapezoid Up', 'planeta'),
			'trapezoid-down'			=> esc_html__('Trapezoid Down', 'planeta'),
			'rhombus'							=> esc_html__('Rhombus', 'planeta'),
			'frame'								=> esc_html__('Frame', 'planeta'),
			'inset'								=> esc_html__('Inset', 'planeta'),
			'fancy'								=> esc_html__('Fancy (Randomly Generated)', 'planeta'),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Shape Strength', 'planeta'),
		'section'		=> $section,
		'settings'	=> "${section}_strength",
		'default'		=> 10,
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 100,
			'step'			=> 1,
		),
		'active_callback'	=> array(
			array(
				'setting'					=> $type,
				'operator'				=> '!=',
				'value'						=> 'none',
			),
		),
	));

	if(!empty($args['height_output']))
	{
		Kirki::add_field('planeta_config', array(
			'type'			=> 'slider',
			'label'			=> esc_html__('Shape Height (%)', 'planeta'),
			'section'		=> $section,
			'settings'	=> "${section}_height",
			'default'		=> 100,
			'choices'		=> array(
				'min'				=> 0,
				'max'				=> 100,
				'step'			=> 1,
			),
			'transport'	=> 'auto',
			'output'		=> array(
				array(
					'element'		=> $args['height_output'],
					'property'	=> 'height',
					'units'			=> '%',
				),
			),
		));
	}

	if(!empty($args['outside_output']))
	{
		Kirki::add_field('planeta_config', array(
			'type'			=> 'color',
			'label'			=> esc_html__('Color Outside of the Shape', 'planeta'),
			'section'		=> $section,
			'settings'	=> "${section}_outside_color",
			'default'		=> 'rgba(0, 0, 0, 0)',
			'choices'		=> array(
				'alpha'							=> true,
			),
			'active_callback'	=> array(
				array(
					'setting'					=> $type,
					'operator'				=> '!=',
					'value'						=> 'none',
				),
			),
			'transport'	=> 'auto',
			'output'		=> array(
				array(
					'element'			=> $args['outside_output'],
					'property'		=> 'background-color',
				),
			),
		));
	}
}

?>

<?php

function planeta_add_shape($args)
{
	$args = array_merge(array(
		'inline'					=> false,
		'height'					=> false,
		'height_output'		=> array(),
		'section'					=> '',
		'panel'						=> '',
		'outside_output'	=> '',
		'title'						=> 'Shapes',
	), $args);

	$section = $args['inline'] ? $args['section'] : $args['section'] . '_shape';
	$type = $args['inline'] ? $section . '_shape' : $section;

	if(!$args['inline'])
	{
		Kirki::add_section($section, array(
			'title' => esc_html__($args['title'], 'planeta'),
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
			'none'							=> esc_html__('None (default)', 'planeta'),
			'rounded'						=> esc_html__('Rounded', 'planeta'),
			'line-top-left'			=> esc_html__('Line Top Left', 'planeta'),
			'line-top-right'		=> esc_html__('Line Top Right', 'planeta'),
			'line-bottom-left'	=> esc_html__('Line Bottom Left', 'planeta'),
			'line-bottom-right'	=> esc_html__('Line Bottom Right', 'planeta'),
			'line-both-left'		=> esc_html__('Line Both Left', 'planeta'),
			'line-both-right'		=> esc_html__('Line Both Right', 'planeta'),
			'point-up'					=> esc_html__('Point Up', 'planeta'),
			'point-down'				=> esc_html__('Point Down', 'planeta'),
			'point-left'				=> esc_html__('Point Left', 'planeta'),
			'point-right'				=> esc_html__('Point Right', 'planeta'),
			'circle-up'					=> esc_html__('Circle Up', 'planeta'),
			'circle-down'				=> esc_html__('Circle Down', 'planeta'),
			'circle-full'				=> esc_html__('Circle Full', 'planeta'),
			'paper-top-left'		=> esc_html__('Paper Top Left', 'planeta'),
			'paper-top-right'		=> esc_html__('Paper Top Right', 'planeta'),
			'paper-bottom-left'	=> esc_html__('Paper Bottom Left', 'planeta'),
			'paper-bottom-right'	=> esc_html__('Paper Bottom Right', 'planeta'),
			'trapezoid-up'			=> esc_html__('Trapezoid Up', 'planeta'),
			'trapezoid-down'		=> esc_html__('Trapezoid Down', 'planeta'),
			'rhombus'						=> esc_html__('Rhombus', 'planeta'),
			'frame'							=> esc_html__('Frame', 'planeta'),
			'inset'							=> esc_html__('Inset', 'planeta'),
			'fancy'							=> esc_html__('Fancy (Randomly Generated)', 'planeta'),
		),
	));

	$strength = $args['inline'] ? 'Shape Strength (%)' : 'Strength (%)';
	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__($strength, 'planeta'),
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
			array(
				'setting'					=> $type,
				'operator'				=> '!=',
				'value'						=> 'fancy',
			),
		),
	));

	if(count($args['height_output']) != 0)
	{
		$height = $args['inline'] ? 'Shape Height (%)' : 'Height';

		$height_output = array();
		foreach($args['height_output'] as $arg)
		{
			$height_output[] = array(
				'element'			=> $arg,
				'property'		=> 'height',
				'units'				=> '%',
			);
		}

		Kirki::add_field('planeta_config', array(
			'type'			=> 'slider',
			'label'			=> esc_html__($height, 'planeta'),
			'section'		=> $section,
			'settings'	=> "${section}_height",
			'default'		=> 100,
			'choices'		=> array(
				'min'				=> 0,
				'max'				=> 100,
				'step'			=> 1,
			),
			'output'		=> $height_output,
		));
	}

	if($args['outside_output'] != '')
	{
		$color = $args['inline'] ? 'Shape Outside Color (%)' : 'Outside Color (%)';
		Kirki::add_field('planeta_config', array(
			'type'			=> 'color',
			'label'			=> esc_html__($color, 'planeta'),
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

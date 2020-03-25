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
				)
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

<?php

function planeta_add_section_appearance(&$index)
{
	Kirki::add_section("section_${index}_appearance", array(
		'title' => esc_html__('Appearance', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'toggle',
		'label'			=> esc_html__('Fullscreen Section', 'planeta'),
		'section'		=> "section_${index}_appearance",
		'settings'	=> "section_${index}_is_fullscreen",
		'default'		=> 'false',
		'output'		=> array(
			array(
				'element'				=> "#section_${index}",
				'property'			=> 'min-height',
				'value_pattern'	=> '100vh',
				'exclude'				=> array(false),
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Title Padding Top & Bottom (vh)', 'planeta'),
		'section'		=> "section_${index}_appearance",
		'settings'	=> "section_${index}_title_padding",
		'default'		=> 1,
		'choices'		=> array(
			'min'			=> '0',
			'max'			=> '50',
			'step'		=> '1',
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-title",
				'units'			=> 'vh',
				'property'	=> 'padding-top',
			),
			array(
				'element'		=> "#section_${index} .section-title",
				'units'			=> 'vh',
				'property'	=> 'padding-bottom',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Subtitle Padding Bottom (vh)', 'planeta'),
		'section'		=> "section_${index}_appearance",
		'settings'	=> "section_${index}_subtitle_padding",
		'default'		=> 15,
		'choices'		=> array(
			'min'			=> '0',
			'max'			=> '50',
			'step'		=> '1',
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-subtitle",
				'units'			=> 'vh',
				'property'	=> 'padding-bottom',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'						=> 'select',
		'label'						=> esc_html__('Items Type', 'planeta'),
		'section'					=> "section_${index}_appearance",
		'settings'				=> "section_${index}_card_type",
		'default'					=> 'default',
		'choices'					=> array(
			'default'							=> esc_html__('Default', 'planeta'),
			'perspective-left'		=> esc_html__('Perspective Left', 'planeta'),
			'perspective-right'		=> esc_html__('Perspective Right', 'planeta'),
			'perspective-up'			=> esc_html__('Perspective Up', 'planeta'),
			'perspective-down'		=> esc_html__('Perspective Down', 'planeta'),
			'zigzag-left'					=> esc_html__('ZigZag Left', 'planeta'),
			'zigzag-right'				=> esc_html__('ZigZag Right', 'planeta'),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'slider',
		'label'					=> esc_html__('Items Columns', 'planeta'),
		'section'				=> "section_${index}_appearance",
		'settings'			=> "section_${index}_masonry_num",
		'default'				=> '3',
		'choices'				=> array(
			'min'						=> '1',
			'max'						=> '6',
			'step'					=> '1',
		),
		'output'				=> array(
			array(
				'element'				=> array(
					"#section_${index} .card-default",
					"#section_${index} .card-perspective-left",
					"#section_${index} .card-perspective-right",
					"#section_${index} .card-perspective-up",
					"#section_${index} .card-perspective-down",
					"#section_${index} .card-zigzag-left",
					"#section_${index} .card-zigzag-right",
				),
				'property'			=> 'flex-direction',
				'value_pattern'	=> 'row',
				'media_query'		=> '@media screen and (min-width: 769px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6'),
			),
			array(
				'element'				=> "#section_${index} .card-image",
				'property'			=> 'margin-right',
				'value_pattern'	=> '2rem',
				'media_query'		=> '@media screen and (min-width: 769px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6'),
			),
			array(
				'element'				=> "#section_${index} .card-image",
				'property'			=> 'margin-down',
				'value_pattern'	=> '1rem',
				'media_query'		=> '@media screen and (max-width: 768px)',
			),
			array(
				'element'				=> "#section_${index} .card-image",
				'property'			=> 'max-width',
				'value_pattern'	=> '33%',
				'media_query'		=> '@media screen and (min-width: 769px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6'),
			),
			array(
				'element'				=> "#section_${index} .card-image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
				'media_query'		=> '@media screen and (max-width: 768px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6'),
			),
			array(
				'element'				=> "#section_${index} .card-image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
			 	'exclude'				=> array('1'),
			),
		),
	));
}

?>

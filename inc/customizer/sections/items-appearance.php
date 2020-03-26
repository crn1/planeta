<?php

require_once(get_template_directory() . '/inc/customizer/shape.php');

function planeta_add_section_items_appearance(&$index)
{
	Kirki::add_section("section_${index}_items_appearance", array(
		'title' => esc_html__('Items Appearance', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'slider',
		'label'					=> esc_html__('Items Columns', 'planeta'),
		'section'				=> "section_${index}_items_appearance",
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

	planeta_add_shape(array(
		'inline'				=> true,
		'section'				=> "section_${index}_items_appearance",
	));
}

?>

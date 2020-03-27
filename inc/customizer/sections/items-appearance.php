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
			'max'						=> '7',
			'step'					=> '1',
		),
		'output'				=> array(
			array(
				'element'				=> "#section_${index} .card",
				'property'			=> 'flex-direction',
				'value_pattern'	=> 'row',
				'media_query'		=> '@media screen and (min-width: 769px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "#section_${index} .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '33%',
				'media_query'		=> '@media screen and (min-width: 769px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "#section_${index} .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
				'media_query'		=> '@media screen and (max-width: 768px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "#section_${index} .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
			 	'exclude'				=> array('1'),
			),
			array(
				'element'				=> "#section_${index} .card > .image",
				'property'			=> 'margin-bottom',
				'value_pattern'	=> '2rem',
			 	'exclude'				=> array('1'),
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'select',
		'label'					=> esc_html__('Image Align', 'planeta'),
		'section'				=> "section_${index}_items_appearance",
		'settings'			=> "section_${index}_image_align",
		'default'				=> 'all-left',
		'choices'				=> array(
			'all-left'				=> esc_html__('All Left', 'planeta'),
			'all-right'				=> esc_html__('All Right', 'planeta'),
			'first-left'			=> esc_html__('First Left', 'planeta'),
			'first-right'			=> esc_html__('First Right', 'planeta'),
		),
		'active_callback'	=> array(
			array(
				'setting'				=> "section_${index}_masonry_num",
				'operator'			=> '==',
				'value'					=> 1,
			),
		),
	));

	planeta_add_shape(array(
		'inline'				=> true,
		'section'				=> "section_${index}_items_appearance",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Items Container Width (%)', 'planeta'),
		'section'		=> "section_${index}_items_appearance",
		'settings'	=> "section_${index}_items_container_width",
		'default'		=> 100,
		'choices'		=> array(
			'min'				=> 1,
			'max'				=> 100,
			'step'			=> 1,
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-items",
				'property'	=> 'width',
				'units'			=> '%',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Items Margin Top (vh)', 'planeta'),
		'section'		=> "section_${index}_items_appearance",
		'settings'	=> "section_${index}_items_container_margin_top",
		'default'		=> 3,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-items",
				'units'			=> 'vh',
				'property'	=> 'margin-top',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("Items Margin Bottom (vh)", 'planeta'),
		'section'		=> "section_${index}_items_appearance",
		'settings'	=> "section_${index}_container_margin_bottom",
		'default'		=> 0,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-items",
				'units'			=> 'vh',
				'property'	=> 'margin-bottom',
			),
		),
	));
}

?>

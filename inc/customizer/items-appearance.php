<?php

require_once(get_template_directory() . '/inc/customizer/shape.php');

function planeta_add_items_appearance($section)
{
	Kirki::add_section("${section}_items_appearance", array(
		'title' => esc_html__('Items Appearance', 'planeta'),
		'panel' => "${section}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'slider',
		'label'					=> esc_html__('Columns', 'planeta'),
		'section'				=> "${section}_items_appearance",
		'settings'			=> "${section}_masonry_num",
		'default'				=> '3',
		'choices'				=> array(
			'min'						=> '1',
			'max'						=> '7',
			'step'					=> '1',
		),
		'output'				=> array(
			array(
				'element'				=> "#${section} .card",
				'property'			=> 'flex-direction',
				'value_pattern'	=> 'row',
				'media_query'		=> '@media screen and (min-width: 600px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "#${section} .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '33%',
				'media_query'		=> '@media screen and (min-width: 600px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "#${section} .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
				'media_query'		=> '@media screen and (max-width: 599px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "#${section} .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
			 	'exclude'				=> array('1'),
			),
			array(
				'element'				=> "#${section} .card > .image",
				'property'			=> 'margin-bottom',
				'value_pattern'	=> '2rem',
			 	'exclude'				=> array('1'),
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'radio-buttonset',
		'label'					=> esc_html__('Image Align', 'planeta'),
		'section'				=> "${section}_items_appearance",
		'settings'			=> "${section}_image_align",
		'default'				=> 'all-left',
		'choices'				=> array(
			'all-left'				=> esc_html__('All Left', 'planeta'),
			'all-right'				=> esc_html__('All Right', 'planeta'),
			'first-left'			=> esc_html__('First Left', 'planeta'),
			'first-right'			=> esc_html__('First Right', 'planeta'),
		),
		'active_callback'	=> array(
			array(
				'setting'				=> "${section}_masonry_num",
				'operator'			=> '==',
				'value'					=> 1,
			),
		),
	));

	planeta_add_shape(array(
		'inline'				=> true,
		'section'				=> "${section}_items_appearance",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Margin Top (vh)', 'planeta'),
		'section'		=> "${section}_items_appearance",
		'settings'	=> "${section}_items_margin_top",
		'default'		=> 3,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'			=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "#${section}-items",
				'units'			=> 'vh',
				'property'	=> 'margin-top',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("Margin Bottom (vh)", 'planeta'),
		'section'		=> "${section}_items_appearance",
		'settings'	=> "${section}_items_margin_bottom",
		'default'		=> 0,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'			=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "#${section}-items",
				'units'			=> 'vh',
				'property'	=> 'margin-bottom',
			),
		),
	));
}

?>

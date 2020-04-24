<?php

function planeta_add_section_appearance($name)
{
	Kirki::add_section("${name}_appearance", array(
		'title' => esc_html__('Appearance', 'planeta'),
		'panel' => "${name}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'number',
		'label'			=> esc_html__("Container Padding", 'planeta'),
		'section'		=> "${name}_appearance",
		'settings'	=> "${name}_container_padding",
		'default'		=> 0,
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 1280,
			'step'			=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "section[data-section-id='${name}']",
				'property'	=> 'padding-left',
				'units'			=> 'px',
			),
			array(
				'element'		=> "section[data-section-id='${name}']",
				'property'	=> 'padding-right',
				'units'			=> 'px',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("Container Spacing Top", 'planeta'),
		'section'		=> "${name}_appearance",
		'settings'	=> "${name}_container_spacing_top",
		'default'		=> 0,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "section[data-section-id='${name}']",
				'units'			=> 'vh',
				'property'	=> 'padding-top',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("Container Spacing Bottom", 'planeta'),
		'section'		=> "${name}_appearance",
		'settings'	=> "${name}_container_spacing_bottom",
		'default'		=> 0,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "section[data-section-id='${name}']",
				'units'			=> 'vh',
				'property'	=> 'padding-bottom',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Container Minimum Height', 'planeta'),
		'section'		=> "${name}_appearance",
		'settings'	=> "${name}_min_height",
		'default'		=> 100,
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'				=> "section[data-section-id='${name}']",
				'property'			=> 'min-height',
				'units'					=> 'vh',
			),
		),
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 100,
			'step'			=> 1,
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Heading Spacing Between', 'planeta'),
		'section'		=> "${name}_appearance",
		'settings'	=> "${name}_items_spacing_between",
		'default'		=> 2,
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'				=> "section[data-section-id='${name}'] > .default-container > *:not(:last-child)",
				'property'			=> 'margin-bottom',
				'units'					=> 'vh',
			),
		),
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 100,
			'step'			=> 1,
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'toggle',
		'label'					=> esc_html__('Inherit Text Color', 'planeta'),
		'section'				=> "${name}_appearance",
		'settings'			=> "${name}_inherit_color",
		'default'				=> true,
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'color',
		'label'					=> esc_html__('Text Color', 'planeta'),
		'section'				=> "${name}_appearance",
		'settings'			=> "${name}_color",
		'default'				=> true,
		'choices'				=> array(
			'alpha'					=> true,
		),
		'active_callback' => array(
			array(
				'setting'			=> "${name}_inherit_color",
				'operator'		=> '==',
				'value'				=> false,
			),
		),
		'transport'			=> 'auto',
		'output'				=> array(
			array(
				'element'				=> "section[data-section-id='${name}'] > .default-container",
				'property'			=> 'color',
				'value_pattern'	=> '$ !important',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'slider',
		'label'					=> esc_html__('Items Columns', 'planeta'),
		'section'				=> "${name}_appearance",
		'settings'			=> "${name}_masonry_num",
		'default'				=> '3',
		'choices'				=> array(
			'min'						=> '1',
			'max'						=> '7',
			'step'					=> '1',
		),
		'output'				=> array(
			array(
				'element'				=> "section[data-section-id='${name}'] .card",
				'property'			=> 'flex-direction',
				'value_pattern'	=> 'row',
				'media_query'		=> '@media screen and (min-width: 600px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "section[data-section-id='${name}'] .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '33%',
				'media_query'		=> '@media screen and (min-width: 600px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "section[data-section-id='${name}'] .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
				'media_query'		=> '@media screen and (max-width: 599px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "section[data-section-id='${name}'] .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
			 	'exclude'				=> array('1'),
			),
			array(
				'element'				=> "section[data-section-id='${name}'] .card > .image",
				'property'			=> 'margin-bottom',
				'value_pattern'	=> '2rem',
			 	'exclude'				=> array('1'),
			),
			array(
				'element'				=> "section[data-section-id='${name}'] .card > .info",
				'property'			=> 'max-width',
				'value_pattern'	=> '67%',
				'media_query'		=> '@media screen and (min-width: 600px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
		),
		'active_callback'	=> array(
			array(
				'setting'				=> "${name}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'none',
			),
			array(
				'setting'				=> "${name}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'clients',
			),
			array(
				'setting'				=> "${name}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'tech',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'radio-buttonset',
		'label'					=> esc_html__('Image Align', 'planeta'),
		'section'				=> "${name}_appearance",
		'settings'			=> "${name}_image_align",
		'default'				=> 'all-left',
		'choices'				=> array(
			'all-left'				=> esc_html__('All Left', 'planeta'),
			'all-right'				=> esc_html__('All Right', 'planeta'),
			'first-left'			=> esc_html__('First Left', 'planeta'),
			'first-right'			=> esc_html__('First Right', 'planeta'),
		),
		'active_callback'	=> array(
			array(
				'setting'				=> "${name}_masonry_num",
				'operator'			=> '==',
				'value'					=> 1,
			),
			array(
				'setting'				=> "${name}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'none',
			),
			array(
				'setting'				=> "${name}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'clients',
			),
			array(
				'setting'				=> "${name}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'tech',
			),
		),
	));
}

?>

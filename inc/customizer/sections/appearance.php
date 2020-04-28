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
			'step'			=> 10,
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
		'type'					=> 'radio-buttonset',
		'label'					=> esc_html__('Number of Item Columns', 'planeta'),
		'section'				=> "${name}_appearance",
		'settings'			=> "${name}_masonry_num",
		'default'				=> '3',
		'choices'				=> array(
			'2'							=> esc_html__('Two', 'planeta'),
			'3'							=> esc_html__('Three', 'planeta'),
			'4'							=> esc_html__('Four', 'planeta'),
		),
	));
}

?>

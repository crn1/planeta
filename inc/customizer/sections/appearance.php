<?php

function planeta_add_section_appearance(&$index)
{
	Kirki::add_section("section_${index}_appearance", array(
		'title' => esc_html__('Appearance', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'number',
		'label'			=> esc_html__("Container Padding", 'planeta'),
		'section'		=> "section_${index}_appearance",
		'settings'	=> "section_${index}_container_padding",
		'default'		=> 0,
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 1280,
			'step'			=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "section[data-section-id='section_${index}']",
				'property'	=> 'padding-left',
				'units'			=> 'px',
			),
			array(
				'element'		=> "section[data-section-id='section_${index}']",
				'property'	=> 'padding-right',
				'units'			=> 'px',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("Container Spacing Top", 'planeta'),
		'section'		=> "section_${index}_appearance",
		'settings'	=> "section_${index}_container_spacing_top",
		'default'		=> 0,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "section[data-section-id='section_${index}']",
				'units'			=> 'vh',
				'property'	=> 'padding-top',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("Container Spacing Bottom", 'planeta'),
		'section'		=> "section_${index}_appearance",
		'settings'	=> "section_${index}_container_spacing_bottom",
		'default'		=> 0,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "section[data-section-id='section_${index}']",
				'units'			=> 'vh',
				'property'	=> 'padding-bottom',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Container Minimum Height', 'planeta'),
		'section'		=> "section_${index}_appearance",
		'settings'	=> "section_${index}_min_height",
		'default'		=> 100,
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'				=> "section[data-section-id='section_${index}']",
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
		'section'		=> "section_${index}_appearance",
		'settings'	=> "section_${index}_items_spacing_between",
		'default'		=> 2,
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'				=> "section[data-section-id='section_${index}'] > .default-container > *:not(:last-child)",
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
		'section'				=> "section_${index}_appearance",
		'settings'			=> "section_${index}_inherit_color",
		'default'				=> true,
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'color',
		'label'					=> esc_html__('Text Color', 'planeta'),
		'section'				=> "section_${index}_appearance",
		'settings'			=> "section_${index}_color",
		'default'				=> true,
		'choices'				=> array(
			'alpha'					=> true,
		),
		'active_callback' => array(
			array(
				'setting'			=> "section_${index}_inherit_color",
				'operator'		=> '==',
				'value'				=> false,
			),
		),
		'transport'			=> 'auto',
		'output'				=> array(
			array(
				'element'				=> "section[data-section-id='section_${index}'] > .default-container",
				'property'			=> 'color',
				'value_pattern'	=> '$ !important',
			),
		),
	));
}

?>

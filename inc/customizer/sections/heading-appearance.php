<?php

function add_heading_appearance_settings(&$index, $name_smallcaps, $name)
{
	Kirki::add_field('planeta_config', array(
		'type'			=> 'number',
		'label'			=> esc_html__("${name} Spacing Left and Right", 'planeta'),
		'section'		=> "section_${index}_heading_appearance",
		'settings'	=> "section_${index}_${name_smallcaps}_spacing_left",
		'default'		=> 0,
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 1280,
			'step'			=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-${name_smallcaps}",
				'property'	=> 'padding-left',
				'units'			=> 'px',
			),
			array(
				'element'		=> "#section_${index} .section-${name_smallcaps}",
				'property'	=> 'padding-right',
				'units'			=> 'px',
			),
		),
		'active_callback' => array(
			array(
				'setting'			=> "section_${index}_${name_smallcaps}",
				'operator'		=> '!=',
				'value'				=> '',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("${name} Spacing Bottom", 'planeta'),
		'section'		=> "section_${index}_heading_appearance",
		'settings'	=> "section_${index}_${name_smallcaps}_margin_bottom",
		'default'		=> 3,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-${name_smallcaps}",
				'units'			=> 'vh',
				'property'	=> 'margin-bottom',
			),
		),
		'active_callback' => array(
			array(
				'setting'			=> "section_${index}_${name_smallcaps}",
				'operator'		=> '!=',
				'value'				=> '',
			),
		),
	));
}

function planeta_add_section_heading_appearance(&$index)
{
	Kirki::add_section("section_${index}_heading_appearance", array(
		'title' => esc_html__('Heading Appearance', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Minimum Height', 'planeta'),
		'section'		=> "section_${index}_heading_appearance",
		'settings'	=> "section_${index}_min_height",
		'default'		=> 0,
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'				=> "#section_${index}",
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

	add_heading_appearance_settings($index, 'title', 'Title');
	add_heading_appearance_settings($index, 'subtitle', 'Subtitle');
	add_heading_appearance_settings($index, 'logo', 'Image/Logo');
}


?>

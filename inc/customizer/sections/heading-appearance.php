<?php

function add_heading_appearance_settings(&$index, $name_smallcaps, $name)
{
	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("${name} Width (%)", 'planeta'),
		'section'		=> "section_${index}_heading_appearance",
		'settings'	=> "section_${index}_${name_smallcaps}_width",
		'default'		=> 100,
		'choices'		=> array(
			'min'				=> 1,
			'max'				=> 100,
			'step'			=> 1,
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-${name_smallcaps}",
				'property'	=> 'width',
				'units'			=> '%',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("${name} Margin Top (vh)", 'planeta'),
		'section'		=> "section_${index}_heading_appearance",
		'settings'	=> "section_${index}_${name_smallcaps}_margin_top",
		'default'		=> 0,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-${name_smallcaps}",
				'units'			=> 'vh',
				'property'	=> 'margin-top',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("${name} Margin Bottom (vh)", 'planeta'),
		'section'		=> "section_${index}_heading_appearance",
		'settings'	=> "section_${index}_${name_smallcaps}_margin_bottom",
		'default'		=> 3,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-${name_smallcaps}",
				'units'			=> 'vh',
				'property'	=> 'margin-bottom',
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
		'type'			=> 'toggle',
		'label'			=> esc_html__('Fullscreen Section', 'planeta'),
		'section'		=> "section_${index}_heading_appearance",
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

	add_heading_appearance_settings($index, 'title', 'Title');
	add_heading_appearance_settings($index, 'subtitle', 'Subtitle');
	add_heading_appearance_settings($index, 'logo', 'Image/Logo');
	add_heading_appearance_settings($index, 'video', 'Video');
}


?>

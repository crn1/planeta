<?php

function planeta_add_section_align(&$index)
{
	Kirki::add_section("section_${index}_align", array(
		'title' => esc_html__('Align', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'				=> 'radio-buttonset',
		'label'				=> esc_html__('Section Title', 'planeta'),
		'section'			=> "section_${index}_align",
		'settings'		=> "section_${index}_title_align",
		'default'			=> 'left',
		'choices'			=> array(
			'left'				=> esc_html__('Left', 'planeta'),
			'center'			=> esc_html__('Center', 'planeta'),
			'right'				=> esc_html__('Right', 'planeta'),
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .section-title",
				'property'		=> 'text-align',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'				=> 'radio-buttonset',
		'label'				=> esc_html__('Section Subtitle', 'planeta'),
		'section'			=> "section_${index}_align",
		'settings'		=> "section_${index}_subtitle_align",
		'default'			=> 'left',
		'choices'			=> array(
			'left'				=> esc_html__('Left', 'planeta'),
			'center'			=> esc_html__('Center', 'planeta'),
			'right'				=> esc_html__('Right', 'planeta'),
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .section-subtitle",
				'property'		=> 'text-align',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'				=> 'radio-buttonset',
		'label'				=> esc_html__('Card Title', 'planeta'),
		'section'			=> "section_${index}_align",
		'settings'		=> "section_${index}_card_title_align",
		'default'			=> 'left',
		'choices'			=> array(
			'left'				=> esc_html__('Left', 'planeta'),
			'center'			=> esc_html__('Center', 'planeta'),
			'right'				=> esc_html__('Right', 'planeta'),
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .card-title",
				'property'		=> 'text-align',
			),
			array(
				'element'			=> "#section_${index} .card-date-span",
				'property'		=> 'text-align',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'				=> 'radio-buttonset',
		'label'				=> esc_html__('Read More Button', 'planeta'),
		'section'			=> "section_${index}_align",
		'settings'		=> "section_${index}_card_url_align",
		'default'			=> 'left',
		'choices'			=> array(
			'left'				=> esc_html__('Left', 'planeta'),
			'center'			=> esc_html__('Center', 'planeta'),
			'right'				=> esc_html__('Right', 'planeta'),
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .card-url",
				'property'		=> 'text-align',
			),
		),
	));

}

?>

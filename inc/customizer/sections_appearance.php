<?php

function planeta_add_section_appearance(&$index, &$card_types)
{
	Kirki::add_section("section_${index}_card", array(
		'title' => esc_html__("Items Appearance", 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'select',
		'label'					=> esc_html__('Items Preset', 'planeta'),
		'section'				=> "section_${index}_card",
		'settings'			=> "section_${index}_card_preset",
		'default'				=> 'none',
		'choices'				=> array(
			'none'					=> esc_html__('None (default)', 'planeta'),
			'projects'			=> esc_html__('Services/Projects', 'planeta'),
			'experience'		=> esc_html__('Experience', 'planeta'),
			'clients'				=> esc_html__('Clients', 'planeta'),
			'testimonials'	=> esc_html__('Testimonials', 'planeta'),
			'posts'					=> esc_html__('Posts', 'planeta'),
			'mini_sections'	=> esc_html__('Mini Sections', 'planeta'),
		),
	));

	foreach($card_types as $key => $types)
	{
		Kirki::add_field('planeta_config', array(
			'type'						=> 'select',
			'label'						=> esc_html__('Items Type', 'planeta'),
			'section'					=> "section_${index}_card",
			'settings'				=> "section_${index}_${key}_card_type",
			'default'					=> 'default',
			'choices'					=> $types,
			'active_callback' => array(
				array(
					'setting'					=> "section_${index}_card_preset",
					'operator'				=> '==',
					'value'						=> $key,
				),
			),
		));
	}

	Kirki::add_field('planeta_config', array(
		'type'					=> 'slider',
		'label'					=> esc_html__('Items Columns', 'planeta'),
		'section'				=> "section_${index}_card",
		'settings'			=> "section_${index}_masonry_num",
		'default'				=> 3,
		'choices'				=> array(
			'min'						=> 1,
			'max'						=> 6,
			'step'					=> 1,
		),
		'active_callback' => array(
			array(
				'setting'				=> "section_${index}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'none',
			),
			array(
				'setting'				=> "section_${index}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'experience',
			),
		),
	));
}

?>

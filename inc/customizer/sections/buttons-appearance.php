<?php

function planeta_add_section_buttons_appearance(&$index)
{
	Kirki::add_section("section_${index}_buttons_appearance", array(
		'title' => esc_html__('Buttons Appearance', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Margin Top (vh)', 'planeta'),
		'section'		=> "section_${index}_buttons_appearance",
		'settings'	=> "section_${index}_buttons_margin_top",
		'default'		=> 3,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "#section_${index}-buttons",
				'units'			=> 'vh',
				'property'	=> 'margin-top',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("Margin Bottom (vh)", 'planeta'),
		'section'		=> "section_${index}_buttons_appearance",
		'settings'	=> "section_${index}_buttons_margin_bottom",
		'default'		=> 0,
		'choices'		=> array(
			'min'			=> 0,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "#section_${index}-buttons",
				'units'			=> 'vh',
				'property'	=> 'margin-bottom',
			),
		),
	));
}

?>

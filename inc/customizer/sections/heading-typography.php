<?php

function planeta_add_section_heading_typography(&$index)
{
	Kirki::add_section("section_${index}_heading_typography", array(
		'title' => esc_html__('Heading Typography', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Title', 'planeta'),
		'section'			=> "section_${index}_heading_typography",
		'settings'    => "section_${index}_title_typo",
		'default'     => array(
			'text-transform'    => 'uppercase',
			'text-align'    		=> 'center',
			'color'    					=> '#000000',
			'font-family'    		=> 'inherit',
			'variant'        		=> 'regular',
		),
		'output'      => array(
			array(
				'element'		=> "#section_${index} .section-title",
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'slider',
		'label'       => esc_html__('Title Size (rem)', 'planeta'),
		'section'			=> "section_${index}_heading_typography",
		'settings'    => "section_${index}_title_size",
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 7,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .section-title",
				'property'		=> 'font-size',
				'units'				=> 'rem',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Subtitle', 'planeta'),
		'section'			=> "section_${index}_heading_typography",
		'settings'    => "section_${index}_subtitle_typo",
		'default'     => array(
			'text-transform'    => 'none',
			'color'    					=> '#000000',
			'font-family'    		=> 'inherit',
			'variant'        		=> 'regular',
			'text-align'    		=> 'center',
		),
		'output'      => array(
			array(
				'element'		=> "#section_${index} .section-subtitle",
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'slider',
		'label'       => esc_html__('Subtitle Size (rem)', 'planeta'),
		'section'			=> "section_${index}_heading_typography",
		'settings'    => "section_${index}_subtitle_size",
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 7,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .section-subtitle",
				'property'		=> 'font-size',
				'units'				=> 'rem',
			),
		),
	));
}

?>

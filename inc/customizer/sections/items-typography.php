<?php

function planeta_add_section_items_typography(&$index)
{
	Kirki::add_section("section_${index}_items_typography", array(
		'title' => esc_html__('Items Typography', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Primary Typography', 'planeta'),
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_primary_typo",
		'default'			=> 'none',
		'default'     => array(
			'text-transform'    => 'uppercase',
			'text-align'    		=> 'center',
			'color'    					=> '#FFFFFF',
			'font-family'    		=> 'Rubik',
			'variant'        		=> 'regular',
		),
		'output'      => array(
			array(
				'element'		=> "#section_${index} .primary-text",
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'slider',
		'label'       => esc_html__('Primary Size (rem)', 'planeta'),
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_primary_size",
		'default'     => 2,
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 7,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .primary-text",
				'units'				=> 'rem',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Secondary Typography', 'planeta'),
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_secondary_typo",
		'default'			=> 'none',
		'default'     => array(
			'text-transform'    => 'none',
			'color'    					=> '#FFFFFF',
			'font-family'    		=> 'Rubik',
			'variant'        		=> 'regular',
			'text-align'    		=> 'center',
		),
		'output'      => array(
			array(
				'element'		=> "#section_${index} .secondary-text",
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'slider',
		'label'       => esc_html__('Secondary Size (rem)', 'planeta'),
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_secondary_size",
		'default'     => 2,
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 3,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .secondary-text",
				'units'				=> 'rem',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Tertiary Typography', 'planeta'),
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_tertiary_typo",
		'default'			=> 'none',
		'default'     => array(
			'text-transform'    => 'none',
			'color'    					=> '#FFFFFF',
			'font-family'    		=> 'Rubik',
			'variant'        		=> 'regular',
			'text-align'    		=> 'center',
		),
		'output'      => array(
			array(
				'element'		=> "#section_${index} .tertiary-text",
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'slider',
		'label'       => esc_html__('Tertiary Size (rem)', 'planeta'),
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_tertiary_size",
		'default'     => 1,
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 7,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .tertiary-text",
				'units'				=> 'rem',
			),
		),
	));
}

?>

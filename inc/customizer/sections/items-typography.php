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
		'default'     => array(
			'text-transform'    => 'uppercase',
			'text-align'    		=> 'center',
			'color'    					=> '#000000',
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
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 7,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .primary-text",
				'property'		=> 'font-size',
				'units'				=> 'rem',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Secondary Typography', 'planeta'),
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_secondary_typo",
		'default'     => array(
			'text-transform'    => 'none',
			'color'    					=> '#000000',
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
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 7,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .secondary-text",
				'property'		=> 'font-size',
				'units'				=> 'rem',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'radio-buttonset',
		'label'       => esc_html__('Button Link Align', 'planeta'),
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_button_link_align",
		'default'     => 'left',
		'choices'     => array(
			'left'       => esc_html__('Left', 'planeta'),
			'center'     => esc_html__('Center', 'planeta'),
			'right'      => esc_html__('Right', 'planeta'),
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index}-items .card > .info > .url",
				'property'		=> 'text-align',
			),
		),
	));
}

?>

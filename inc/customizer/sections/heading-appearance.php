<?php

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

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Title Padding Top & Bottom (vh)', 'planeta'),
		'section'		=> "section_${index}_heading_appearance",
		'settings'	=> "section_${index}_title_padding",
		'default'		=> 1,
		'choices'		=> array(
			'min'			=> '0',
			'max'			=> '50',
			'step'		=> '1',
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-title",
				'units'			=> 'vh',
				'property'	=> 'padding-top',
			),
			array(
				'element'		=> "#section_${index} .section-title",
				'units'			=> 'vh',
				'property'	=> 'padding-bottom',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Title Typography', 'planeta'),
		'section'			=> "section_${index}_heading_appearance",
		'settings'    => "section_${index}_title_typo",
		'default'			=> 'none',
		'default'     => array(
			'text-transform'    => 'uppercase',
			'text-align'    		=> 'center',
			'color'    					=> '#FFFFFF',
			'font-family'    		=> 'Rubik',
			'variant'        		=> 'regular',
			'letter-spacing' 		=> '0',
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
		'section'			=> "section_${index}_heading_appearance",
		'settings'    => "section_${index}_title_size",
		'default'     => 2,
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 7,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .section-title",
				'units'				=> 'rem',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Subtitle Padding Bottom (vh)', 'planeta'),
		'section'		=> "section_${index}_heading_appearance",
		'settings'	=> "section_${index}_subtitle_padding",
		'default'		=> 15,
		'choices'		=> array(
			'min'			=> '0',
			'max'			=> '50',
			'step'		=> '1',
		),
		'output'		=> array(
			array(
				'element'		=> "#section_${index} .section-subtitle",
				'units'			=> 'vh',
				'property'	=> 'padding-bottom',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => esc_html__('Subtitle Typography', 'planeta'),
		'section'			=> "section_${index}_heading_appearance",
		'settings'    => "section_${index}_subtitle_typo",
		'default'			=> 'none',
		'default'     => array(
			'text-transform'    => 'none',
			'color'    					=> '#FFFFFF',
			'font-family'    		=> 'Rubik',
			'variant'        		=> 'regular',
			'letter-spacing' 		=> '0',
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
		'section'			=> "section_${index}_heading_appearance",
		'settings'    => "section_${index}_subtitle_size",
		'default'     => 2,
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 7,
			'step'				=> 0.1,
		),
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .section-subtitle",
				'units'				=> 'rem',
			),
		),
	));
}

?>

<?php

function generate_heading_typography($name, $title, &$index)
{
	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => $title,
		'section'			=> "section_${index}_heading_typography",
		'settings'    => "section_${index}_${name}_typography",
		'default'     => array(
			'text-transform'    => 'none',
			'text-align'    		=> 'center',
			'color'    					=> '#000000',
			'font-family'    		=> 'inherit',
			'variant'        		=> 'regular',
		),
		'transport'		=> 'auto',
		'output'     	 => array(
			array(
				'element'			=> "#section_${index} .section-${name}",
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'toggle',
		'label'       => esc_html__('Inherit Size', 'planeta'),
		'section'			=> "section_${index}_heading_typography",
		'settings'    => "section_${index}_${name}_inherit_size",
		'default'			=> true,
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'slider',
		'label'       => esc_html__('Size (rem)', 'planeta'),
		'section'			=> "section_${index}_heading_typography",
		'settings'    => "section_${index}_${name}_size",
		'default'			=> 1,
		'choices'     => array(
			'min'					=> 0.1,
			'max'					=> 7,
			'step'				=> 0.1,
		),
		'transport'		=> 'auto',
		'output'			=> array(
			array(
				'element'			=> "#section_${index} .section-${name}",
				'property'		=> 'font-size',
				'units'				=> 'rem',
			),
		),
		'active_callback'	=> array(
			array(
				'setting'    => "section_${index}_${name}_inherit_size",
				'operator'		=> '!=',
				'value'				=> true,
			),
		),
	));

}

function planeta_add_section_heading_typography(&$index)
{
	Kirki::add_section("section_${index}_heading_typography", array(
		'title' => esc_html__('Heading Typography', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	generate_heading_typography('title', esc_html__('Title', 'planeta'), $index);
	generate_heading_typography('subtitle', esc_html__('Subtitle', 'planeta'), $index);
}

?>

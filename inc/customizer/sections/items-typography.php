<?php

function generate_items_typography($name, $title, $inherit_label, &$index)
{
	Kirki::add_field('planeta_config', array(
		'type'        => 'toggle',
		'label'       => $inherit_label,
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_${name}_inherit_typography",
		'default'			=> true,
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'typography',
		'label'       => $title,
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_${name}_typography",
		'default'     => array(
			'text-transform' 		=> 'none',
			'text-align'    		=> 'center',
			'color'    					=> '#000000',
			'font-family'    		=> 'inherit',
			'variant'        		=> 'regular',
		),
		'output'     	=> array(
			array(
				'element'			=> "#section_${index}-items .${name}-text",
			),
		),
		'active_callback'	=> array(
			array(
				'setting'    	=> "section_${index}_${name}_inherit_typography",
				'operator'		=> '!=',
				'value'				=> true,
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'toggle',
		'label'       => esc_html__('Inherit Size', 'planeta'),
		'section'			=> "section_${index}_items_typography",
		'settings'    => "section_${index}_${name}_inherit_size",
		'default'			=> true,
	));

	Kirki::add_field('planeta_config', array(
		'type'        => 'slider',
		'label'       => esc_html__('Size (rem)', 'planeta'),
		'section'			=> "section_${index}_items_typography",
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
				'element'			=> "#section_${index}-items .${name}-text",
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

function planeta_add_section_items_typography(&$index)
{
	Kirki::add_section("section_${index}_items_typography", array(
		'title' => esc_html__('Items Typography', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	generate_items_typography(
		'primary',
		esc_html__('Primary Text', 'planeta'),
		esc_html__('Primary Text Inherit Typography', 'planeta'),
		$index);

	generate_items_typography(
		'secondary',
		esc_html__('Secondary Text', 'planeta'),
		esc_html__('Secondary Text Inherit Typography', 'planeta'),
		$index);
}

?>

<?php

function planeta_add_section_appearance($name)
{
	Kirki::add_section("${name}_appearance", array(
		'title' => esc_html__('Appearance', 'planeta'),
		'panel' => "${name}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("Container Spacing Top (rem)", 'planeta'),
		'section'		=> "${name}_appearance",
		'settings'	=> "${name}_container_spacing_top",
		'default'		=> 10,
		'choices'		=> array(
			'min'			=> 3,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "section[data-section-id='${name}']",
				'units'			=> 'rem',
				'property'	=> 'padding-top',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__("Container Spacing Bottom (rem)", 'planeta'),
		'section'		=> "${name}_appearance",
		'settings'	=> "${name}_container_spacing_bottom",
		'default'		=> 3,
		'choices'		=> array(
			'min'			=> 3,
			'max'			=> 30,
			'step'		=> 1,
		),
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'		=> "section[data-section-id='${name}']",
				'units'			=> 'rem',
				'property'	=> 'padding-bottom',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Container Minimum Height (rem)', 'planeta'),
		'section'		=> "${name}_appearance",
		'settings'	=> "${name}_min_height",
		'default'		=> 50,
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'				=> "section[data-section-id='${name}']",
				'property'			=> 'min-height',
				'units'					=> 'rem',
			),
		),
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 100,
			'step'			=> 1,
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'slider',
		'label'			=> esc_html__('Container Spacing Between (rem)', 'planeta'),
		'section'		=> "${name}_appearance",
		'settings'	=> "${name}_items_spacing_between",
		'default'		=> 5,
		'transport'	=> 'auto',
		'output'		=> array(
			array(
				'element'				=> "section[data-section-id='${name}'] > .default-container > *:not(:first-child)",
				'property'			=> 'margin-top',
				'units'					=> 'rem',
			),
		),
		'choices'		=> array(
			'min'				=> 0,
			'max'				=> 50,
			'step'			=> 0.5,
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'slider',
		'label'					=> esc_html__('Number of Items', 'planeta'),
		'section'				=> "${name}_appearance",
		'settings'			=> "${name}_number_of_items",
		'description'		=> esc_html__('Set this option to minus one to display unlimited items', 'planeta'),
		'default'				=> -1,
		'choices'				=> array(
			'min'						=> -1,
			'max'						=> 40,
			'step'					=> 1,
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'toggle',
		'label'					=> esc_html__('Inherit Text Color', 'planeta'),
		'section'				=> "${name}_appearance",
		'description'		=> esc_html__("Inherit secrtion's text color from the main typography (Customizer -> Typography -> Main Typography)", 'planeta'),
		'settings'			=> "${name}_inherit_color",
		'default'				=> true,
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'color',
		'label'					=> esc_html__('Text Color', 'planeta'),
		'section'				=> "${name}_appearance",
		'settings'			=> "${name}_color",
		'default'				=> '#FFFFFF',
		'choices'				=> array(
			'alpha'					=> true,
		),
		'active_callback' => array(
			array(
				'setting'			=> "${name}_inherit_color",
				'operator'		=> '===',
				'value'				=> false,
			),
		),
		'transport'			=> 'auto',
		'output'				=> array(
			array(
				'element'				=> array(
					"section[data-section-id='${name}'] .section-title",
					"section[data-section-id='${name}'] .section-subtitle",
					"section[data-section-id='${name}'] .section-items",
				),
				'property'			=> 'color',
				'value_pattern'	=> '$ !important',
			),
		),
	));

	if(!in_array($name, array('client', 'tech', 'contact')))
	{
		Kirki::add_field('planeta_config', array(
			'type'					=> 'radio-buttonset',
			'label'					=> esc_html__('Number of Item Columns', 'planeta'),
			'section'				=> "${name}_appearance",
			'settings'			=> "${name}_masonry_num",
			'default'				=> '2',
			'choices'				=> array(
				'2'							=> esc_html__('Two', 'planeta'),
				'3'							=> esc_html__('Three', 'planeta'),
				'4'							=> esc_html__('Four', 'planeta'),
			),
			'output'				=> array(
				array(
					'element'				=> "#${name}-items",
					'property'			=> 'grid-template-columns',
					'value_pattern'	=> "repeat(4, calc(25% - 2.5rem*3/4))",
					'media_query'		=> '@media (min-width: 1200px)',
					'exclude'				=> array('2', '3'),
				),
				array(
					'element'				=> "#${name}-items",
					'property'			=> 'grid-template-columns',
					'value_pattern'	=> "repeat(3, calc(100%/3 - 2.5rem*2/3))",
					'media_query'		=> '@media (min-width: 1200px)',
					'exclude'				=> array('2', '4'),
				),
				array(
					'element'				=> "#${name}-items",
					'property'			=> 'grid-template-columns',
					'value_pattern'	=> "repeat(2, calc(100%/2 - 2.5rem*1/2))",
					'media_query'		=> '@media (min-width: 1200px)',
					'exclude'				=> array('3', '4'),
				),
			),
		));

		Kirki::add_field('planeta_config', array(
			'type'				=> 'toggle',
			'label'				=> esc_html__('Enable Masonry', 'planeta'),
			'section'			=> "${name}_appearance",
			'settings'		=> "${name}_enable_masonry",
			'description' => esc_html__("Enabling masonry impacts the site's performance", 'planeta'),
			'default'			=> false,
		));

		Kirki::add_field('planeta_config', array(
			'type'			=> 'number',
			'label'			=> esc_html__('Additional Items Spacing (px)', 'planeta'),
			'section'		=> "${name}_appearance",
			'settings'	=> "${name}_items_additional_spacing",
			'default'		=> 300,
			'choices'		=> array(
				'min'				=> 0,
				'max'				=> 300,
				'step'			=> 10,
			),
			'transport'	=> 'auto',
			'active_callback'				=> array(
				array(
					'setting'								=> "${name}_masonry_num",
					'operator'							=> '===',
					'value'									=> '2',
				),
				array(
					'setting'								=> "${name}_enable_masonry",
					'operator'							=> '===',
					'value'									=> true,
				),
			),
			'output'		=> array(
				array(
					'element'				=> "section[data-section-id='${name}'] .card:not(:first-child)",
					'property'			=> 'padding-top',
					'units'					=> 'px',
					'media_query'		=> '@media (min-width: 900px)',
				),
			),
		));
	}
}

?>

<?php

$number_of_frontpage_sections = 15;

require_once(get_template_directory() . '/inc/customizer/misc_items_fields.php');

function supplier_add_frontpage_sections($num_sections = 15, $card_types = array(), $items_fields = array())
{
	for($index = 1; $index <= $num_sections; $index++)
	{
		Kirki::add_section("section_${index}", array(
			'title' => esc_html__("Section #${index}", 'planeta'),
			'panel' => 'sections_panel',
		));

		Kirki::add_field('planeta_config', array(
			'type'			=> 'text',
			'label'			=> esc_html__('Title', 'planeta'),
			'section'		=> "section_${index}",
			'settings'	=> "section_${index}_title",
			'default'		=> esc_html__('Section Title', 'planeta'),
		));

		Kirki::add_field('planeta_config', array(
			'type'			=> 'textarea',
			'label'			=> esc_html__('Subtitle/Content', 'planeta'),
			'section'		=> "section_${index}",
			'settings'	=> "section_${index}_subtitle",
			'default'		=> esc_html__('Lorem ipsum dolor sit amet', 'planeta'),
		));

		Kirki::add_field('planeta_config', array(
			'type'					=> 'select',
			'label'					=> esc_html__('Items Preset', 'planeta'),
			'section'				=> "section_${index}",
			'settings'			=> "section_${index}_card_preset",
			'default'				=> 'none',
			'choices'				=> array(
				'none'					=> esc_html__('None (default)', 'planeta'),
				'projects'			=> esc_html__('Projects', 'planeta'),
				'testimonials'	=> esc_html__('Testimonials', 'planeta'),
			),
		));

		foreach($card_types as $key => $types)
		{
			Kirki::add_field('planeta_config', array(
				'type'						=> 'select',
				'label'						=> esc_html__('Items Type', 'planeta'),
				'section'					=> "section_${index}",
				'settings'				=> "section_${index}_${key}_card_type",
				'default'					=> 'classic',
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
			'label'					=> esc_html__('Number of columns for items', 'planeta'),
			'section'				=> "section_${index}",
			'settings'			=> "section_${index}_masonry_num",
			'default'				=> 2,
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
			),
		));

		foreach($items_fields as $key => $items)
		{
			Kirki::add_field('planeta_config', array(
				'type'			=> 'repeater',
				'section'		=> "section_${index}",
				'settings'	=> "section_${index}_${key}_items",
				'label'			=> esc_html__('Items', 'planeta'),
				'default'		=> array(),
				'row_label'	=> array(
					'type'			=> 'field',
					'field'			=> 'title',
					'value'   	=> esc_html__('Item', 'planeta'),
				),
				'fields'		=> array_merge(array(
					'title'								=> array(
						'type'								=> 'textarea',
						'label'								=> esc_html__('Title', 'planeta'),
						'default'							=> 'Lorem ispum dolor sit amet',
					),
					'description'					=> array(
						'type'								=> 'textarea',
						'label'								=> esc_html__('Description', 'planeta'),
						'default'							=> 'Lorem ispum dolor sit amet',
					),
					'image'								=> array(
						'type'								=> 'image',
						'label'								=> esc_html__('Image', 'planeta'),
						'default'							=> 0,
					),
				), $items),
				'active_callback' => array(
					array(
						'setting'				=> "section_${index}_card_preset",
						'operator'			=> 'contains',
						'value'					=> $key,
					),
				),
			));
		}

		Kirki::add_field('planeta_config', array(
			'type'									=> 'background',
			'label'									=> esc_html__('Background', 'planeta'),
			'section'								=> "section_${index}",
			'settings'							=> "section_${index}_bg",
			'default'								=> array(
				'background-color'			=> 'rgba(0, 0, 0, 0)',
				'background-image'			=> '',
				'background-repeat'			=> 'repeat',
				'background-positio'		=> 'center center',
				'background-size'				=> 'cover',
				'background-attachment'	=> 'scroll',
			),
			'transport'							=> 'auto',
			'output'								=>	array(
				array(
					'element'								=> "#section-${index}",
				)
			),
		));

	}
}

supplier_add_frontpage_sections($number_of_frontpage_sections, $card_types, $items_fields);

?>

<?php

require_once(get_template_directory() . '/inc/customizer/misc/items-fields.php');

function planeta_add_section_items(&$index)
{
	Kirki::add_section("section_${index}_items", array(
		'title' => esc_html__("Items", 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'select',
		'label'					=> esc_html__('Items Preset', 'planeta'),
		'section'				=> "section_${index}_items",
		'settings'			=> "section_${index}_card_preset",
		'default'				=> 'none',
		'choices'				=> array(
			'none'					=> esc_html__('None (default)', 'planeta'),
			'projects'			=> esc_html__('Services/Projects/Mini Sections', 'planeta'),
			'experience'		=> esc_html__('Experience', 'planeta'),
			'clients'				=> esc_html__('Clients (only logos)', 'planeta'),
			'clients-macy'	=> esc_html__('Clients', 'planeta'),
			'testimonials'	=> esc_html__('Testimonials', 'planeta'),
			'numbers'				=> esc_html__('Numbers', 'planeta'),
			'gallery'				=> esc_html__('Gallery', 'planeta'),
			'tech'					=> esc_html__('Tech Stack (only logos)', 'planeta'),
			'tech-macy'			=> esc_html__('Tech Stack', 'planeta'),
			'posts'					=> esc_html__('Posts', 'planeta'),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'slider',
		'label'					=> esc_html__('Items Columns', 'planeta'),
		'section'				=> "section_${index}_items",
		'settings'			=> "section_${index}_masonry_num",
		'default'				=> '3',
		'choices'				=> array(
			'min'						=> '1',
			'max'						=> '7',
			'step'					=> '1',
		),
		'output'				=> array(
			array(
				'element'				=> "section[data-section-id='section_${index}'] .card",
				'property'			=> 'flex-direction',
				'value_pattern'	=> 'row',
				'media_query'		=> '@media screen and (min-width: 600px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "section[data-section-id='section_${index}'] .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '33%',
				'media_query'		=> '@media screen and (min-width: 600px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "section[data-section-id='section_${index}'] .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
				'media_query'		=> '@media screen and (max-width: 599px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
			array(
				'element'				=> "section[data-section-id='section_${index}'] .card > .image",
				'property'			=> 'max-width',
				'value_pattern'	=> '100%',
			 	'exclude'				=> array('1'),
			),
			array(
				'element'				=> "section[data-section-id='section_${index}'] .card > .image",
				'property'			=> 'margin-bottom',
				'value_pattern'	=> '2rem',
			 	'exclude'				=> array('1'),
			),
			array(
				'element'				=> "section[data-section-id='section_${index}'] .card > .info",
				'property'			=> 'max-width',
				'value_pattern'	=> '67%',
				'media_query'		=> '@media screen and (min-width: 600px)',
			 	'exclude'				=> array('2', '3', '4', '5', '6', '7'),
			),
		),
		'active_callback'	=> array(
			array(
				'setting'				=> "section_${index}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'none',
			),
			array(
				'setting'				=> "section_${index}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'clients',
			),
			array(
				'setting'				=> "section_${index}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'tech',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'					=> 'radio-buttonset',
		'label'					=> esc_html__('Image Align', 'planeta'),
		'section'				=> "section_${index}_items",
		'settings'			=> "section_${index}_image_align",
		'default'				=> 'all-left',
		'choices'				=> array(
			'all-left'				=> esc_html__('All Left', 'planeta'),
			'all-right'				=> esc_html__('All Right', 'planeta'),
			'first-left'			=> esc_html__('First Left', 'planeta'),
			'first-right'			=> esc_html__('First Right', 'planeta'),
		),
		'active_callback'	=> array(
			array(
				'setting'				=> "section_${index}_masonry_num",
				'operator'			=> '==',
				'value'					=> 1,
			),
			array(
				'setting'				=> "section_${index}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'none',
			),
			array(
				'setting'				=> "section_${index}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'clients',
			),
			array(
				'setting'				=> "section_${index}_card_preset",
				'operator'			=> '!=',
				'value'					=> 'tech',
			),
		),
	));

	foreach(ITEMS_FIELDS as $key => $items)
	{
		Kirki::add_field('planeta_config', array(
			'type'						=> 'repeater',
			'section'					=> "section_${index}_items",
			'settings'				=> "section_${index}_${key}_items",
			'label'						=> esc_html__('Items', 'planeta'),
			'default'					=> array(),
			'row_label'				=> array(
				'type'						=> 'field',
				'field'						=> 'title',
				'value'						=> esc_html__('Item', 'planeta'),
			),
			'fields'					=> $items,
			'active_callback' => array(
				array(
					'setting'				=> "section_${index}_card_preset",
					'operator'			=> 'contains',
					'value'					=> $key,
				),
			),
		));
	}
}

?>

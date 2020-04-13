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

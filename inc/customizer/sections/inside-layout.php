<?php

function planeta_add_section_layout(&$index)
{
	Kirki::add_section("section_${index}_layout", array(
		'title' => esc_html__('Layout', 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'sortable',
		'label'			=> esc_html__('Layout', 'planeta'),
		'section'		=> "section_${index}_layout",
		'settings'	=> "section_${index}_layout",
		'default'		=> array(
			'logo',
			'title',
			'subtitle',
			'items',
			'buttons',
		),
		'choices'		=> array(
			'logo'			=> esc_html__('Logo/Image', 'planeta'),
			'title'			=> esc_html__('Title', 'planeta'),
			'subtitle'	=> esc_html__('Subtitle', 'planeta'),
			'items'			=> esc_html__('Items', 'planeta'),
			'buttons'		=> esc_html__('Buttons', 'planeta'),
		),
	));
}

?>

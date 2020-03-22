<?php

function planeta_add_section_heading(&$index)
{
	Kirki::add_section("section_${index}_heading", array(
		'title' => esc_html__("Heading", 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'text',
		'label'			=> esc_html__('Name', 'planeta'),
		'section'		=> "section_${index}_heading",
		'settings'	=> "section_${index}_name",
		'default'		=> esc_html__('Section', 'planeta'),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'image',
		'label'			=> esc_html__('Image/Logo', 'planeta'),
		'section'		=> "section_${index}_heading",
		'settings'	=> "section_${index}_logo",
		'default'		=> '',
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'textarea',
		'label'			=> esc_html__('Title', 'planeta'),
		'section'		=> "section_${index}_heading",
		'settings'	=> "section_${index}_title",
		'default'		=> esc_html__('Section Title', 'planeta'),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'textarea',
		'label'			=> esc_html__('Subtitle/Content', 'planeta'),
		'section'		=> "section_${index}_heading",
		'settings'	=> "section_${index}_subtitle",
		'default'		=> esc_html__('Lorem ipsum dolor sit amet', 'planeta'),
	));
}

?>

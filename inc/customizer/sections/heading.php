<?php

function planeta_add_section_heading($name, $title)
{
	Kirki::add_section("${name}_heading", array(
		'title' => esc_html__('Heading', 'planeta'),
		'panel' => "${name}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'text',
		'label'			=> esc_html__('Name', 'planeta'),
		'section'		=> "${name}_heading",
		'settings'	=> "${name}_name",
		'default'		=> esc_html__($title, 'planeta'),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'editor',
		'label'			=> esc_html__('Title', 'planeta'),
		'section'		=> "${name}_heading",
		'settings'	=> "${name}_title",
		'default'		=> esc_html__('Section Title', 'planeta'),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'editor',
		'label'			=> esc_html__('Subtitle/Content', 'planeta'),
		'section'		=> "${name}_heading",
		'settings'	=> "${name}_subtitle",
		'default'		=> esc_html__('This is a section subtitle.', 'planeta'),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'image',
		'label'			=> esc_html__('Image/Logo', 'planeta'),
		'section'		=> "${name}_heading",
		'settings'	=> "${name}_logo",
		'default'		=> '',
	));
}

?>

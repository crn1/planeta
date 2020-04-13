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
		'partial_refresh'	=> array(
			"section_${index}_name" => array(
				'selector'							=> "#section_${index}-top-menu-item",
				'render_callback'				=> function()
				{
					return get_theme_mod("section_${index}_name");
				}
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'textarea',
		'label'			=> esc_html__('Title', 'planeta'),
		'section'		=> "section_${index}_heading",
		'settings'	=> "section_${index}_title",
		'default'		=> esc_html__('Section itle', 'planeta'),
		'partial_refresh'	=> array(
			"section_${index}_title" => array(
				'selector'				=> "#section_${index} .section-title",
				'render_callback'	=> function()
				{
					return get_theme_mod("section_${index}_title");
				}
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'textarea',
		'label'			=> esc_html__('Subtitle/Content', 'planeta'),
		'section'		=> "section_${index}_heading",
		'settings'	=> "section_${index}_subtitle",
		'default'		=> esc_html__('Lorem ipsum dolor sit amet', 'planeta'),
		'partial_refresh'	=> array(
			"section_${index}_subtitle" => array(
				'selector'				=> "#section_${index} .section-subtitle",
				'render_callback'	=> function()
				{
					return get_theme_mod("section_${index}_subtitle");
				}
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'image',
		'label'			=> esc_html__('Image/Logo', 'planeta'),
		'section'		=> "section_${index}_heading",
		'settings'	=> "section_${index}_logo",
		'default'		=> '',
	));
}

?>

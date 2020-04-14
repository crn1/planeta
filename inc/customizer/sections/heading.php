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
		'default'		=> esc_html__("Section ${index}", 'planeta'),
		'partial_refresh'	=> array(
			"section_${index}_name" => array(
				'selector'							=> ".top-menu-item > a[data-section-id='section_${index}']",
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
		'default'		=> esc_html__('Section Title', 'planeta'),
		'partial_refresh'	=> array(
			"section_${index}_title" => array(
				'selector'				=> "section[data-section-id='section_${index}'] .section-title",
				'render_callback'	=> function()
				{
					return get_theme_mod("section_${index}_title");
				}
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'			=> 'editor',
		'label'			=> esc_html__('Subtitle/Content', 'planeta'),
		'section'		=> "section_${index}_heading",
		'settings'	=> "section_${index}_subtitle",
		'default'		=> esc_html__('This is a section subtitle.', 'planeta'),
		'partial_refresh'	=> array(
			"section_${index}_subtitle" => array(
				'selector'				=> "section[data-section-id='section_${index}'] .section-subtitle",
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

<?php

function planeta_add_section_background($index)
{
	Kirki::add_section("section_${index}_background", array(
		'title' => esc_html__("Background", 'planeta'),
		'panel' => "section_${index}_panel",
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'radio-buttonset',
		'label'									=> esc_html__('Background Type', 'planeta'),
		'section'								=> "section_${index}_background",
		'settings'							=> "section_${index}_bg_type",
		'default'								=> 'image',
		'choices'								=> array(
			'image'									=> esc_html__('Image', 'planeta'),
			'video'									=> esc_html__('Video', 'planeta'),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'link',
		'label'									=> esc_html__('Video URL', 'planeta'),
		'section'								=> "section_${index}_background",
		'settings'							=> "section_${index}_video_url",
		'default'								=> '',
		'active_callback'				=> array(
			array(
				'setting'								=> "section_${index}_bg_type",
				'operator'							=> '==',
				'value'									=> 'video',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'background',
		'label'									=> esc_html__('Background', 'planeta'),
		'section'								=> "section_${index}_background",
		'settings'							=> "section_${index}_bg",
		'default'								=> array(
			'background-color'			=> 'rgba(0, 0, 0, 0)',
			'background-image'			=> '',
			'background-repeat'			=> 'repeat',
			'background-positio'		=> 'center center',
			'background-size'				=> 'cover',
			'background-attachment'	=> 'scroll',
		),
		'active_callback'				=> array(
			array(
				'setting'								=> "section_${index}_bg_type",
				'operator'							=> '==',
				'value'									=> 'image',
			),
		),
		'output'								=>	array(
			array(
				'element'								=> "#section_${index}",
			)
		),
	));
}

?>

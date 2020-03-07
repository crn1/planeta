<?php

function supplier_add_homepage_blocks_section(
	$section_name,
	$section_title,
	$num_of_instances = 1,
	$section_fields = array(),
	$items_fields = array())
{

	for($index = 1; $index <= $num_of_instances; $index++)
	{
		$suffix = '';
		if($num_of_instances > 1)
		{
			$suffix = '_' . $index;
		}

		$num_suffix = '';
		if($num_of_instances > 1)
		{
			$num_suffix = ' #' . $index;
		}

		Kirki::add_section("${section_name}${suffix}_section", array(
			'title' => esc_html__($section_title . $num_suffix, 'planeta'),
			'panel' => 'blocks_panel',
		));

		Kirki::add_field('planeta_config', array(
			'type'			=> 'text',
			'label'			=> esc_html__('Title', 'planeta'),
			'section'		=> "${section_name}${suffix}_section",
			'settings'	=> "${section_name}${suffix}_title",
			'default'		=> esc_html__('Block Title', 'planeta'),
		));

		Kirki::add_field('planeta_config', array(
			'type'			=> 'textarea',
			'label'			=> esc_html__('Subtitle/Content', 'planeta'),
			'section'		=> "${section_name}${suffix}_section",
			'settings'	=> "${section_name}${suffix}_subtitle",
			'default'		=> esc_html__('Lorem ipsum dolor sit amet', 'planeta'),
		));

		Kirki::add_field('planeta_config', array(
			'type'			=> 'radio-buttonset',
			'label'			=> esc_html__('Background Type', 'planeta'),
			'section'		=> "${section_name}${suffix}_section",
			'settings'	=> "${section_name}${suffix}_bg_type",
			'default'		=> 'static',
			'choices'		=> array(
				'static'		=> esc_html__('Static', 'planeta'),
				'video'			=> esc_html__('Video', 'planeta'),
			),
		));

		Kirki::add_field('planeta_config', array(
			'type'						=> 'link',
			'label'						=> esc_html__('Video URL', 'planeta'),
			'section'					=> "${section_name}${suffix}_section",
			'settings'				=> "${section_name}${suffix}_video",
			'default'					=> 'http://example.org/video-url',
			'active_callback'	=> array(
				array(
					'setting'				=> "${section_name}${suffix}_bg_type",
					'operator'			=> '==',
					'value'					=> 'video',
				),
			)
		));

		Kirki::add_field('planeta_config', array(
			'type'									=> 'background',
			'label'									=> esc_html__('Background', 'planeta'),
			'section'								=> "${section_name}${suffix}_section",
			'settings'							=> "${section_name}${suffix}_bg",
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
					'element'								=> ".${section_name}${suffix}-bg",
				)
			),
			'active_callback'				=> array(
				array(
					'setting'							=> "${section_name}${suffix}_bg_type",
					'operator'						=> '===',
					'value'								=> 'static',
				),
			)
		));

		foreach($section_fields as $key => $field)
		{
			Kirki::add_field('planeta_config', array_merge(
				array(
					'section'		=> "${section_name}${suffix}_section",
					'settings'	=> "${section_name}${suffix}_${key}",
				), $field
			));
		}

		if(sizeof($items_fields) > 0)
		{
			Kirki::add_field('planeta_config', array(
				'type'					=> 'slider',
				'label'					=> esc_html__('Number of columns for items', 'planeta'),
				'section'				=> "${section_name}${suffix}_section",
				'settings'			=> "${section_name}${suffix}_masonry_num",
				'default'				=> 2,
				'choices'				=> array(
					'min'						=> 1,
					'max'						=> 6,
					'step'					=> 1,
				),
			));

			Kirki::add_field('planeta_config', array(
				'type'					=> 'select',
				'label'					=> esc_html__('Items Card Type', 'planeta'),
				'section'				=> "${section_name}${suffix}_section",
				'settings'			=> "${section_name}${suffix}_card_type",
				'default'				=> 'classic',
				'choices'				=> array(
					'classic'					=> esc_html__('Classic (default)', 'planeta'),
					'3d'							=> esc_html__('3D', 'planeta'),
					'3d-parallax'			=> esc_html__('3D Parallax', 'planeta'),
				),
			));

			Kirki::add_field('planeta_config', array(
				'type'			=> 'repeater',
				'section'		=> "${section_name}${suffix}_section",
				'settings'	=> "${section_name}${suffix}_items",
				'label'			=> esc_html__('Items', 'planeta'),
				'row_label'	=> array(
					'type'			=> 'field',
					'field'			=> 'title',
					'value'   	=> esc_html__('Item', 'planeta'),
				),
				'default'		=> array(),
				'fields'		=> $items_fields,
			));
		}
	}

}

?>

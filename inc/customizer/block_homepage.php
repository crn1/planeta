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

		Kirki::add_section("${section_name}_section${suffix}", array(
			'title' => esc_html__($section_title . $num_suffix, 'kirki'),
			'panel' => 'blocks_panel',
		));

		Kirki::add_field('kirki_config', array(
			'type'			=> 'text',
			'label'			=> esc_html__('Title', 'kirki'),
			'section'		=> "${section_name}_section${suffix}",
			'settings'	=> "${section_name}_title${suffix}",
			'default'		=> esc_html__('Block Title', 'kirki'),
		));

		Kirki::add_field('kirki_config', array(
			'type'			=> 'toggle',
			'label'			=> esc_html__('Fullscreen Title', 'kirki'),
			'section'		=> "${section_name}_section${suffix}",
			'settings'	=> "${section_name}_is_fullscreen${suffix}",
			'default'		=> true,
		));

		Kirki::add_field('kirki_config', array(
			'type'			=> 'slider',
			'label'			=> esc_html__('Title Padding Down', 'kirki'),
			'section'		=> "${section_name}_section${suffix}",
			'settings'	=> "${section_name}_title_padding_down${suffix}",
			'default'		=> 5,
			'choices'		=> array(
				'min'			=> 0,
				'max'			=> 100,
				'step'		=> 1,
			),
			'active_callback' => array(
				array(
					'setting'		=> "${section_name}_is_fullscreen${suffix}",
					'operator'	=> '===',
					'value'			=> false,
				),
			)
		));

		Kirki::add_field('kirki_config', array(
			'type'			=> 'editor',
			'label'			=> esc_html__('Subtitle/Content', 'kirki'),
			'section'		=> "${section_name}_section${suffix}",
			'settings'	=> "${section_name}_subtitle${suffix}",
			'default'		=> esc_html__('Lorem ipsum dolor sit amet', 'kirki'),
		));

		Kirki::add_field('kirki_config', array(
			'type'			=> 'radio-buttonset',
			'label'			=> esc_html__('Background Type', 'kirki'),
			'section'		=> "${section_name}_section${suffix}",
			'settings'	=> "${section_name}_bg_type${suffix}",
			'default'		=> 'static',
			'choices'		=> array(
				'static'		=> esc_html__('Static', 'kirki'),
				'video'			=> esc_html__('Video', 'kirki'),
			),
		));

		Kirki::add_field('kirki_config', array(
			'type'						=> 'link',
			'label'						=> esc_html__('Video URL', 'kirki'),
			'section'					=> "${section_name}_section${suffix}",
			'settings'				=> "${section_name}_bg_video${suffix}",
			'default'					=> 'http://example.org/video-url',
			'active_callback'	=> array(
				array(
					'setting'				=> "${section_name}_bg_type${suffix}",
					'operator'			=> '==',
					'value'					=> 'video',
				),
			)
		));

		Kirki::add_field('kirki_config', array(
			'type'									=> 'background',
			'label'									=> esc_html__('Background', 'kirki'),
			'section'								=> "${section_name}_section${suffix}",
			'settings'							=> "${section_name}_bg${suffix}",
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
					'element'								=> "#${section_name}-bg",
				)
			),
			'active_callback'				=> array(
				array(
					'setting'							=> "${section_name}_bg_type${suffix}",
					'operator'						=> '===',
					'value'								=> 'static',
				),
			)
		));

		foreach($section_fields as $key => $field)
		{
			Kirki::add_field('kirki_config', array_merge(
				array(
					'section'		=> "${section_name}_section${suffix}",
					'settings'	=> "${section_name}_${key}${suffix}",
				), $field
			));
		}

		if(sizeof($items_fields) > 0)
		{
			Kirki::add_field('kirki_config', array(
				'type'			=> 'repeater',
				'section'		=> "${section_name}_section${suffix}",
				'settings'	=> "${section_name}_items${suffix}",
				'label'			=> esc_html__('Items', 'kirki'),
				'row_label'	=> array(
					'type'			=> 'field',
					'field'			=> 'title',
					'value'   	=> esc_html__('Item', 'kirki'),
				),
				'default'		=> array(),
				'fields'		=> $items_fields,
			));
		}
	}

}

?>

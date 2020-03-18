<?php

function planeta_add_background($section, $panel, $bg_output)
{
	Kirki::add_section("${section}_background", array(
		'title' => esc_html__("Background", 'planeta'),
		'panel' => $panel,
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'radio-buttonset',
		'label'									=> esc_html__('Background Type', 'planeta'),
		'section'								=> "${section}_background",
		'settings'							=> "${section}_bg_type",
		'default'								=> 'static',
		'choices'								=> array(
			'static'								=> esc_html__('Static', 'planeta'),
			'video'									=> esc_html__('Video', 'planeta'),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'link',
		'label'									=> esc_html__('Video URL (MP4)', 'planeta'),
		'section'								=> "${section}_background",
		'settings'							=> "${section}_video_url_mp4",
		'default'								=> '',
		'active_callback'				=> array(
			array(
				'setting'								=> "${section}_bg_type",
				'operator'							=> '==',
				'value'									=> 'video',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'link',
		'label'									=> esc_html__('Video URL (WebM)', 'planeta'),
		'section'								=> "${section}_background",
		'settings'							=> "${section}_video_url_webm",
		'default'								=> '',
		'active_callback'				=> array(
			array(
				'setting'								=> "${section}_bg_type",
				'operator'							=> '==',
				'value'									=> 'video',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'link',
		'label'									=> esc_html__('Video URL (Ogg)', 'planeta'),
		'section'								=> "${section}_background",
		'settings'							=> "${section}_video_url_ogg",
		'default'								=> '',
		'active_callback'				=> array(
			array(
				'setting'								=> "${section}_bg_type",
				'operator'							=> '==',
				'value'									=> 'video',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'image',
		'label'									=> esc_html__('Fallback Image', 'planeta'),
		'section'								=> "${section}_background",
		'settings'							=> "${section}_fallback_image_url",
		'default'								=> '',
		'active_callback'				=> array(
			array(
				'setting'								=> "${section}_bg_type",
				'operator'							=> '==',
				'value'									=> 'video',
			),
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'color',
		'label'									=> esc_html__('Color Overlay', 'planeta'),
		'section'								=> "${section}_background",
		'settings'							=> "${section}_video_overlay",
		'default'								=> 'rgba(0, 0, 0, 0)',
		'choices'								=> array(
			'alpha'									=> true,
		),
		'active_callback'				=> array(
			array(
				'setting'								=> "${section}_bg_type",
				'operator'							=> '==',
				'value'									=> 'video',
			),
		),
		'output'								=>	array(
			array(
				'element'								=> "#${section}-video-overlay",
				'property'							=> 'background-color',
			)
		),
	));

	Kirki::add_field('planeta_config', array(
		'type'									=> 'background',
		'label'									=> esc_html__('Background', 'planeta'),
		'section'								=> "${section}_background",
		'settings'							=> "${section}_bg",
		'default'								=> array(
			'background-color'			=> '#212121',
			'background-image'			=> '',
			'background-repeat'			=> 'repeat',
			'background-positio'		=> 'center center',
			'background-size'				=> 'cover',
			'background-attachment'	=> 'scroll',
		),
		'active_callback'				=> array(
			array(
				'setting'								=> "${section}_bg_type",
				'operator'							=> '==',
				'value'									=> 'static',
			),
		),
		'output'								=>	array(
			array(
				'element'								=> $bg_output,
			)
		),
	));

}

?>
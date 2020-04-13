<?php

Kirki::add_panel('related_posts_panel', array(
	'title'	=> esc_html__('Related Posts', 'planeta'),
	'panel'	=> 'advanced_panel',
));

Kirki::add_section('related_posts_general', array(
	'title'	=> esc_html__('General', 'planeta'),
	'panel'	=> 'related_posts_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'related_posts_enable',
	'label'						=> esc_html__('Enable Related Posts', 'planeta'),
	'section'					=> 'related_posts_general',
	'default'					=> false,
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> 'related_posts_title',
	'label'						=> esc_html__('Title', 'planeta'),
	'section'					=> 'related_posts_general',
	'default'					=> 'Related Posts',
	'active_callback'	=> array(
		array(
			'setting'				=> 'related_posts_enable',
			'operator'			=> '==',
			'value'					=> true,
		),
	),
	'partial_refresh'	=> array(
		'related_posts_title'	=> array(
			'selector'						=> '#not-found-container > .page-title',
			'render_callback'			=> function()
			{
				return get_theme_mod('related_posts_title', 'Related Posts');
			}
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'related_posts_number',
	'label'						=> esc_html__('Maximum Posts', 'planeta'),
	'section'					=> 'related_posts_general',
	'default'					=> 4,
	'choices'					=> array(
		'min'							=> 1,
		'max'							=> 21,
		'step'						=> 1,
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'related_posts_enable',
			'operator'			=> '==',
			'value'					=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Items Columns', 'planeta'),
	'section'				=> 'related_posts_general',
	'settings'			=> 'related_posts_masonry_num',
	'default'				=> '3',
	'choices'				=> array(
		'min'						=> '1',
		'max'						=> '7',
		'step'					=> '1',
	),
	'output'				=> array(
		array(
			'element'				=> "#related_posts .card",
			'property'			=> 'flex-direction',
			'value_pattern'	=> 'row',
			'media_query'		=> '@media screen and (min-width: 600px)',
			'exclude'				=> array('2', '3', '4', '5', '6', '7'),
		),
		array(
			'element'				=> "#related_posts .card > .image",
			'property'			=> 'max-width',
			'value_pattern'	=> '33%',
			'media_query'		=> '@media screen and (min-width: 600px)',
			'exclude'				=> array('2', '3', '4', '5', '6', '7'),
		),
		array(
			'element'				=> "#related_posts .card > .image",
			'property'			=> 'max-width',
			'value_pattern'	=> '100%',
			'media_query'		=> '@media screen and (max-width: 599px)',
			'exclude'				=> array('2', '3', '4', '5', '6', '7'),
		),
		array(
			'element'				=> "#related_posts .card > .image",
			'property'			=> 'max-width',
			'value_pattern'	=> '100%',
			'exclude'				=> array('1'),
		),
		array(
			'element'				=> "#related_posts .card > .image",
			'property'			=> 'margin-bottom',
			'value_pattern'	=> '2rem',
			'exclude'				=> array('1'),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'radio-buttonset',
	'label'					=> esc_html__('Images Align', 'planeta'),
	'section'				=> 'related_posts_general',
	'settings'			=> 'related_posts_image_align',
	'default'				=> 'all-left',
	'choices'				=> array(
		'all-left'				=> esc_html__('All Left', 'planeta'),
		'all-right'				=> esc_html__('All Right', 'planeta'),
		'first-left'			=> esc_html__('First Left', 'planeta'),
		'first-right'			=> esc_html__('First Right', 'planeta'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'related_posts_masonry_num',
			'operator'			=> '==',
			'value'					=> 1,
		),
	),
));

require_once(get_template_directory() . '/inc/customizer/video-background.php');
planeta_add_video_background(
	$section = 'related_posts',
	$panel = 'related_posts_panel',
	$bg_output = '#related_posts-overlay'
);

?>

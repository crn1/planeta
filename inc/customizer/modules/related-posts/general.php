<?php

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
	'label'						=> esc_html__('Section Title', 'planeta'),
	'section'					=> 'related_posts_general',
	'default'					=> 'Related Posts',
	'active_callback'	=> array(
		array(
			'setting'				=> 'related_posts_enable',
			'operator'			=> '==',
			'value'					=> true,
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
?>
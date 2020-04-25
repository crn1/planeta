<?php

Kirki::add_section('related_posts_section', array(
	'title'	=> esc_html__('Related Posts', 'planeta'),
	'panel'	=> 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'related_posts_enable',
	'label'						=> esc_html__('Enable Related Posts', 'planeta'),
	'section'					=> 'related_posts_section',
	'default'					=> false,
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> 'related_posts_title',
	'label'						=> esc_html__('Title', 'planeta'),
	'section'					=> 'related_posts_section',
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
	'section'					=> 'related_posts_section',
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

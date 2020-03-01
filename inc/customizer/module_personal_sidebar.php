<?php

Kirki::add_section('personal_sidebar_section', array(
	'title'	=> esc_html__('Personal Sidebar', 'kirki'),
	'panel'	=> 'modules_panel',
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'toggle',
	'settings'		=> 'enable_personal_sidebar',
	'label'				=> esc_html__('Enable Personal Sidebar', 'kirki'),
	'section'			=> 'personal_sidebar_section',
	'default'			=> 0,
));

Kirki::add_field('kirki_config', array(
	'type' 									=> 'background',
	'settings'							=> 'personal_sidebar_background',
	'label'									=> esc_html__('Background', 'kirki'),
	'section'								=> 'personal_sidebar_section',
	'default'     					=> array(
		'background-color'			=> '#212121',
		'background-image'			=> '',
		'background-repeat'			=> 'repeat',
		'background-position'		=> 'center center',
		'background-size'				=> 'cover',
		'background-attachment'	=> 'scroll',
	),
	'output'								=> array(
		array(
			'element'								=> '.personal-sidebar-background',
		),
	),
	'active_callback'	=> array(
		array(
			'setting'			=> 'enable_personal_sidebar',
			'operator'		=> '==',
			'value'				=> '1',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'radio-buttonset',
	'settings'		=> 'personal_sidebar_align',
	'label'				=> esc_html__('Align', 'kirki'),
	'section'			=> 'personal_sidebar_section',
	'default'			=> 'left',
	'choices'			=> array(
		'left'				=> esc_html__('Left', 'kirki'),
		'right'				=> esc_html__('Right', 'kirki'),
	),
	'active_callback'	=> array(
		array(
			'setting'			=> 'enable_personal_sidebar',
			'operator'		=> '==',
			'value'				=> '1',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'sortable',
	'settings'				=> 'personal_sidebar_layout',
	'label'						=> esc_html__('Layout', 'kirki'),
	'section'					=> 'personal_sidebar_section',
	'default'					=> array(
		'image',
		'title',
		'subtitle',
		'content',
		'social',
	),
	'choices'					=> array(
		'image'						=> esc_html__('Image', 'kirki'),
		'title'						=> esc_html__('Title/Name', 'kirki'),
		'subtitle'				=> esc_html__('Subtitle/Profession', 'kirki'),
		'content'					=> esc_html__('Content', 'kirki'),
		'social'					=> esc_html__('Social Media', 'kirki'),
		'top_menu'				=> esc_html__('Top Menu', 'kirki'),
		'footer'					=> esc_html__('Footer', 'kirki'),
	),
	'active_callback'	=> array(
		array(
			'setting'			=> 'enable_personal_sidebar',
			'operator'		=> '==',
			'value'				=> '1',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'image',
	'settings'		=> 'personal_sidebar_image',
	'label'				=> esc_html__('Image', 'kirki'),
	'section'			=> 'personal_sidebar_section',
	'default'			=> '',
	'active_callback'	=> array(
		array(
			'setting'			=> 'enable_personal_sidebar',
			'operator'		=> '==',
			'value'				=> '1',
		),
		array(
			'setting'			=> 'personal_sidebar_layout',
			'operator'		=> 'contains',
			'value'				=> 'image',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'text',
	'settings'		=> 'personal_sidebar_title',
	'label'				=> esc_html__('Title/Name', 'kirki'),
	'section'			=> 'personal_sidebar_section',
	'default'			=> 'John Doe',
	'active_callback'	=> array(
		array(
			'setting'			=> 'enable_personal_sidebar',
			'operator'		=> '==',
			'value'				=> '1',
		),
		array(
			'setting'			=> 'personal_sidebar_layout',
			'operator'		=> 'contains',
			'value'				=> 'title',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'text',
	'settings'		=> 'personal_sidebar_subtitle',
	'label'				=> esc_html__('Subiitle/Profession', 'kirki'),
	'section'			=> 'personal_sidebar_section',
	'default'			=> 'Frontend Developer',
	'active_callback'	=> array(
		array(
			'setting'			=> 'enable_personal_sidebar',
			'operator'		=> '==',
			'value'				=> '1',
		),
		array(
			'setting'			=> 'personal_sidebar_layout',
			'operator'		=> 'contains',
			'value'				=> 'subtitle',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 				=> 'editor',
	'settings'		=> 'personal_sidebar_content',
	'label'				=> esc_html__('Content', 'kirki'),
	'section'			=> 'personal_sidebar_section',
	'default'			=> 'Lorem ipsum dolor sit amet',
	'active_callback'	=> array(
		array(
			'setting'			=> 'enable_personal_sidebar',
			'operator'		=> '==',
			'value'				=> '1',
		),
		array(
			'setting'			=> 'personal_sidebar_layout',
			'operator'		=> 'contains',
			'value'				=> 'content',
		),
	),
));

?>

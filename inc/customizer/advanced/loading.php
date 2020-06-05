<?php

Kirki::add_section('loading_section', array(
	'title'				=> esc_html__('Loading Page', 'planeta'),
	'panel'				=> 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'toggle',
	'settings'		=> 'loading_enable',
	'section'			=> 'loading_section',
	'label'				=> esc_html__('Enable Loading Page', 'planeta'),
	'description'	=> esc_html__('The loading page is displayed before site content and it will fade away when content is ready. Note that even the loading page impacts site performance. Enable this option only if you really need to.', 'planeta'),
	'default'			=> false,
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'image',
	'settings'		=> 'loading_logo',
	'label'				=> esc_html__('Image/Logo', 'planeta'),
	'section'			=> 'loading_section',
	'default'			=> '',
	'description'	=> esc_html__('This image or logo will be shown center of the loading screen', 'planeta'),
	'choices'     		=> array(
		'save_as' 				=> 'id',
	),
	'active_callback'	=> array(
		array(
			'setting'			=> 'loading_enable',
			'operator'		=> '===',
			'value'				=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'image',
	'settings'	=> 'loading_animation',
	'label'			=> esc_html__('Animation', 'planeta'),
	'tooltip'		=> esc_html__("This option doesn't differ from the above option in terms of functionality. You can upload animated PNG to make the loading screen more dynamic. Please read the documentation for more information.", 'planeta'),
	'section'		=> 'loading_section',
	'default'		=> '',
	'choices'     		=> array(
		'save_as' 				=> 'id',
	),
	'active_callback'	=> array(
		array(
			'setting'			=> 'loading_enable',
			'operator'		=> '===',
			'value'				=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'textarea',
	'settings'		=> 'loading_text',
	'label'				=> esc_html__('Text', 'planeta'),
	'section'			=> 'loading_section',
	'tooltip'			=> esc_html__('This text will be displayed below the logo and animation. The typography of this text will be inherited from the main one (Customizer -> Typography -> Main Typography)', 'planeta'),
	'default'		=> '',
	'active_callback'	=> array(
		array(
			'setting'			=> 'loading_enable',
			'operator'		=> '===',
			'value'				=> true,
		),
	),
	'partial_refresh'	=> array(
		'loading_text'		=> array(
			'selector'				=> '#loading-container > .text',
			'render_callback'	=> function()
			{
				return get_theme_mod('loading_text', '');
			}
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'						=> 'color',
	'settings'				=> 'loading_background',
	'label'						=> esc_html__('Background Color', 'planeta'),
	'section'					=> 'loading_section',
	'default'					=> '#212121',
	'active_callback'	=> array(
		array(
			'setting'					=> 'loading_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
	'output'					=> array(
		array(
			'element'						=> '#loading-container',
			'property'					=> 'background-color',
		),
	),
));

?>

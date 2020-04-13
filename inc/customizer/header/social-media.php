<?php

require_once(get_template_directory() . '/inc/customizer/misc/social.php');

Kirki::add_section('social_menu_section', array(
	'title'	=> esc_html__('Social Media', 'planeta'),
	'panel'	=> 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'repeater',
	'settings'				=> 'social_menu_items',
	'label'						=> esc_html__('Items', 'planeta'),
	'section'					=> 'social_menu_section',
	'default'					=> array(),
	'row_label' 			=> array(
		'type'  					=> 'field',
		'field' 					=> 'service',
	),
	'fields'					=> array(
		'url'							=> array(
			'type'						=> 'link',
			'default'					=> 'https://www.example.org',
			'label'						=> esc_html__('URL', 'planeta'),
		),
		'service'					=> array(
			'type'						=> 'select',
			'default'					=> 'linkedin',
			'label'						=> esc_html__('Service', 'planeta'),
			'choices'					=> $social_list,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'social_menu_header',
	'label'						=> esc_html__('Show in Header', 'planeta'),
	'section'					=> 'social_menu_section',
	'default'					=> false,
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'social_menu_footer',
	'label'						=> esc_html__('Show in Footer', 'planeta'),
	'section'					=> 'social_menu_section',
	'default'					=> true,
));

?>

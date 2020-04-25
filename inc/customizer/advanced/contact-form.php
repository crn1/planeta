<?php

Kirki::add_section('contact_form_section', array(
	'title'       => esc_html__('Contact Form', 'planeta' ),
	'panel'       => 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> 'contact_form_email',
	'section'					=> 'contact_form_section',
	'label'						=> esc_html__('Reception Email', 'planeta'),
	'default'					=> get_bloginfo('admin_email'),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> 'contact_form_prefix',
	'section'					=> 'contact_form_section',
	'label'						=> esc_html__('Subject Prefix', 'planeta'),
	'default'					=> '',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> 'contact_form_suffix',
	'section'					=> 'contact_form_section',
	'label'						=> esc_html__('Subject Suffix', 'planeta'),
	'default'					=> '',
));

?>

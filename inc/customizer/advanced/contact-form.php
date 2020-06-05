<?php

Kirki::add_section('contact_form_section', array(
	'title'       => esc_html__('Contact Form', 'planeta' ),
	'panel'       => 'advanced_panel',
	'description'	=> esc_html__("This theme ships with an integrated contact form functionality. If displayed on the front page, visitors can send you messages and you will receive them by email. Don't forget to enable the display of contact form in Customizer -> Frontpage Layout.", 'planeta'),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> 'contact_form_email',
	'description'			=> esc_html__('You will receive messages on this email', 'planeta'),
	'section'					=> 'contact_form_section',
	'label'						=> esc_html__('Reception Email', 'planeta'),
	'default'					=> get_bloginfo('admin_email'),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> 'contact_form_prefix',
	'section'					=> 'contact_form_section',
	'label'						=> esc_html__('Subject Prefix', 'planeta'),
	'description'			=> esc_html__('This text will be inserted before mail subject', 'planeta'),
	'default'					=> '',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'text',
	'settings'				=> 'contact_form_suffix',
	'section'					=> 'contact_form_section',
	'label'						=> esc_html__('Subject Suffix', 'planeta'),
	'description'			=> esc_html__('This text will be inserted after mail subject', 'planeta'),
	'default'					=> '',
));

?>

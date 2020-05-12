<?php

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Content Preset/Layout', 'planeta'),
	'settings'			=> 'content_preset',
	'section'				=> 'presets_section',
	'default'				=> 'none',
	'choices'				=> array(
		'none'					=> esc_html__('None (default)', 'planeta'),
		'informal'			=> esc_html__('Informal', 'planeta'),
	),
	'preset'      	=> array(
		'informal'    		=> array(
			'settings' 				=> array(
				//Section Layouts
				'sections_layout'												=> array(
					'client',
					'generic-1',
					'project',
					'testimonial',
					'number',
					'service',
					'tech',
					'team',
					'contact',
					'post',
				),
				'client_title'													=> get_theme_mod('client_title', esc_html__('As adults, we are told not to ask questions. Here we can.', 'planeta')),
				'client_subtitle'												=> get_theme_mod('client_subtitle', ''),
				'client_items_spacing_between'					=> 15,
				'client_name'														=> '',
				'generic-1_title'												=> get_theme_mod('generic-1_title', esc_html__('We are Tilda Center', 'planeta')),
				'generic-1_subtitle'										=> get_theme_mod('generic-1_subtitle', esc_html__('We are a hackerspace from Novi Sad, Serbia. Simply put - if you are a hacker, troll, alien, or just normal human tying to learn new things, this is the place for you!', 'planeta')),
				'generic-1_name'												=> get_theme_mod('generic-1_name', esc_html__('Who We Are?', 'planeta')),
				'project_title'													=> get_theme_mod('project_title', esc_html__('Some things we did...', 'planeta')),
				'project_subtitle'											=> get_theme_mod('project_subtitle', ''),
				'testimonial_title'											=> get_theme_mod('testimonial_title', esc_html__('What they have said?', 'planeta')),
				'testimonial_subtitle'									=> get_theme_mod('testimonial_subtitle', ''),
				'testimonial_name'											=> get_theme_mod('testimonial_name', esc_html__('Testimonials', 'planeta')),
				'number_title'													=> get_theme_mod('number_title', esc_html__('Not to brag, but...', 'planeta')),
				'number_subtitle'												=> get_theme_mod('number_subtitle', ''),
				'number_name'														=> get_theme_mod('number_name', esc_html__('Numbers', 'planeta')),
				'service_title'													=> get_theme_mod('service_title', esc_html__('Some services that you might find useful...', 'planeta')),
				'service_subtitle'											=> get_theme_mod('service_subtitle', ''),
				'service_name'													=> get_theme_mod('service_name', esc_html__('Services', 'planeta')),
				'tech_title'														=> get_theme_mod('tech_title', esc_html__('Recognize any of these?', 'planeta')),
				'tech_subtitle'													=> get_theme_mod('tech_subtitle', esc_html__('We use them all!', 'planeta')),
				'tech_layout'														=> array(
					'title',
					'items',
					'subtitle',
				),
				'tech_name'															=> get_theme_mod('tech_name', esc_html__('Tech Stack', 'planeta')),
				'team_title'														=> get_theme_mod('team_title', esc_html__('The Crazy Ones', 'planeta')),
				'team_subtitle'													=> get_theme_mod('team_subtitle', ''),
				'team_name'															=> get_theme_mod('team_name', esc_html__('Team', 'planeta')),
				'contact_title'													=> get_theme_mod('contact_title', esc_html__('Drop us a message', 'planeta')),
				'contact_subtitle'											=> get_theme_mod('contact_subtitle', ''),
				'contact_name'													=> get_theme_mod('contact_name', esc_html__('Contact Us', 'planeta')),
				'post_title'														=> get_theme_mod('post_title', esc_html__('What we wrote lately?', 'planeta')),
				'post_subtitle'													=> get_theme_mod('post_subtitle', ''),
				'post_name'															=> get_theme_mod('post_name', esc_html__('Posts', 'planeta')),

			),
		),
	),
));

?>

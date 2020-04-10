<?php

Kirki::add_panel('footer_panel', array(
	'title'       => esc_html__('Footer', 'planeta'),
	'panel'       => 'modules_panel',
));

Kirki::add_section('footer_content', array(
	'title'       => esc_html__('Content', 'planeta'),
	'panel'       => 'footer_panel',
));

Kirki::add_field('planeta_config', array(
	'type'					=> 'slider',
	'label'					=> esc_html__('Extended Footer Columns', 'planeta'),
	'section'				=> "footer_content",
	'settings'			=> "extended_footer_masonry_num",
	'default'				=> '3',
	'choices'				=> array(
		'min'						=> '1',
		'max'						=> '7',
		'step'					=> '1',
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'textarea',
	'settings'				=> 'footer_copyright',
	'label'						=> esc_html__('Notice', 'planeta'),
	'section'					=> 'footer_content',
	'default'					=> 'Copyright (C) 2020 Lorem Ipsum. All rights reserved.',
	'partial_refresh'	=> array(
		'footer_content'	=> array(
			'selector'				=> '#footer-notice > small',
			'render_callback' => function() {
				return get_theme_mod('footer_copyright');
			},
		),
	),
));

require_once(get_template_directory() . '/inc/customizer/video-background.php');
planeta_add_video_background(
	$section = 'footer',
	$panel = 'footer_panel',
	$bg_output = '#main-footer-overlay'
);

?>

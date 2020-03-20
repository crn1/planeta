<?php

Kirki::add_section('footer_content', array(
	'title'       => esc_html__('Content', 'planeta' ),
	'panel'       => 'footer_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'textarea',
	'settings'				=> 'footer_copyright',
	'label'						=> esc_html__('Notice', 'planeta'),
	'section'					=> 'footer_content',
	'default'					=> 'Copyright (C) 2020 Lorem Ipsum. All rights reserved.',
));

?>

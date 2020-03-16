<?php

Kirki::add_section('blog_section', array(
	'title'	=> esc_html__('Blog', 'planeta'),
	'panel'	=> 'modules_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'blog_enable_search',
	'label'						=> esc_html__('Enable Search', 'planeta'),
	'section'					=> 'blog_section',
	'default'					=> '1',
));

?>

<?php

Kirki::add_section('blog_section', array(
	'title'	=> esc_html__('Blog', 'kirki'),
	'panel'	=> 'modules_panel',
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'blog_enable_search',
	'label'						=> esc_html__('Enable Search', 'kirki'),
	'section'					=> 'blog_section',
	'default'					=> '1',
));

?>

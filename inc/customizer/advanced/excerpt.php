<?php

Kirki::add_section('excerpt_section', array(
	'title'			=> esc_html__('Excerpt', 'planeta'),
	'panel'			=> 'advanced_panel',
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'slider',
	'settings'		=> 'excerpt_length',
	'section'			=> 'excerpt_section',
	'label'				=> esc_html__('Excerpt Length', 'planeta'),
	'description'	=> esc_html__('Note that excerpt length also applies to a description of projects which, if enabled, are displayed on the frontpage.', 'planeta'),
	'tooltip'			=> esc_html__('If for some reason excerpt is not displayed on frontpage, try to set the excerpt manually in the post/project editor.', 'planeta'),
	'default'			=> 25,
	'choices'			=> array(
		'min'					=> 0,
		'max'					=> 100,
		'step'				=> 1,
	),
));

?>

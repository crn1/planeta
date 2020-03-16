<?php

Kirki::add_section('sections_layout', array(
	'title'       => esc_html__('Frontpage Layout', 'planeta'),
	'panel'       => 'sections_panel',
));

Kirki::add_field('planeta_config', array(
	'type'				=> 'sortable',
	'label'       => esc_html__('Layout', 'planeta'),
	'section'			=> 'sections_layout',
	'settings'		=> 'sections_layout',
	'default'			=> array(),
	'choices'			=> array(
		'section_1'		=> esc_html__('Section #1', 'planeta'),
		'section_2'		=> esc_html__('Section #2', 'planeta'),
		'section_3'		=> esc_html__('Section #3', 'planeta'),
		'section_4'		=> esc_html__('Section #4', 'planeta'),
		'section_5'		=> esc_html__('Section #5', 'planeta'),
		'section_6'		=> esc_html__('Section #6', 'planeta'),
		'section_7'		=> esc_html__('Section #7', 'planeta'),
		'section_8'		=> esc_html__('Section #8', 'planeta'),
		'section_9'		=> esc_html__('Section #9', 'planeta'),
		'section_10'	=> esc_html__('Section #10', 'planeta'),
		'section_11'	=> esc_html__('Section #11', 'planeta'),
		'section_12'	=> esc_html__('Section #12', 'planeta'),
		'section_13'	=> esc_html__('Section #13', 'planeta'),
		'section_14'	=> esc_html__('Section #14', 'planeta'),
		'section_15'	=> esc_html__('Section #15', 'planeta'),
	),
));

?>

<?php

$animate_css_list = array(
	'bounce'							=> esc_html__('Bounce', 'kirki'),
	'flash'								=> esc_html__('Flash', 'kirki'),
	'pulse'								=> esc_html__('Pulse', 'kirki'),
	'rubberBand'					=> esc_html__('Rubber Band', 'kirki'),
	'shake'								=> esc_html__('Shake', 'kirki'),
	'swing'								=> esc_html__('Swing', 'kirki'),
	'tada'								=> esc_html__('Tada', 'kirki'),
	'wobble'							=> esc_html__('Wobble', 'kirki'),
	'jello'								=> esc_html__('Jello', 'kirki'),
	'heartBeat'						=> esc_html__('Heart Beat', 'kirki'),
	'bounceIn'						=> esc_html__('Bounce In', 'kirki'),
	'bounceInDown'				=> esc_html__('Bounce In Down', 'kirki'),
	'bounceInLeft'				=> esc_html__('Bounce In Left', 'kirki'),
	'bounceInRight'				=> esc_html__('Bounce In Right', 'kirki'),
	'bounceInUp'					=> esc_html__('Bounce In Up', 'kirki'),
	'fadeIn'							=> esc_html__('Fade In', 'kirki'),
	'fadeInDown'					=> esc_html__('Fade In Down', 'kirki'),
	'fadeInDownBig'				=> esc_html__('Fade In Down Big', 'kirki'),
	'fadeInLeft'					=> esc_html__('Fade In Left', 'kirki'),
	'fadeInLeftBig'				=> esc_html__('Fade In Left Big', 'kirki'),
	'fadeInRight'					=> esc_html__('Fade In Right', 'kirki'),
	'fadeInRightBig'			=> esc_html__('Fade In Right Big', 'kirki'),
	'fadeInUp'						=> esc_html__('Fade In Up', 'kirki'),
	'fadeInUpBig'					=> esc_html__('Fade In Up Big', 'kirki'),
	'flip'								=> esc_html__('Flip', 'kirki'),
	'flipInX'							=> esc_html__('Flip In X', 'kirki'),
	'flipInY'							=> esc_html__('Flip In Y', 'kirki'),
	'lightSpeedIn'				=> esc_html__('Lightspeed', 'kirki'),
	'rotateIn'						=> esc_html__('Rotate In', 'kirki'),
	'rotateInDownLeft'		=> esc_html__('Rotate In Down Left', 'kirki'),
	'rotateInDownRight'		=> esc_html__('Rotate In Down Right', 'kirki'),
	'rotateInUpLeft'			=> esc_html__('Rotate In Up Left', 'kirki'),
	'rotateInUpRight'			=> esc_html__('Rotate In Up Right', 'kirki'),
	'slideInDown'					=> esc_html__('Slide In Down', 'kirki'),
	'slideInLeft'					=> esc_html__('Slide In Left', 'kirki'),
	'slideInRight'				=> esc_html__('Slide In Right', 'kirki'),
	'slideInUp'						=> esc_html__('Slide In Up', 'kirki'),
	'zoomIn'							=> esc_html__('Zoom In', 'kirki'),
	'zoomInDown'					=> esc_html__('Zoom In Down', 'kirki'),
	'zoomInLeft'					=> esc_html__('Zoom In Left', 'kirki'),
	'zoomInRight'					=> esc_html__('Zoom In Right', 'kirki'),
	'zoomInUp'						=> esc_html__('Zoom In Up', 'kirki'),
	'jackInTheBox'				=> esc_html__('Jack In The Box', 'kirki'),
	'rollIn'							=> esc_html__('Roll In', 'kirki'),
);

Kirki::add_section('frontpage_section', array(
	'title'       => esc_html__('Frontpage', 'kirki'),
	'panel'       => 'modules_panel',
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'toggle',
	'label'			=> esc_html__('Use Parallax', 'kirki'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_parallax',
	'default'		=> false,
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'toggle',
	'label'			=> esc_html__('Random Parallax Speed', 'kirki'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_parallax_random',
	'default'		=> false,
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_parallax',
			'operator'			=> '==',
			'value'					=> true,
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'frontpage_title_type',
	'label'						=> esc_html__('Section Title Type', 'kirki'),
	'section'					=> 'frontpage_section',
	'default'					=> 'none',
	'choices'					=> array(
		'none'						=> esc_html__('None', 'kirki'),
		'reveal'					=> esc_html__('Reveal', 'kirki'),
		'scroll'					=> esc_html__('Scroll', 'kirki'),
	),
));

Kirki::add_field('kirki_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'kirki'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_title_effect_reveal',
	'default'				=> 'fadeIn',
	'choices'				=> $animate_css_list,
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '==',
			'value'					=> 'reveal'
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'kirki'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_title_effect_scroll',
	'default'				=> 'fade_in',
	'choices'				=> array(
		'fade_in'				=> esc_html__('Fade in (default)', 'kirki'),
		'rise_top'			=> esc_html__('Rise from Top', 'kirki'),
		'rise_bottom'		=> esc_html__('Rise from Bottom', 'kirki'),
		'grow'					=> esc_html__('Grow/Shrink', 'kirki'),
		'rotate'				=> esc_html__('Rotate (3D)', 'kirki'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '==',
			'value'					=> 'scroll'
		),

	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'frontpage_title_timing',
	'label'						=> esc_html__('Timing (in seconds)', 'kirki'),
	'section'					=> 'frontpage_section',
	'default'					=> 1,
	'choices'					=> array(
		'min'							=> 0.1,
		'max'							=> 7,
		'step'						=> 0.1,
	),
	'output'					=> array(
		array(
			'element'					=> '.frontpage-title',
			'property'				=> 'animation-duration',
			'units'						=> 's',
		),
	),
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type'			=> 'slider',
	'label'			=> esc_html__('Section Title Padding Top & Bottom (vh)', 'kirki'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_title_padding',
	'default'		=> 0,
	'choices'		=> array(
		'min'			=> '0',
		'max'			=> '100',
		'step'		=> '1',
	),
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_title_type',
			'operator'			=> '!=',
			'value'					=> 'scroll',
		),
	),
	'output'		=> array(
		array(
			'element'		=> '.frontpage-title',
			'units'			=> 'vh',
			'property'	=> 'padding-top',
		),
		array(
			'element'		=> '.frontpage-title',
			'units'			=> 'vh',
			'property'	=> 'padding-bottom',
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'radio-buttonset',
	'settings'				=> 'frontpage_subtitle_type',
	'label'						=> esc_html__('Section Subtitle Type', 'kirki'),
	'section'					=> 'frontpage_section',
	'default'					=> 'none',
	'choices'					=> array(
		'none'						=> esc_html__('None', 'kirki'),
		'reveal'					=> esc_html__('Reveal', 'kirki'),
		'scroll'					=> esc_html__('Scroll', 'kirki'),
	),
));

Kirki::add_field('kirki_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'kirki'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_subtitle_effect_reveal',
	'default'				=> 'fadeIn',
	'choices'				=> $animate_css_list,
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal'
		),

	),
));

Kirki::add_field('kirki_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Effect Type', 'kirki'),
	'section'				=> 'frontpage_section',
	'settings'			=> 'frontpage_subtitle_effect_scroll',
	'default'				=> 'fade_in',
	'choices'				=> array(
		'fade_in'				=> esc_html__('Fade in (default)', 'kirki'),
		'rise_top'			=> esc_html__('Rise from Top', 'kirki'),
		'rise_bottom'		=> esc_html__('Rise from Bottom', 'kirki'),
		'grow'					=> esc_html__('Grow/Shrink', 'kirki'),
		'rotate'				=> esc_html__('Rotate (3D)', 'kirki'),
	),
	'active_callback'	=> array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'scroll'
		),
	),
));

Kirki::add_field('kirki_config', array(
	'type' 						=> 'slider',
	'settings'				=> 'frontpage_subtitle_timing',
	'label'						=> esc_html__('Timing (in seconds)', 'kirki'),
	'section'					=> 'frontpage_section',
	'default'					=> 1,
	'choices'					=> array(
		'min'							=> 0.1,
		'max'							=> 7,
		'step'						=> 0.1,
	),
	'output'					=> array(
		array(
			'element'					=> '.frontpage-subtitle',
			'property'				=> 'animation-duration',
			'units'						=> 's',
		),
	),
	'active_callback' => array(
		array(
			'setting'				=> 'frontpage_subtitle_type',
			'operator'			=> '==',
			'value'					=> 'reveal',
		),
	),
));


Kirki::add_field('kirki_config', array(
	'type'			=> 'slider',
	'label'			=> esc_html__('Section Subtitle Padding Bottom (vh)', 'kirki'),
	'section'		=> 'frontpage_section',
	'settings'	=> 'frontpage_subtitle_padding',
	'default'		=> 15,
	'choices'		=> array(
		'min'			=> '0',
		'max'			=> '100',
		'step'		=> '1',
	),
	'output'		=> array(
		array(
			'element'		=> '.frontpage-subtitle',
			'units'			=> 'vh',
			'property'	=> 'padding-bottom',
		),
	),
));

?>

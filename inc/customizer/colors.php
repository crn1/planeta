<?php

Kirki::add_section('primary_color_section', array(
	'title'	=> esc_html__('Primary Color', 'planeta'),
));

function planeta_generate_color_scheme($primary_color, $background_color, $text_color)
{
	return array(
		'primary_color_enable'				=> true,
		'primary_color'								=> $primary_color,
		'global_background'						=> array(
			'background-color'						=> $background_color,
		),
		'loading_background'					=> $background_color,
		'page_title_background'				=> $primary_color,
		'menu_background'							=> array(
			'background-color'						=> $background_color,
		),
		'typography_main_color'				=> $text_color,
		'typography_section_title'		=> array(
			'color'												=> $text_color,
			'text-transform'							=> 'none',
			'font-family'									=> 'inherit',
			'variant'											=> 'regular',
			'line-height'									=> '1.5',
			'letter-spacing'							=> '0',
			'text-align'									=> 'center',
		),
		'typography_section_subtitle'						=> array(
			'color'												=> $text_color,
			'text-transform'							=> 'none',
			'font-family'									=> 'inherit',
			'variant'											=> 'regular',
			'line-height'									=> '1.5',
			'letter-spacing'							=> '0',
			'text-align'									=> 'center',
		),
		'typography_page_title'									=> array(
			'color'												=> '#FFFFFF',
			'text-transform'							=> 'none',
			'font-family'									=> 'inherit',
			'variant'											=> 'regular',
			'line-height'									=> '1.5',
			'letter-spacing'							=> '0',
			'text-align'									=> 'center',
		),
	);
}

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Color Scheme', 'planeta'),
	'settings'			=> 'colors_scheme',
	'section'				=> 'primary_color_section',
	'default'				=> 'none',
	'choices'				=> array(
		'none'						=> esc_html__('None (default)', 'planeta'),
		'vulcano-light'		=> esc_html__('Vulcano Red (Light)', 'planeta'),
		'vulcano-dark'		=> esc_html__('Vulcano Red (Dark)', 'planeta'),
		'tiger-light'			=> esc_html__('Tiger Orange (Light)', 'planeta'),
		'tiger-dark'			=> esc_html__('Tiger Orange (Dark)', 'planeta'),
		'cyber-light'			=> esc_html__('Cyber Yellow (Light)', 'planeta'),
		'cyber-dark'			=> esc_html__('Cyber Yellow (Dark)', 'planeta'),
		'neon-light'			=> esc_html__('Neon Green (Light)', 'planeta'),
		'neon-dark'				=> esc_html__('Neon Green (Dark)', 'planeta'),
		'sky-light'				=> esc_html__('Sky Blue (Light)', 'planeta'),
		'sky-dark'				=> esc_html__('Sky Blue (Dark)', 'planeta'),
		'retrowave-light'	=> esc_html__('Retrowave Pink (Light)', 'planeta'),
		'retrowave-dark'	=> esc_html__('Retrowave Pink (Dark)', 'planeta'),
	),
	'preset'      	=> array(
		'vulcano-light' 	=> array(
			'settings' 				=> planeta_generate_color_scheme('#D50000', '#FFFFFF', '#000000'),
		),
		'vulcano-dark' 		=> array(
			'settings' 				=> planeta_generate_color_scheme('#D50000', '#212121', '#FFFFFF'),
		),
		'tiger-light' 	=> array(
			'settings' 				=> planeta_generate_color_scheme('#FD6A02', '#FFFFFF', '#000000'),
		),
		'tiger-dark' 		=> array(
			'settings' 				=> planeta_generate_color_scheme('#FD6A02', '#212121', '#FFFFFF'),
		),
		'cyber-light' 	=> array(
			'settings' 				=> planeta_generate_color_scheme('#FFD300', '#FFFFFF', '#000000'),
		),
		'cyber-dark' 		=> array(
			'settings' 				=> planeta_generate_color_scheme('#FFD300', '#212121', '#FFFFFF'),
		),
		'neon-light' 	=> array(
			'settings' 				=> planeta_generate_color_scheme('#39FF14', '#FFFFFF', '#000000'),
		),
		'neon-dark' 		=> array(
			'settings' 				=> planeta_generate_color_scheme('#39FF14', '#212121', '#FFFFFF'),
		),
		'sky-light' 			=> array(
			'settings' 				=> planeta_generate_color_scheme('#01BFEE', '#FFFFFF', '#000000'),
		),
		'sky-dark' 				=> array(
			'settings' 				=> planeta_generate_color_scheme('#01BFEE', '#212121', '#FFFFFF'),
		),
		'retrowave-light' => array(
			'settings' 				=> planeta_generate_color_scheme('#FF2795', '#FFFFFF', '#000000'),
		),
		'retrowave-dark' 	=> array(
			'settings' 				=> planeta_generate_color_scheme('#FF2795', '#212121', '#FFFFFF'),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_enable',
	'label'			=> esc_html__('Enable Primary Color', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> false,
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'color',
	'settings'	=> 'primary_color',
	'label'			=> esc_html__('Primary Color', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> '#000000',
	'choices'		=> array(
		'alpha'			=> true,
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_menu_button',
	'label'			=> esc_html__('Enable on Menu Button', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				'#menu-button > .hamburger-box > .hamburger-inner:before',
				'#menu-button > .hamburger-box > .hamburger-inner',
				'#menu-button > .hamburger-box > .hamburger-inner:after',
			),
			'property'				=> 'background-color',
			'value_pattern' 	=> 'primary_color',
			'exclude'					=> array(false),
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_scroll_top',
	'label'			=> esc_html__('Enable on Scroll Top Button', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				'#scroll-top-button',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'exclude'					=> array(false),
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_scroll_down',
	'label'			=> esc_html__('Enable on Scroll Down Button', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> false,
	'output'		=> array(
		array(
			'element'					=> array(
				'#scroll-down-button',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'exclude'					=> array(false),
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_button_links_hover',
	'label'			=> esc_html__('Enable on Button Links (on Hover)', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				'.button-link:hover',
				'.button-link.active',
				'.hover-brackets-1 > .button-link:hover::before',
				'.hover-brackets-1 > .button-link:hover::after',
				'.hover-brackets-2 > .button-link:hover::before',
				'.hover-brackets-2 > .button-link:hover::after',
				'.hover-brackets-3 > .button-link:hover::before',
				'.hover-brackets-3 > .button-link:hover::after',
				'.hover-brackets-4 > .button-link:hover::before',
				'.hover-brackets-4 > .button-link:hover::after',
				'.hover-brackets-5 > .button-link:hover::before',
				'.hover-brackets-5 > .button-link:hover::after',
				'.hover-brackets-6 > .button-link:hover::before',
				'.hover-brackets-6 > .button-link:hover::after',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
		array(
			'element'					=> array(
				'.hover-underline-1 > .button-link:hover::before',
				'.hover-underline-1 > .button-link:hover::after',
				'.hover-underline-2 > .button-link:hover::before',
				'.hover-underline-2 > .button-link:hover::after',
				'.hover-underline-3 > .button-link:hover::before',
				'.hover-underline-3 > .button-link:hover::after',
				'.hover-underline-4 > .button-link:hover::before',
				'.hover-underline-4 > .button-link:hover::after',
				'.hover-underline-5 > .button-link:hover::before',
				'.hover-underline-5 > .button-link:hover::after',
				'.hover-underline-6 > .button-link:hover::before',
				'.hover-underline-6 > .button-link:hover::after',
				'.hover-border-switch > .button-link:hover::before',
				'.hover-border-switch > .button-link:hover::after',
				'.hover-underline-3 > .button-link.active::before',
				'.hover-underline-3 > .button-link.active::after',
				'.hover-underline-4 > .button-link.active::before',
				'.hover-underline-4 > .button-link.active::after',
				'.hover-underline-5 > .button-link.active::before',
				'.hover-underline-5 > .button-link.active::after',
				'.hover-border-switch > .button-link.active::before',
				'.hover-border-switch > .button-link.active::after',
			),
			'property'				=> 'background-color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
		array(
			'element'					=> array(
				'.hover-box-1 > .button-link:hover',
				'.hover-box-2 > .button-link:hover',
				'.hover-box-1 > .button-link.active',
				'.hover-box-2 > .button-link.hover',
			),
			'property'				=> 'border-color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_forms',
	'label'			=> esc_html__('Enable on Forms', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				"body > *:not(#wpadminbar) form input[type='text']:hover",
				"body > *:not(#wpadminbar) form input[type='search']:hover",
				"body > *:not(#wpadminbar) form input[type='email']:hover",
				"body > *:not(#wpadminbar) form select:hover",
				"body > *:not(#wpadminbar) form textarea:hover",
				'#search-form:hover',
				'#protected-post-form:hover',
				'#section-contact-form input[type="submit"]:hover',
				'.gallery-icon:hover img',
				".wp-block-search input[type='search']:hover",
				".wp-block-search button:hover",
			),
			'property'				=> 'border-color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
		array(
			'element'					=> array(
				"body > *:not(#wpadminbar) form input[type='submit']:hover",
				"body > *:not(#wpadminbar) form button:hover",
				'#protected-post-form:hover button',
				'#search-form:hover button',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type'			=> 'toggle',
	'settings'	=> 'primary_color_content',
	'label'			=> esc_html__('Enable on Content', 'planeta'),
	'section'		=> 'primary_color_section',
	'default'		=> true,
	'output'		=> array(
		array(
			'element'					=> array(
				'body > *:not(#wpadminbar) a:not(.button-link)',
				'.card-number .number-value',
				'.card-image',
				'.card-testimonial .testimonial-excerpt::before',
				'.card-testimonial .testimonial-excerpt::after',
				'.card-price .price-highlight',
				'li:hover::before',
				'body > *:not(#wpadminbar) a:not(.button-link)',
			),
			'property'				=> 'color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
		array(
			'element'					=> array(
				'body > *:not(#wpadminbar) blockquote::before',
				'body > *:not(#wpadminbar) blockquote::after',
			),
			'property'				=> 'background-color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
		array(
			'element'					=> array(
				'.post-page-numbers:hover',
				'.post-page-numbers.current',
				'.card-number .number-container',
				'.card-testimonial .testimonial-excerpt',
				'.card-price .price-tag',
				'li:hover::before',
			),
			'property'				=> 'border-color',
			'value_pattern' 	=> 'primary_color !important',
			'pattern_replace'	=> array(
				'primary_color'		=> 'primary_color',
			),
			'exclude'					=> array(false),
		),
	),
	'active_callback'	=> array(
		array(
			'setting'					=> 'primary_color_enable',
			'operator'				=> '===',
			'value'						=> true,
		),
	),
));

?>

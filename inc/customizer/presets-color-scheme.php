<?php

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
	'section'				=> 'presets_section',
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

?>

<?php

Kirki::add_field('planeta_config', array(
	'type'					=> 'select',
	'label'					=> esc_html__('Color Scheme, Typography and Effects', 'planeta'),
	'settings'			=> 'effects_scheme',
	'section'				=> 'presets_section',
	'default'				=> 'none',
	'choices'				=> array(
		'none'						=> esc_html__('None (default)', 'planeta'),
		'planet'					=> esc_html__('Planet', 'planeta'),
		'retrowave'				=> esc_html__('Retrowave', 'planeta'),
		'traditional'			=> esc_html__('Traditional', 'planeta'),
	),
	'preset'      	=> array(
		'planet' 				=> array(
			'settings' 					=> array(
				//General
				'container_default'											=> 1200,
				'container_article'											=> 700,
				'loading_enable'												=> true,
				'navbar_padding'												=> 112,
				'hamburger_sharp'												=> true,
				'scroll_down_bottom'										=> 110,

				//Sections
				'team_masonry_num'											=> '4',
				'team_enable_masonry'										=> false,
				'service_masonry_num'										=> '2',
				'service_enable_masonry'								=> false,
				'number_masonry_num'										=> '4',
				'number_enable_masonry'									=> false,
				'project_masonry_num'										=> '2',
				'project_enable_masonry'								=> true,
				'project_image_shape'										=> 'circle-full',
				'project_image_shape_strength'					=> 4,
				'post_masonry_num'											=> '2',
				'post_enable_masonry'										=> true,
				'post_image_shape'											=> 'circle-full',
				'post_image_shape_strength'							=> 4,
				'testimonial_masonry_num'								=> '2',
				'testimonial_enable_masonry'						=> true,
				'contact_container_spacing_top'					=> 15,
				'contact_container_spacing_bottom'			=> 15,

				//Typography
				'typography_main'												=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'Nunito Sans',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
				),
				'typography_main_fluid'									=> true,
				'typography_main_fluid_size'						=> '21',
				'typography_button_link_hover'					=> 'box-1',
				'typography_button_link_border_size'		=> 2,
				'typography_button_link_inherit_typography' => true,
				'typography_section_title_inherit_size'	=> true,
				'typography_section_title_inherit_typography' => false,
				'typography_section_title'							=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'inherit',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
					'text-align'					=> 'center',
				),
				'typography_section_subtitle_inherit_size'	=> false,
				'typography_section_subtitle_inherit_typography'=> false,
				'typography_section_subtitle'						=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'inherit',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
					'text-align'					=> 'center',
				),
				'typography_section_subtitle_size'			=> 1.2,
				'typography_page_title_inherit_size'		=> true,
				'typography_page_title_inherit_typography' => false,
				'typography_page_title'									=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'inherit',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
					'text-align'					=> 'center',
				),

				//Animations
				'section_title_trigger'									=> 'lax',
				'section_title_lax_type_1'							=> 'zoomIn',
				'section_title_strength_zoomIn_1'				=> 0.85,
				'section_title_lax_type_2'							=> 'zoomOut',
				'section_title_strength_zoomOut_2'			=> 0.85,
				'section_title_lax_type_3'							=> 'none',
				'section_subtitle_trigger'							=> 'lax',
				'section_subtitle_lax_type_1'						=> 'zoomIn',
				'section_subtitle_strength_zoomIn_1'		=> 0.85,
				'section_subtitle_lax_type_2'						=> 'zoomOut',
				'section_subtitle_strength_zoomOut_2'		=> 0.85,
				'section_subtitle_lax_type_3'						=> 'none',
				'section_logo_trigger'									=> 'lax',
				'section_logo_lax_type_1'								=> 'zoomIn',
				'section_logo_strength_zoomIn_1'				=> 0.85,
				'section_logo_lax_type_2'								=> 'zoomOut',
				'section_logo_strength_zoomOut_2'				=> 0.85,
				'section_logo_lax_type_3'								=> 'none',
				'page_title_trigger'										=> 'lax',
				'page_title_lax_type_1'									=> 'zoomIn',
				'page_title_strength_zoomIn_1'					=> 0.85,
				'page_title_lax_type_2'									=> 'zoomOut',
				'page_title_strength_zoomOut_2'					=> 0.85,
				'page_title_lax_type_3'									=> 'none',
				'card_image_trigger'										=> 'lax',
				'card_image_lax_type_1'									=> 'zoomIn',
				'card_image_strength_zoomIn_1'					=> 0.85,
				'card_image_lax_type_2'									=> 'zoomOut',
				'card_image_strength_zoomOut_2'					=> 0.85,
				'card_image_lax_type_3'									=> 'none',
				'card_info_trigger'											=> 'lax',
				'card_info_lax_type_1'									=> 'zoomIn',
				'card_info_strength_zoomIn_1'						=> 0.85,
				'card_info_lax_type_2'									=> 'zoomOut',
				'card_info_strength_zoomOut_2'					=> 0.85,
				'card_info_lax_type_3'									=> 'none',
			),
		),

		'retrowave' 	=> array(
			'settings' 				=> array(
				//General
				'container_default'											=> 1200,
				'container_article'											=> 700,
				'loading_enable'												=> true,
				'navbar_padding'												=> 112,
				'hamburger_sharp'												=> true,
				'scroll_down_bottom'										=> 110,

				//Sections
				'team_masonry_num'											=> '4',
				'team_enable_masonry'										=> false,
				'team_image_shape'											=> 'none',
				'service_masonry_num'										=> '2',
				'service_enable_masonry'								=> false,
				'number_masonry_num'										=> '4',
				'number_enable_masonry'									=> false,
				'project_masonry_num'										=> '2',
				'project_enable_masonry'								=> true,
				'project_image_shape'										=> 'none',
				'post_masonry_num'											=> '2',
				'post_enable_masonry'										=> true,
				'post_image_shape'											=> 'none',
				'testimonial_masonry_num'								=> '2',
				'testimonial_enable_masonry'						=> true,
				'contact_container_spacing_top'					=> 15,
				'contact_container_spacing_bottom'			=> 15,

				//Typography
				'typography_main_fluid'									=> true,
				'typography_main_fluid_size'						=> '21',
				'typography_button_link_hover'					=> 'box-2',
				'typography_button_link_border_size'		=> 2,
				'typography_button_link_inherit_typography' => true,
				'typography_section_title_inherit_size'	=> true,
				'typography_section_title_inherit_typography' => false,
				'typography_section_title'							=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'inherit',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
					'text-align'					=> 'center',
				),
				'typography_section_subtitle_inherit_size'	=> false,
				'typography_section_subtitle_inherit_typography'=> false,
				'typography_section_subtitle'						=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'inherit',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
					'text-align'					=> 'center',
				),
				'typography_section_subtitle_size'			=> 1.2,
				'typography_page_title_inherit_size'		=> true,
				'typography_page_title_inherit_typography' => false,
				'typography_page_title'									=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'inherit',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
					'text-align'					=> 'center',
				),

				//Animations
				'section_title_trigger'									=> 'lax',
				'section_title_lax_type_1'							=> 'zoomIn',
				'section_title_strength_zoomIn_1'				=> 0.85,
				'section_title_lax_type_2'							=> 'zoomOut',
				'section_title_strength_zoomOut_2'			=> 0.85,
				'section_title_lax_type_3'							=> 'none',
				'section_subtitle_trigger'							=> 'lax',
				'section_subtitle_lax_type_1'						=> 'zoomIn',
				'section_subtitle_strength_zoomIn_1'		=> 0.85,
				'section_subtitle_lax_type_2'						=> 'zoomOut',
				'section_subtitle_strength_zoomOut_2'		=> 0.85,
				'section_subtitle_lax_type_3'						=> 'none',
				'section_logo_trigger'									=> 'lax',
				'section_logo_lax_type_1'								=> 'zoomIn',
				'section_logo_strength_zoomIn_1'				=> 0.85,
				'section_logo_lax_type_2'								=> 'zoomOut',
				'section_logo_strength_zoomOut_2'				=> 0.85,
				'section_logo_lax_type_3'								=> 'none',
				'page_title_trigger'										=> 'lax',
				'page_title_lax_type_1'									=> 'zoomIn',
				'page_title_strength_zoomIn_1'					=> 0.85,
				'page_title_lax_type_2'									=> 'zoomOut',
				'page_title_strength_zoomOut_2'					=> 0.85,
				'page_title_lax_type_3'									=> 'none',
				'card_image_trigger'										=> 'lax',
				'card_image_lax_type_1'									=> 'zoomIn',
				'card_image_strength_zoomIn_1'					=> 0.85,
				'card_image_lax_type_2'									=> 'zoomOut',
				'card_image_strength_zoomOut_2'					=> 0.85,
				'card_image_lax_type_3'									=> 'none',
				'card_info_trigger'											=> 'lax',
				'card_info_lax_type_1'									=> 'zoomIn',
				'card_info_strength_zoomIn_1'						=> 0.85,
				'card_info_lax_type_2'									=> 'zoomOut',
				'card_info_strength_zoomOut_2'					=> 0.85,
				'card_info_lax_type_3'									=> 'none',
			),
		),

		'traditional' 				=> array(
			'settings' 					=> array(
				//General
				'primary_color_enable'									=> true,
				'container_default'											=> 1200,
				'container_article'											=> 700,
				'loading_enable'												=> true,
				'navbar_padding'												=> 112,
				'hamburger_sharp'												=> true,
				'scroll_down_bottom'										=> 110,

				//Sections
				'team_masonry_num'											=> '4',
				'team_enable_masonry'										=> false,
				'service_masonry_num'										=> '4',
				'service_enable_masonry'								=> false,
				'service_min_height'										=> 65,
				'number_masonry_num'										=> '4',
				'number_enable_masonry'									=> false,
				'number_min_height'											=> 65,
				'project_masonry_num'										=> '4',
				'project_enable_masonry'								=> false,
				'project_image_shape'										=> 'none',
				'post_masonry_num'											=> '4',
				'post_enable_masonry'										=> false,
				'post_image_shape'											=> 'none',
				'testimonial_masonry_num'								=> '2',
				'testimonial_enable_masonry'						=> false,
				'testimonial_container_spacing_top'			=> 15,
				'contact_container_spacing_top'					=> 15,
				'contact_container_spacing_bottom'			=> 15,
				'tech_min_height'												=> 65,
				'generic-1_min_height'									=> 65,

				//Typography
				'typography_main'												=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'Noto Serif',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
				),
				'typography_main_fluid'									=> true,
				'typography_main_fluid_size'						=> '16',
				'typography_button_link_hover'					=> 'none',
				'typography_button_link_border_size'		=> 2,
				'typography_button_link_inherit_typography' => true,
				'typography_section_title_inherit_size'	=> true,
				'typography_section_title_inherit_typography' => false,
				'typography_section_title'							=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'inherit',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
					'text-align'					=> 'center',
				),
				'typography_section_subtitle_inherit_size'	=> false,
				'typography_section_subtitle_inherit_typography'=> false,
				'typography_section_subtitle'						=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'inherit',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
					'text-align'					=> 'center',
				),
				'typography_section_subtitle_size'			=> 1.2,
				'typography_page_title_inherit_size'		=> true,
				'typography_page_title_inherit_typography' => false,
				'typography_page_title'									=> array(
					'text-transform'			=> 'none',
					'font-family'					=> 'inherit',
					'variant'							=> 'regular',
					'line-height'					=> '1.5',
					'letter-spacing'			=> '0',
					'text-align'					=> 'center',
				),

				//Animations
				'section_title_trigger'									=> 'aos',
				'section_title_aos_type'								=> 'fade-up',
				'section_logo_trigger'									=> 'aos',
				'section_logo_aos_type'									=> 'fade-up',
				'page_title_trigger'										=> 'aos',
				'page_title_aos_type'										=> 'fade-up',
				'card_image_trigger'										=> 'aos',
				'card_image_aos_type'										=> 'fade-up',
				'card_info_trigger'											=> 'aos',
				'card_info_aos_type'										=> 'fade-up',
			),
		),
	),
));

?>

<?php

Kirki::add_section('header_logo_section', array(
	'title'       => esc_html__('Logo', 'planeta' ),
	'panel'       => 'header_panel'
));

Kirki::add_field('planeta_config', array(
	'type' 					=> 'image',
	'settings'			=> 'logo',
	'label'					=> esc_html__('Logo', 'planeta'),
	'section'				=> 'header_logo_section',
	'default'				=> '',
	'choices'     		=> array(
		'save_as' 				=> 'id',
	),
	'partial_refresh'	=> array(
		'logo_container'				=> array(
			'selector'				=> '#logo-container',
			'render_callback'	=> function()
			{
				$logo_id = get_theme_mod('logo', '');
				if(!empty($logo_id))
				{
					$logo_url = wp_get_attachment_url($logo_id);
					$logo_alt = get_post_meta($logo_id, '_wp_attachment_image_alt', true);
					return "<img
						id='logo'
						alt='${logo_alt}'
						src='${logo_url}'
					/>";
				}else{
					return '';
				}
			}
		),
	),
));

?>

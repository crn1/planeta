<?php

Kirki::add_section('social_menu_section', array(
	'title'	=> esc_html__('Social Media', 'planeta'),
	'panel'	=> 'header_panel',
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'repeater',
	'settings'				=> 'social_menu_items',
	'label'						=> esc_html__('Items', 'planeta'),
	'section'					=> 'social_menu_section',
	'default'					=> array(),
	'row_label' 			=> array(
		'type'  					=> 'field',
		'field' 					=> 'service',
	),
	'fields'					=> array(
		'url'							=> array(
			'type'						=> 'link',
			'default'					=> 'https://www.example.org',
			'label'						=> esc_html__('URL', 'planeta'),
		),
		'service'					=> array(
			'type'						=> 'select',
			'default'					=> 'linkedin',
			'label'						=> esc_html__('Service', 'planeta'),
			'choices'					=> array(
				'500px'								=> '500px',
				'baidu-tieba'					=> 'Baidu Tieba',
				'behance'							=> 'Behance',
				'cloudapp'						=> 'CloudApp',
				'deviantart'					=> 'DeviantArt',
				'dribbble'						=> 'Dribbble',
				'dribble'							=> 'Dribble',
				'ello'								=> 'Ello',
				'envato'							=> 'Envato',
				'facebook-messanger'	=> 'Facebook Messanger',
				'facebook'						=> 'Facebook',
				'flikr'								=> 'Flikr',
				'github'							=> 'GitHub',
				'google-hangouts'			=> 'Google Hangouts',
				'google-map'					=> 'Google Map',
				'hype-machine'				=> 'Hype Machine',
				'instagram'						=> 'Instagram',
				'kickstarter'					=> 'KickStarter',
				'linkedin'						=> 'LinkedIn',
				'meetup'							=> 'MeetUp',
				'pinterest'						=> 'Pinterest',
				'reddit'							=> 'Reddit',
				'rss'									=> 'RSS',
				'shopify'							=> 'Shopify',
				'skype'								=> 'Skype',
				'slack'								=> 'Slack',
				'slidshare'						=> 'Slideshare',
				'smugmug'							=> 'Smugmug',
				'snapchat'						=> 'Snapchat',
				'soundcloud'					=> 'SoundCloud',
				'spotify'							=> 'Spotify',
				'stack-exchange'			=> 'Stack Exchange',
				'stack-overflow'			=> 'Stack Overflow',
				'steam'								=> 'Steam',
				'telegram'						=> 'Telegram',
				'trello'							=> 'Trello',
				'tumblr'							=> 'Tumblr',
				'twitch'							=> 'Twitch',
				'twitter'							=> 'Twitter',
				'viber'								=> 'Viber',
				'vimeo'								=> 'Vimeo',
				'vk'									=> 'VK',
				'whatsapp'						=> 'WhatsApp',
				'youtube'							=> 'YouTube',
			),
		),
	),
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'social_menu_header',
	'label'						=> esc_html__('Show in Header', 'planeta'),
	'section'					=> 'social_menu_section',
	'default'					=> false,
));

Kirki::add_field('planeta_config', array(
	'type' 						=> 'toggle',
	'settings'				=> 'social_menu_footer',
	'label'						=> esc_html__('Show in Footer', 'planeta'),
	'section'					=> 'social_menu_section',
	'default'					=> true,
));

?>

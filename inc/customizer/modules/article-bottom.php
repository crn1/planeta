<?php

Kirki::add_panel('article_bottom_panel', array(
	'title'	=> esc_html__('Article Bottom Widget', 'planeta'),
	'panel'	=> 'modules_panel',
));

require_once(get_template_directory() . '/inc/customizer/items-appearance.php');
planeta_add_items_appearance('article_bottom');

require_once(get_template_directory() . '/inc/customizer/video-background.php');
planeta_add_video_background(
	$section = 'article_bottom',
	$panel = 'article_bottom_panel',
	$bg_output = '#article_bottom-overlay'
);

?>

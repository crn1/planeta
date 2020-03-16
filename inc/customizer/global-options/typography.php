<?php

Kirki::add_panel('typography_panel', array(
	'title'       => esc_html__('Typography', 'planeta' ),
	'panel'       => 'theme_options_panel',
));

require_once(get_template_directory() . '/inc/customizer/global-options/typography/main.php');
require_once(get_template_directory() . '/inc/customizer/global-options/typography/section-title.php');
require_once(get_template_directory() . '/inc/customizer/global-options/typography/section-subtitle.php');
require_once(get_template_directory() . '/inc/customizer/global-options/typography/page-title.php');
require_once(get_template_directory() . '/inc/customizer/global-options/typography/page-subtitle.php');

?>

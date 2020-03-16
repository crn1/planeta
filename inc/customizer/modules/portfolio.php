<?php

Kirki::add_panel('portfolio_panel', array(
	'title'	=> esc_html__('Personal Sidebar', 'planeta'),
	'panel'	=> 'modules_panel',
));

require_once(get_template_directory() . '/inc/customizer/modules/personal-sidebar/appearance.php');
require_once(get_template_directory() . '/inc/customizer/modules/personal-sidebar/background.php');
require_once(get_template_directory() . '/inc/customizer/modules/personal-sidebar/avatar.php');
require_once(get_template_directory() . '/inc/customizer/modules/personal-sidebar/content.php');

?>

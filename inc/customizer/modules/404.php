<?php

Kirki::add_panel('404_panel', array(
	'title'	=> esc_html__('404 (Not Found) Page', 'planeta'),
	'panel'	=> 'modules_panel',
));

require_once(get_template_directory() . '/inc/customizer/modules/404/content.php');
require_once(get_template_directory() . '/inc/customizer/modules/404/background.php');

?>

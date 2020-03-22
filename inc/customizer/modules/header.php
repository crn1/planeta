<?php

Kirki::add_panel('header_panel', array(
	'title'       => esc_html__('Header', 'planeta'),
	'panel'       => 'modules_panel',
));

require_once(get_template_directory() . '/inc/customizer/modules/header/appearance.php');
require_once(get_template_directory() . '/inc/customizer/modules/header/menu-button.php');
require_once(get_template_directory() . '/inc/customizer/modules/header/logo.php');
require_once(get_template_directory() . '/inc/customizer/modules/header/background.php');
require_once(get_template_directory() . '/inc/customizer/modules/header/separator.php');

?>

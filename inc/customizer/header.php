<?php

Kirki::add_panel('header_panel', array(
	'title'       => esc_html__('Header', 'planeta'),
));

require_once(get_template_directory() . '/inc/customizer/header/appearance.php');
require_once(get_template_directory() . '/inc/customizer/header/menu-button.php');
require_once(get_template_directory() . '/inc/customizer/header/logo.php');
require_once(get_template_directory() . '/inc/customizer/header/background.php');
require_once(get_template_directory() . '/inc/customizer/header/social-media.php');
require_once(get_template_directory() . '/inc/customizer/header/scroll-top.php');
require_once(get_template_directory() . '/inc/customizer/header/scroll-down.php');

?>

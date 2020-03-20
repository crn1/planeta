<?php

Kirki::add_panel('footer_panel', array(
	'title'       => esc_html__('Footer', 'planeta'),
	'panel'       => 'modules_panel',
));

require_once(get_template_directory() . '/inc/customizer/modules/footer/content.php');
require_once(get_template_directory() . '/inc/customizer/modules/footer/background.php');

?>

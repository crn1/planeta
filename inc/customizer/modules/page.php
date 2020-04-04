<?php

Kirki::add_panel('page_panel', array(
	'title'	=> esc_html__('Page (Search/Archive/Post)', 'planeta'),
	'panel'	=> 'modules_panel',
));

require_once(get_template_directory() . '/inc/customizer/modules/page/title.php');
require_once(get_template_directory() . '/inc/customizer/modules/page/items-appearance.php');

?>

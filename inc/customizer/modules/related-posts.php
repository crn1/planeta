<?php

Kirki::add_panel('related_posts_panel', array(
	'title'	=> esc_html__('Related Posts', 'planeta'),
	'panel'	=> 'modules_panel',
));

require_once(get_template_directory() . '/inc/customizer/modules/related-posts/general.php');
require_once(get_template_directory() . '/inc/customizer/modules/related-posts/items-appearance.php');

?>

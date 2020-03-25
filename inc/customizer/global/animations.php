<?php

require_once(get_template_directory() . '/inc/customizer/animations.php');

Kirki::add_panel('global_anims_panel', array(
	'title'       => esc_html__('Animations', 'planeta'),
	'panel'       => 'global_panel',
));

planeta_add_animations('section_title', 'Section Title', 'global_anims_panel');
planeta_add_animations('section_subtitle', 'Section Subtitle', 'global_anims_panel');
planeta_add_animations('page_title', 'Page Title', 'global_anims_panel');
planeta_add_animations('card', 'Cards', 'global_anims_panel');

?>

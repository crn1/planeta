<?php

Kirki::add_section('presets_section', array(
	'title'       => esc_html__('Theme Presets', 'planeta'),
	'priority'		=> 1,
));


require_once(get_template_directory() . '/inc/customizer/presets-content.php');
require_once(get_template_directory() . '/inc/customizer/presets-color-scheme.php');
require_once(get_template_directory() . '/inc/customizer/presets-effects.php');

?>

<?php

Kirki::add_config('planeta_config', array(
	'capability'	=> 'edit_theme_options',
	'option_type'	=> 'theme_mod',
));

Kirki::add_field('planeta_config', array());

Kirki::add_panel('theme_options_panel', array(
	'title'       => esc_html__('Global Options', 'planeta'),
));

Kirki::add_panel('modules_panel', array(
	'title'       => esc_html__('Modules', 'planeta'),
));

Kirki::add_panel('sections_panel', array(
	'title'       => esc_html__('Frontpage Sections', 'planeta'),
));

//Global Options
require_once(get_template_directory() . '/inc/customizer/global-options/background.php');
require_once(get_template_directory() . '/inc/customizer/global-options/animations.php');
require_once(get_template_directory() . '/inc/customizer/global-options/containers.php');
require_once(get_template_directory() . '/inc/customizer/global-options/typography.php');
require_once(get_template_directory() . '/inc/customizer/global-options/colors.php');

//Modules
require_once(get_template_directory() . '/inc/customizer/modules/404.php');
require_once(get_template_directory() . '/inc/customizer/modules/header.php');
require_once(get_template_directory() . '/inc/customizer/modules/footer.php');
require_once(get_template_directory() . '/inc/customizer/modules/page.php');

//Homepage sections
require_once(get_template_directory() . '/inc/customizer/sections/layout.php');
require_once(get_template_directory() . '/inc/customizer/sections/generator.php');

?>

<?php

Kirki::add_config('planeta_config', array(
	'capability'	=> 'edit_theme_options',
	'option_type'	=> 'theme_mod',
));

Kirki::add_field('planeta_config', array());

Kirki::add_panel('theme_options_panel', array(
	'title'       => esc_html__('Theme Options', 'planeta'),
));

Kirki::add_panel('modules_panel', array(
	'title'       => esc_html__('Modules', 'planeta'),
));

Kirki::add_panel('sections_panel', array(
	'title'       => esc_html__('Frontpage Sections', 'planeta'),
));

//Theme Options
require_once(get_template_directory() . '/inc/customizer/theme_background.php');
require_once(get_template_directory() . '/inc/customizer/theme_containers.php');
require_once(get_template_directory() . '/inc/customizer/theme_typography.php');
require_once(get_template_directory() . '/inc/customizer/theme_colors.php');
//require_once(get_template_directory() . '/inc/customizer/theme_cursor.php');

//Modules
//require_once(get_template_directory() . '/inc/customizer/module_page.php');
require_once(get_template_directory() . '/inc/customizer/module_section.php');
require_once(get_template_directory() . '/inc/customizer/module_header.php');
require_once(get_template_directory() . '/inc/customizer/module_footer.php');
//require_once(get_template_directory() . '/inc/customizer/module_blog.php');
require_once(get_template_directory() . '/inc/customizer/module_portfolio.php');
//require_once(get_template_directory() . '/inc/customizer/module_social_media.php');

//Homepage sections
require_once(get_template_directory() . '/inc/customizer/sections_layout.php');
require_once(get_template_directory() . '/inc/customizer/sections_generator.php');

?>

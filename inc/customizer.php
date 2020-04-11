<?php

Kirki::add_config('planeta_config', array(
	'capability'	=> 'edit_theme_options',
	'option_type'	=> 'theme_mod',
));

Kirki::add_field('planeta_config', array());

Kirki::add_panel('global_panel', array(
	'title'       => esc_html__('Global Options', 'planeta'),
));

Kirki::add_panel('modules_panel', array(
	'title'       => esc_html__('Modules', 'planeta'),
));

Kirki::add_panel('sections_panel', array(
	'title'       => esc_html__('Frontpage Sections', 'planeta'),
));

//Global Options
require_once(get_template_directory() . '/inc/customizer/global/background.php');
require_once(get_template_directory() . '/inc/customizer/global/animations.php');
require_once(get_template_directory() . '/inc/customizer/global/containers.php');
require_once(get_template_directory() . '/inc/customizer/global/typography.php');
require_once(get_template_directory() . '/inc/customizer/global/colors.php');
require_once(get_template_directory() . '/inc/customizer/global/excerpt.php');

//Modules
require_once(get_template_directory() . '/inc/customizer/modules/404.php');
require_once(get_template_directory() . '/inc/customizer/modules/header.php');
require_once(get_template_directory() . '/inc/customizer/modules/footer.php');
require_once(get_template_directory() . '/inc/customizer/modules/page.php');
require_once(get_template_directory() . '/inc/customizer/modules/loading.php');
require_once(get_template_directory() . '/inc/customizer/modules/social-media.php');
require_once(get_template_directory() . '/inc/customizer/modules/related-posts.php');

//Homepage sections
require_once(get_template_directory() . '/inc/customizer/sections/generator.php');
require_once(get_template_directory() . '/inc/customizer/sections/layout.php');

?>

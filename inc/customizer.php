<?php

Kirki::add_config('planeta_config', array(
	'capability'	=> 'edit_theme_options',
	'option_type'	=> 'theme_mod',
));

Kirki::add_field('planeta_config', array());

Kirki::add_panel('advanced_panel', array(
	'title'       => esc_html__('Advanced Options', 'planeta'),
));

Kirki::add_panel('sections_panel', array(
	'title'       => esc_html__('Frontpage Sections', 'planeta'),
));

//Homepage sections
require_once(get_template_directory() . '/inc/customizer/sections/generator.php');
require_once(get_template_directory() . '/inc/customizer/sections/layout.php');

//Global Options
require_once(get_template_directory() . '/inc/customizer/animations.php');
require_once(get_template_directory() . '/inc/customizer/typography.php');
require_once(get_template_directory() . '/inc/customizer/colors.php');
require_once(get_template_directory() . '/inc/customizer/background.php');
require_once(get_template_directory() . '/inc/customizer/header.php');
require_once(get_template_directory() . '/inc/customizer/footer.php');

//Advanced Options
require_once(get_template_directory() . '/inc/customizer/advanced/excerpt.php');
require_once(get_template_directory() . '/inc/customizer/advanced/containers.php');
require_once(get_template_directory() . '/inc/customizer/advanced/loading.php');
require_once(get_template_directory() . '/inc/customizer/advanced/404.php');
require_once(get_template_directory() . '/inc/customizer/advanced/related-posts.php');
require_once(get_template_directory() . '/inc/customizer/advanced/page.php');
require_once(get_template_directory() . '/inc/customizer/advanced/contact-form.php');

?>

<?php

Kirki::add_config('planeta_config', array(
	'capability'	=> 'edit_theme_options',
	'option_type'	=> 'theme_mod',
));

//Frontpage Layout
require_once(get_template_directory() . '/inc/customizer/frontpage-layout.php');

//Frontpage Sections
Kirki::add_panel('sections_panel', array(
	'title'       => esc_html__('Frontpage Sections', 'planeta'),
));
require_once(get_template_directory() . '/inc/customizer/sections/inside-layout.php');
require_once(get_template_directory() . '/inc/customizer/sections/heading.php');
require_once(get_template_directory() . '/inc/customizer/sections/buttons.php');
require_once(get_template_directory() . '/inc/customizer/sections/appearance.php');
require_once(get_template_directory() . '/inc/customizer/video-background.php');
require_once(get_template_directory() . '/inc/customizer/shape.php');
require_once(get_template_directory() . '/inc/customizer/sections/generator.php');

//Global Options
require_once(get_template_directory() . '/inc/customizer/animations.php');
require_once(get_template_directory() . '/inc/customizer/typography.php');
require_once(get_template_directory() . '/inc/customizer/colors.php');
require_once(get_template_directory() . '/inc/customizer/background.php');
require_once(get_template_directory() . '/inc/customizer/header.php');
require_once(get_template_directory() . '/inc/customizer/footer.php');

//Advanced Options
Kirki::add_panel('advanced_panel', array(
	'title'       => esc_html__('Advanced Options', 'planeta'),
));
require_once(get_template_directory() . '/inc/customizer/advanced/excerpt.php');
require_once(get_template_directory() . '/inc/customizer/advanced/containers.php');
require_once(get_template_directory() . '/inc/customizer/advanced/loading.php');
require_once(get_template_directory() . '/inc/customizer/advanced/404.php');
require_once(get_template_directory() . '/inc/customizer/advanced/related-posts.php');
require_once(get_template_directory() . '/inc/customizer/advanced/page.php');
require_once(get_template_directory() . '/inc/customizer/advanced/contact-form.php');

?>

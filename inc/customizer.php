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

Kirki::add_panel('blocks_panel', array(
	'title'       => esc_html__('Homepage Blocks', 'planeta'),
));

//Theme Options
require_once(get_template_directory() . '/inc/customizer/theme_background.php');
require_once(get_template_directory() . '/inc/customizer/theme_container.php');
require_once(get_template_directory() . '/inc/customizer/theme_typography.php');
require_once(get_template_directory() . '/inc/customizer/theme_colors.php');
//require_once(get_template_directory() . '/inc/customizer/theme_cursor.php');

//Modules
//require_once(get_template_directory() . '/inc/customizer/module_page.php');
require_once(get_template_directory() . '/inc/customizer/module_frontpage.php');
require_once(get_template_directory() . '/inc/customizer/module_header.php');
require_once(get_template_directory() . '/inc/customizer/module_footer.php');
//require_once(get_template_directory() . '/inc/customizer/module_blog.php');
require_once(get_template_directory() . '/inc/customizer/module_personal_sidebar.php');
//require_once(get_template_directory() . '/inc/customizer/module_social_media.php');

//Homepage sections
require_once(get_template_directory() . '/inc/customizer/block_generator.php');
require_once(get_template_directory() . '/inc/customizer/block_layout.php');
require_once(get_template_directory() . '/inc/customizer/block_landing.php');
require_once(get_template_directory() . '/inc/customizer/block_portfolio.php');
require_once(get_template_directory() . '/inc/customizer/block_services.php');
require_once(get_template_directory() . '/inc/customizer/block_clients.php');
require_once(get_template_directory() . '/inc/customizer/block_experience.php');
require_once(get_template_directory() . '/inc/customizer/block_testimonials.php');
require_once(get_template_directory() . '/inc/customizer/block_posts.php');
require_once(get_template_directory() . '/inc/customizer/block_mini_sections.php');

?>

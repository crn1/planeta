<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset='<?php bloginfo('charset'); ?>'>
		<meta name='viewport' content='minimum-scale=1, width=device-width, initial-scale=1, shrink-to-fit=no' />
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

		<?php get_template_part('template-parts/loading'); ?>

		<?php
			$hover_class = get_theme_mod('typography_button_link_hover', 'none');
			$hover_class = 'hover-' . $hover_class;
			set_query_var('hover_class', $hover_class);

			$read_more = esc_html__('Read More...', 'planeta');
			set_query_var('read_more', $read_more);
		?>

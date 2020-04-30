<!DOCTYPE html>
<html
		<?php language_attributes(); ?>
		xmlns:fb='http://ogp.me/ns/fb#'>

	<?php get_template_part('template-parts/meta'); ?>

	<body <?php body_class(); ?>>

		<?php get_template_part('template-parts/loading'); ?>

		<?php
			$hover_class = get_theme_mod('typography_button_link_hover', 'none');
			$hover_class = 'hover-' . $hover_class;
			set_query_var('hover_class', $hover_class);

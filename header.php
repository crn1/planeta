<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb='http://ogp.me/ns/fb#'>

	<?php get_template_part('template-parts/meta'); ?>

	<body <?php body_class(); ?>>

		<?php get_template_part('template-parts/loading'); ?>

		<?php
			$hover_class = get_theme_mod('typography_button_link_hover', 'none');
			set_query_var('hover_class', $hover_class);

			if(is_404()) {
				set_query_var('section', 'not_found');
			}else{
				set_query_var('section', 'global');
			}
			get_template_part('template-parts/content/background'); ?>

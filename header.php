<?php
	$url = esc_url_raw(trailingslashit(home_url()));
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb='http://ogp.me/ns/fb#'>

	<?php get_template_part('template-parts/header', 'meta'); ?>

	<body <?php body_class(); ?>>

		<?php
			set_query_var('section', 'global');
			get_template_part('template-parts/content', 'background'); ?>

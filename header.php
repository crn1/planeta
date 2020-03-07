<?php
	$url = esc_url_raw(trailingslashit(home_url()));
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb='http://ogp.me/ns/fb#'>

	<?php get_template_part('template-parts/header', 'meta'); ?>

	<body <?php body_class(); ?>>
		<?php if(is_active_sidebar('promotion')): ?>
			<aside>
				<?php dynamic_sidebar('promotion'); ?>
			</aside>
		<?php endif; ?>
		<header id='main-header' class='header-container'>
			<h1 class='heading-main' id='logo'><?php bloginfo('name'); ?></h1>
			<span id='menu-button' class='heading-main-button'>
				<i class='material-icons'>menu</i>
			</span>
			<nav id='top-menu' class='hidden'>
				<?php
					$params = array(
						'theme_location' 	=> 'top-menu',
						'items_wrap'      => '%3$s',
						'echo'						=> false,
					);
					echo strip_tags(wp_nav_menu($params), '<a>');
				?>
			</nav>
		</header>
		<?php if(is_active_sidebar('extended-header')): ?>
			<div>
				<?php dynamic_sidebar('extended-header'); ?>
			</div>
		<?php endif; ?>

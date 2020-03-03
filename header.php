<?php
	$url = esc_url_raw(trailingslashit(home_url()));
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb='http://ogp.me/ns/fb#'>
	<head>
		<meta charset='<?php bloginfo('charset'); ?>'>
		<meta name='viewport' content='minimum-scale=1, width=device-width, initial-scale=1, shrink-to-fit=no' />
		<meta name='author' content='Đorđe G.' />
		<!--<meta property='og:type' content='website'>
		<meta property='og:description' content='Wordpress and React.js Boilerplate' />
		<meta property='og:image' content='CHANGE_ME' />
		<meta property='og:image:width' content='CHANGE_ME' />
		<meta property='og:image:height' content='CHANGE_ME' />-->
		<meta property='og:url' content='<?php echo($url); ?>'>
		<meta property='og:title' content='Example theme'>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php if(is_active_sidebar('promotion')): ?>
			<aside>
				<?php dynamic_sidebar('promotion'); ?>
			</aside>
		<?php endif; ?>
		<header class='default-container'>
			<h1 class='main-heading' id='logo'><?php bloginfo('name'); ?></h1>
			<span id='menu-button' class='main-heading-button'>
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

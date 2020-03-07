<?php
	$url = esc_url_raw(trailingslashit(home_url()));

	$sticky = get_theme_mod('header_sticky', false) ? 'sticky' : '';
	$header_class = get_theme_mod('header_type', 'header-classic');
	$logo_url = get_theme_mod('header_logo', '');
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
			<header id='main-header' class='<?php echo $sticky; ?> <?php echo $header_class; ?>'>
			<?php if($logo_url != '') {
				echo "<img src='${logo_url}' />";
			} ?>
			<h1 class='heading-main' id='logo'>
			<?php if(get_bloginfo('name') != '') {
				echo '<p>' . get_bloginfo('name') . '</p>';
			} ?>
			</h1>
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

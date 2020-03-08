<?php
	$sticky = get_theme_mod('header_sticky', false) ? 'sticky' : '';
	$header_class = get_theme_mod('header_type', 'header-classic');
	$logo_url = get_theme_mod('header_logo', '');
?>

<header id='main-header' class='<?php echo $sticky; ?> <?php echo $header_class; ?>'>
	<?php if(is_active_sidebar('promotion')): ?>
		<aside>
			<?php dynamic_sidebar('promotion'); ?>
		</aside>
	<?php endif; ?>

	<?php if($logo_url != ''): ?>
		<img src='<?php echo $logo_url; ?>' />
	<?php endif; ?>
	<h1 class='heading-main' id='logo'>
	<?php if(get_bloginfo('name') != ''): ?>
		<p><?php bloginfo('name'); ?></p>
	<?php endif; ?>
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

	<?php if(is_active_sidebar('extended-header')): ?>
		<div>
			<?php dynamic_sidebar('extended-header'); ?>
		</div>
	<?php endif; ?>
</header>

<?php
	$navbar_class = get_theme_mod('navbar_type', 'fullscreen-up');
	$logo_url = get_theme_mod('logo', '');
?>

<header id='main-header' class='default-container'>

	<nav id='top-menu' class='menu-<?php echo $navbar_class; ?>'>
	<?php
		$params = array(
			'theme_location' 	=> 'top-menu',
			'items_wrap'      => '%3$s',
			'echo'						=> false,
		);
		echo strip_tags(wp_nav_menu($params), '<a>');
	?>
	</nav>

	<div id='logo-container'>
	<?php if($logo_url != ''): ?>
		<img id='logo' src='<?php echo $logo_url; ?>' />
	<?php endif; ?>
	</div>

	<span id='menu-button' class='heading-main-button'>
		<i class='material-icons'>menu</i>
	</span>

</header>


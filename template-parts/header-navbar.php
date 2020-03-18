<?php
	$navbar_class = get_theme_mod('navbar_type', 'fullscreen-up');
	$logo_url = get_theme_mod('logo', '');
?>

<header id='logo-container'>
<?php if($logo_url != ''): ?>
	<a href='/'>
		<img id='logo' src='<?php echo $logo_url; ?>' />
	</a>
<?php endif; ?>
</header>

<span id='menu-button' class='heading-main-button'>
	<i class='material-icons'>menu</i>
</span>

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

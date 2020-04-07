<?php
	$logo_url = get_theme_mod('logo', '');
	$logo_text = get_theme_mod('logo_text', '');

	$render_social = get_theme_mod('social_menu_header', false);
	$navbar_class = get_theme_mod('navbar_type', 'up');
	$hamburger_class = get_theme_mod('hamburger_class', '3dx');

	function nav_items()
	{
		$hover_class = get_theme_mod('typography_button_link_hover', 'none');
		$layout = get_theme_mod('sections_layout', array());
		foreach($layout as $section)
		{
			$name = get_theme_mod("${section}_name", 'Section');
			$slug = sanitize_title($name);
			echo "<span class='relative top-menu-item ${hover_class}'><a href='#${slug}' data-section-id='${section}' class='button-link'>${name}</a></span>";
		}
	}
?>

<header id='main-header'>
	<a href='/' id='logo-container'>
		<?php if($logo_url != ''): ?>
			<img id='logo' src='<?php echo $logo_url; ?>' />
		<?php endif; ?>
	</a>

	<button
			id='menu-button'
			class='hamburger hamburger--<?php echo $hamburger_class; ?>'
			type='button'>
		<span class='hamburger-box'>
			<span class='hamburger-inner'></span>
		</span>
	</button>
</header>

<nav
		id='top-menu'
		class='menu-<?php echo $navbar_class; ?>'>
	<?php nav_items(); ?>

	<?php if($render_social): ?>
		<?php get_template_part('template-parts/content/social'); ?>
	<?php endif; ?>
</nav>

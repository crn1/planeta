<?php
	$logo_id = get_theme_mod('logo', '');
	if(!empty($logo_id))
	{
		$logo_url = wp_get_attachment_url($logo_id);
		$logo_alt = get_post_meta($logo_id, '_wp_attachment_image_alt', true);
	}
	$logo_text = get_theme_mod('logo_text', '');

	$render_social = get_theme_mod('social_menu_header', false);
	$navbar_class = get_theme_mod('navbar_type', 'up');
	$hamburger_class = get_theme_mod('hamburger_class', '3dx');

	function nav_items()
	{
		$layout = get_theme_mod('sections_layout', array());
		foreach($layout as $section)
		{
			$name = get_theme_mod("${section}_name", 'Section');
			$slug = sanitize_title($name); ?>
			<span
					class='top-menu-item relative hover-<?php echo get_query_var('hover_class', 'none'); ?>'>
				<a
						id='<?php echo $section; ?>-top-menu-item'
						href='#<?php echo $slug; ?>'
						data-section-id='<?php echo $section; ?>'
						class='button-link'>
					<?php echo $name; ?>
				</a>
			</span>
			<?php
		}
	}
?>

<header id='main-header'>
	<a href='/' id='logo-container'>
		<?php if($logo_url != ''): ?>
			<img
					id='logo'
					alt='<?php echo $logo_alt; ?>'
					src='<?php echo $logo_url; ?>'
			/>
		<?php endif; ?>
	</a>

	<span id="hamburger-container">
		<button
				id='menu-button'
				class='hamburger hamburger--<?php echo $hamburger_class; ?>'
				type='button'>
			<span class='hamburger-box'>
				<span class='hamburger-inner'></span>
			</span>
		</button>
	</span>
</header>

<nav
		id='top-menu'
		class='menu-<?php echo $navbar_class; ?>'>
	<?php nav_items(); ?>

	<?php if($render_social): ?>
		<?php get_template_part('template-parts/content/social'); ?>
	<?php endif; ?>
</nav>

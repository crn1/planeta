<?php
	$reverse = get_theme_mod('navbar_reverse', false);

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
						href='<?php echo get_home_url() . '/#' . $slug; ?>'
						data-section-id='<?php echo $section; ?>'
						class='button-link'>
					<?php echo $name; ?>
				</a>
			</span>
			<?php
		}
	}

	function logo_container()
	{
		$logo_id = get_theme_mod('logo', '');
		if(!empty($logo_id))
		{
			$logo_url = wp_get_attachment_url($logo_id);
			$logo_alt = get_post_meta($logo_id, '_wp_attachment_image_alt', true);
		}
		$logo_text = get_theme_mod('logo_text', ''); ?>

		<a href='/' id='logo-container'>
			<?php if($logo_url != ''): ?>
				<img
						id='logo'
						alt='<?php echo $logo_alt; ?>'
						src='<?php echo $logo_url; ?>'
				/>
			<?php endif; ?>
		</a>

		<?php
	}
?>

<header id='main-header'>
	<?php if(!$reverse): ?>
		<?php logo_container(); ?>
	<?php endif; ?>

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

	<?php if($reverse): ?>
		<?php logo_container(); ?>
	<?php endif; ?>
</header>

<nav
		id='top-menu'
		class='menu-<?php echo $navbar_class; ?>'>

	<?php nav_items(); ?>
	<?php get_template_part('template-parts/content/social'); ?>

</nav>

<?php get_template_part('template-parts/content/scroll-top-button'); ?>

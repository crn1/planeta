<?php

function nav_items()
{
	$layout = get_theme_mod('sections_layout', array());
	foreach($layout as $section)
	{
		$name = get_theme_mod("${section}_name", 'Section');
		if(!empty($name))
		{
			$hover_class = get_query_var('hover_class', 'hover-class');
			$slug = sanitize_title($name); ?>
			<span
					class='top-menu-item relative <?php echo $hover_class; ?>'>
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
}

function logo_container()
{
	$reverse = get_theme_mod('navbar_reverse', false);
	$logo_reverse =	!$reverse ? '' : 'class="reverse"';
	$logo_id = get_theme_mod('logo', '');
	$logo_url = '';
	$logo_alt = '';
	if(!empty($logo_id))
	{
		$logo_url = wp_get_attachment_url($logo_id);
		$logo_alt = get_post_meta($logo_id, '_wp_attachment_image_alt', true);
	}
	$logo_text = get_theme_mod('logo_text', ''); ?>

	<a
			<?php echo $logo_reverse; ?>
			href='/'
			id='logo-container'>
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

<?php
$reverse = get_theme_mod('navbar_reverse', false);
$hamburger_reverse = $reverse ? 'class="reverse"' : '';
$hamburger_class = 'hamburger--' . get_theme_mod('hamburger_class', '3dx');
?>
<header id='main-header'>
	<?php logo_container(); ?>

	<span
			<?php echo $hamburger_reverse; ?>
			id="hamburger-container">
		<button
				id='menu-button'
				class='hamburger <?php echo $hamburger_class; ?>'
				type='button'>
			<span class='hamburger-box'>
				<span class='hamburger-inner'></span>
			</span>
		</button>
	</span>
</header>

<?php $navbar_class = 'menu-' . get_theme_mod('navbar_type', 'top'); ?>
<nav
		id='top-menu'
		class='<?php echo $navbar_class; ?>'>

	<?php nav_items(); ?>
	<?php get_template_part('template-parts/content/social'); ?>
</nav>

<?php get_template_part('template-parts/content/scroll-top-button'); ?>

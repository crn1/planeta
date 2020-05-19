<?php

function header_menu()
{
	$hover_class = get_query_var('hover_class', 'hover-none'); ?>

	<div id='header-menu' class='relative'>
		<?php
			$params = array(
				'theme_location' 	=> 'header-menu',
				'items_wrap'      => '%3$s',
				'echo'						=> false,
			);
			$menu = strip_tags(wp_nav_menu($params), '<a>');
			$menu = str_replace('<a', "<span class='relative ${hover_class}'><a class='button-link'", $menu);
			$menu = str_replace('</a>', "</a></span>", $menu);
			echo $menu;
		?>
	</div>
<?php }

function nav_items()
{ ?>
	<div id='onepage-menu'>
		<?php
		$layout = get_theme_mod('sections_layout', array());
		foreach($layout as $section)
		{
			$name = get_theme_mod("${section}_name", 'Section');
			if(!empty($name))
			{
				$hover_class = get_query_var('hover_class', 'hover-class');
				$slug = sanitize_title($name); ?>
				<span
						class='relative <?php echo sanitize_html_class($hover_class); ?>'>
					<a
							href='<?php echo get_home_url() . '/#' . $slug; ?>'
							data-section-id='<?php echo esc_attr($section); ?>'
							class='button-link'>
						<?php echo esc_html($name); ?>
					</a>
				</span>
			<?php
			}
		} ?>
	</div>
<?php }

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
			<?php echo esc_attr($logo_reverse); ?>
			href='/'
			id='logo-container'>
		<?php if($logo_url != ''): ?>
			<img
					id='logo'
					alt='<?php echo esc_attr($logo_alt); ?>'
					src='<?php echo esc_url($logo_url); ?>'
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
			<?php echo esc_attr($hamburger_reverse); ?>
			id="hamburger-container">
		<button
				id='menu-button'
				class='hamburger <?php echo sanitize_html_class($hamburger_class); ?>'
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
		class='<?php echo sanitize_html_class($navbar_class); ?>'>

	<?php nav_items(); ?>
	<?php get_template_part('template-parts/content/social'); ?>
	<?php echo header_menu(); ?>
</nav>

<?php get_template_part('template-parts/content/scroll-top-button'); ?>

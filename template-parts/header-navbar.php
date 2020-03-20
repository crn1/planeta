<?php
	$hover_class = get_theme_mod('typography_links_hover', 'none');

	$navbar_class = get_theme_mod('navbar_type', 'up');
	$logo_url = get_theme_mod('logo', '');

	function nav_items($hover_class)
	{
		if(get_theme_mod('show_sections_nav', false))
		{
			$layout = get_theme_mod('sections_layout', array());
			foreach($layout as $section)
			{
				$name = get_theme_mod("${section}_name", 'Section');
				$slug = sanitize_title($name);
				echo "<a href='#${slug}' data-section-id='${section}' class='top-navbar-item'>${name}</a>";
			}
		}else{
			$params = array(
				'theme_location' 	=> 'top-menu',
				'items_wrap'      => '%3$s',
				'echo'						=> false,
			);
			echo strip_tags(wp_nav_menu($params), '<a>');
		}
	}
?>

<header id='main-header' class='header-container'>
	<?php
		set_query_var('section', 'header');
		get_template_part('template-parts/content', 'background'); ?>

	<?php if($logo_url != ''): ?>
		<a href='/' id='logo-container'>
			<img id='logo' src='<?php echo $logo_url; ?>' />
		</a>
	<?php endif; ?>

	<div id='nav-container'>
		<?php if(is_front_page()): ?>
			<nav id='top-menu' class='<?php echo $hover_class; ?>'>
				<?php nav_items($hover_class); ?>
			</nav>
		<?php endif; ?>

		<span id='menu-button' class='heading-main-button'>
			<i class='material-icons'>menu</i>
		</span>
	</div>
</header>

<div id='menu-container' class='menu-<?php echo $navbar_class; ?>'>
</div>

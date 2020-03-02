<header>
	<div class='default-container'>
		<h1 class='main-heading' id='logo'><?php bloginfo('name'); ?></h1>
		<i class='main-heading material-icons' id='menu-button'>menu</i>
	</div>
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

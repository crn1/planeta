<?php
	$header_class = get_theme_mod('header_type', 'header-classic');
	$logo_url = get_theme_mod('header_logo', '');
?>

<?php if(is_active_sidebar('promotion')): ?>
	<div id='promotion' class='default-container'>
		<?php dynamic_sidebar('promotion'); ?>
	</div>
	<script>
		Macy({
			container: '#promotion',
			columns: <?php echo get_theme_mod('promotion_container', 3); ?>,
			breakAt: {
				960: <?php echo get_theme_mod('promotion_container', 3) == 1 ? 1: 2; ?>,
				768: 1,
			},
			margin: 16,
		});
	</script>
<?php endif; ?>

<header id='main-header' class='<?php echo $header_class; ?>'>

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

</header>

<?php if(is_active_sidebar('extended-header')): ?>
	<div id='extended-header' class='default-container'>
		<?php dynamic_sidebar('extended-header'); ?>
	</div>
	<script>
		Macy({
			container: '#extended-header',
			columns: <?php echo get_theme_mod('extended_header_container', 3); ?>,
			breakAt: {
				960: <?php echo get_theme_mod('extended_header_container', 3) == 1 ? 1: 2; ?>,
				768: 1,
			},
			margin: 16,
		});
	</script>
<?php endif; ?>

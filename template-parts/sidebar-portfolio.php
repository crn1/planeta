<?php
	$avatar = get_theme_mod('portfolio_avatar', '');
	$name = get_theme_mod('portfolio_name', 'John Doe');
	$profession = get_theme_mod('portfolio_profession', 'Frontend Developer');
	$header = get_theme_mod('portfolio_header', false);
	$footer = get_theme_mod('portfolio_footer', false);
?>
<aside id='sidebar-portfolio'>
	<?php if($avatar != ''): ?>
		<img class='image' id='sidebar-portfolio-avatar' src='<?php echo $avatar; ?>'>
	<?php endif; ?>

	<div id='sidebar-portfolio-info'>
		<?php if($header): ?>
			<?php get_template_part('template-parts/header', 'navbar'); ?>
		<?php endif; ?>

		<?php if($name != ''): ?>
			<h2 class='heading-subtitle' id='sidebar-portfolio-name'>
				<?php echo $name; ?>
			</h2>
		<?php endif; ?>
		<?php if($profession != ''): ?>
			<p id='sidebar-portfolio-profession'>
				<?php echo $profession; ?>
			</p>
		<?php endif; ?>
		<?php if(is_active_sidebar('sidebar-portfolio')): ?>
			<div id='portfolio-sidebar-widgets'>
				<?php dynamic_sidebar('sidebar-portfolio'); ?>
			</div>
		<?php endif; ?>

		<?php if($footer): ?>
			<?php get_template_part('template-parts/footer', 'notice'); ?>
		<?php endif; ?>
	</div>
</aside>

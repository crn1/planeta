<?php
	$title = get_theme_mod('404_title', '404');
	$subtitle = get_theme_mod('404_subtitle', 'Page not Found!');
	$homepage = get_theme_mod('404_homepage', 'Return to Homepage');
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/header', 'navbar'); ?>
<main id='not-found-container' class='default-container'>
	<h1 class='page-title'>
		<?php echo $title; ?>
	</h1>
	<h2 class='page-subtitle'>
		<?php echo $subtitle; ?>
	</h2>
	<h2 class='not-found-homepage'>
		<a href='/'>
		<?php echo $homepage; ?>
		</a>
	</h2>
</main>
<?php get_template_part('template-parts/footer', 'notice'); ?>
<?php get_footer(); ?>

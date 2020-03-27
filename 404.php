<?php
	$image_url = get_theme_mod('404_image', '');
	$title = get_theme_mod('404_title', '404');
	$subtitle = get_theme_mod('404_subtitle', 'Page not Found!');
	$homepage = get_theme_mod('404_homepage', 'Return to Homepage');
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/header'); ?>
<main id='not-found-container' class='default-container'>
	<?php if($image_url != ''): ?>
		<img id='logo' src='<?php echo $image_url; ?>' />
	<?php endif; ?>
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
<?php get_footer(); ?>

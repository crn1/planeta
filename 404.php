<?php
	$image_id = get_theme_mod('404_image', '');
	if(!empty($image_id))
	{
		$image_url = wp_get_attachment_url($image_id);
		$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
	}

	$title = get_theme_mod('404_title', '404');
	$subtitle = get_theme_mod('404_subtitle', 'Page not Found!');

	$homepage = get_theme_mod('404_homepage', 'Return to Homepage');
	$hover_class = get_theme_mod('typography_button_link_hover', 'none');
?>
<?php get_header(); ?>
<?php get_template_part('template-parts/navbar'); ?>
<main id='not-found-container' class='default-container'>
	<?php if(!empty($image_id)): ?>
		<img
				id='logo'
				alt='<?php echo esc_attr($image_alt); ?>'
				src='<?php echo esc_url($image_url); ?>'
		/>
	<?php endif; ?>
	<h1 class='not-found-title'>
		<?php echo esc_html($title); ?>
	</h1>
	<h2 class='not-found-subtitle'>
		<?php echo esc_html($subtitle); ?>
	</h2>
	<p id='not-found-homepage'>
		<span class='relative hover-<?php echo esc_attr($hover_class); ?>'>
			<a
					class='button-link'
					href='/'>
				<?php echo esc_html($homepage); ?>
			</a>
		</span>
	</p>
</main>
<?php get_footer(); ?>

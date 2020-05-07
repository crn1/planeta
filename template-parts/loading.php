<?php

$render_loading = get_theme_mod('loading_enable', false);

if($render_loading):
	$text = get_theme_mod('loading_text', '');

	$logo_id = get_theme_mod('loading_logo', '');
	if(!empty($logo_id))
	{
		$logo_url = wp_get_attachment_url($logo_id);
		$logo_alt = get_post_meta($logo_id, '_wp_attachment_image_alt', true);
	}

	$animation_id = get_theme_mod('loading_animation', '');
	if(!empty($animation_id))
	{
		$animation_url = wp_get_attachment_url($animation_id);
		$animation_alt = get_post_meta($animation_id, '_wp_attachment_image_alt', true);
	} ?>

<div id='loading-container'>

	<?php if(!empty($logo_id)): ?>
		<img
			class='logo'
			alt='<?php echo esc_attr($logo_alt); ?>'
			src='<?php echo esc_url($logo_url); ?>'
		/>
	<?php endif; ?>

	<?php if(!empty($animation_id)): ?>
		<img
			class='animation'
			alt='<?php echo esc_attr($animation_alt); ?>'
			src='<?php echo esc_url($animation_url); ?>'
		/>
	<?php endif; ?>

	<?php if(!empty($text)): ?>
		<p class='text'>
			<?php echo esc_html($text); ?>
		</p>
	<?php endif; ?>

</div>

<?php endif; ?>

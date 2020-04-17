<?php

$render = get_theme_mod('scroll_top_enable', true);

if($render): ?>

<div id='scroll-top-button'>

<?php
	$custom_icon = get_theme_mod('scroll_top_enable_custom', false);
	if($custom_icon)
	{
		$image_id = get_theme_mod('scroll_top_custom_icon', '');
		if(!empty($image_id))
		{
			$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
			$image_url = wp_get_attachment_url($image_id);
			echo "<img
				alt='${image_alt}'
				src='${image_url}'
			/>";
		}else{
			$alt = esc_html__('Scroll Top Button Icon', 'planeta');
			return "<i alt='${alt}' class='icofont-simple-up'></i>";
		}
	}else{
		$icon_class = get_theme_mod('scroll_top_icon', 'simple-up');
		echo "<i class='icofont-${icon_class}'></i>";
	}
?>

</div>

<?php endif; ?>

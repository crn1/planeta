<?php
	$url = esc_url_raw(trailingslashit(home_url()));

	$video = get_theme_mod('global_bg_type', 'static') == 'video' ? true : false;
	$mp4_url = get_theme_mod('global_video_url_mp4', '');
	$webm_url = get_theme_mod('global_video_url_webm', '');
	$ogg_url = get_theme_mod('global_video_url_ogg', '');

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns:fb='http://ogp.me/ns/fb#'>

	<?php get_template_part('template-parts/header', 'meta'); ?>

	<body <?php body_class(); ?>>

		<?php if($video): ?>
			<div class='video-overlay' id='body-video-overlay'></div>
			<video autoplay loop muted class='video-background'>
				<?php if($mp4_url != ''): ?>
					<source src='<?php echo $mp4_url; ?>' type='video/mp4'>
				<?php endif; ?>
				<?php if($webm_url != ''): ?>
					<source src='<?php echo $webm_url; ?>' type='video/webm'>
				<?php endif; ?>
				<?php if($ogg_url != ''): ?>
					<source src='<?php echo $ogg_url; ?>' type='video/mp4'>
				<?php endif; ?>
			</video>
		<?php endif; ?>

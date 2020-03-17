<?php
	$section = get_query_var('section');

	$video = get_theme_mod("${section}_bg_type", 'static') == 'video' ? true : false;

	$mp4_url = get_theme_mod("${section}_video_url_mp4", '');
	$webm_url = get_theme_mod("${section}_video_url_webm", '');
	$ogg_url = get_theme_mod("${section}_video_url_ogg", '');
	$img_url = get_theme_mod("${section}_fallback_image_url", '');
?>
<?php if($video): ?>
<div class='video-overlay' id='<?php echo $section; ?>-video-overlay'></div>
	<video autoplay loop muted class='video-background' poster='<?php echo $img_url; ?>'>
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

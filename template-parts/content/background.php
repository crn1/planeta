<?php
	$section = get_query_var('section');

	//Because you can't call get_template_part twice (?)
	ob_start();
	get_template_part('template-parts/content/shape');
	$shape = ob_get_contents();
	ob_end_clean();

	$video = get_theme_mod("${section}_bg_type", 'static') == 'video' ? true : false;

	$mp4 = get_theme_mod("${section}_video_url_mp4", '');
	$webm = get_theme_mod("${section}_video_url_webm", '');
	$ogg = get_theme_mod("${section}_video_url_ogg", '');
	$img = get_theme_mod("${section}_fallback_image_url", '');
?>
<div
	<?php echo esc_attr($shape); ?>
	class='background-overlay'></div>
<?php if($video): ?>
<video
		<?php echo esc_attr($shape); ?>
		autoplay loop muted
		class='video-background'
		poster='<?php echo esc_url($img); ?>'>

	<?php if($mp4 != ''): ?>
		<source
				src='<?php echo esc_url($mp4); ?>' type='video/mp4'>
	<?php endif; ?>

	<?php if($webm != ''): ?>
		<source src='<?php echo esc_url($webm); ?>' type='video/webm'>
	<?php endif; ?>

	<?php if($ogg != ''): ?>
		<source src='<?php echo esc_url($ogg); ?>' type='video/mp4'>
	<?php endif; ?>

</video>
<?php endif; ?>

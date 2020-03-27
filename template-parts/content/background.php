<?php
	$section = get_query_var('section');
	$setting = $section . '_background';
	set_query_var('setting', $setting);

	//Because you can't call get_template_part twice
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
	<?php echo $shape; ?>
	class='background-overlay'
	id='<?php echo $section; ?>-overlay'></div>
<?php if($video): ?>
<video
		<?php echo $shape; ?>
		autoplay loop muted
		id='<?php echo $section; ?>-video-background'
		class='video-background'
		poster='<?php echo $img; ?>'>

	<?php if($mp4 != ''): ?>
		<source
				src='<?php echo $mp4; ?>' type='video/mp4'>
	<?php endif; ?>

	<?php if($webm != ''): ?>
		<source src='<?php echo $webm; ?>' type='video/webm'>
	<?php endif; ?>

	<?php if($ogg != ''): ?>
		<source src='<?php echo $ogg; ?>' type='video/mp4'>
	<?php endif; ?>

</video>
<?php endif; ?>

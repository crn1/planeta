<?php

$section = get_query_var('section');
$mp4 = get_theme_mod("${section}_heading_mp4");
$webm = get_theme_mod("${section}_heading_webm");
$ogg = get_theme_mod("${section}_heading_ogg");

if($mp4 != '' || $webm != '' || $ogg != ''):
?>

<div
		id='<?php echo $section; ?>-heading-video-container'
		class='heading-video-container'>
	<video
			controls
			id='<?php echo $section; ?>-heading-video'
			poster='<?php echo $img; ?>'>

		<?php if($mp4 != ''): ?>
			<source src='<?php echo $mp4; ?>' type='video/mp4'>
		<?php endif; ?>

		<?php if($webm != ''): ?>
			<source src='<?php echo $webm; ?>' type='video/webm'>
		<?php endif; ?>

		<?php if($ogg != ''): ?>
			<source src='<?php echo $ogg; ?>' type='video/mp4'>
		<?php endif; ?>

	</video>
</div>

<?php endif; ?>

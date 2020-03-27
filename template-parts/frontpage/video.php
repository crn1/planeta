<?php

$section = get_query_var('section');
$mp4 = get_theme_mod("${section}_heading_mp4");
$webm = get_theme_mod("${section}_heading_webm");
$ogg = get_theme_mod("${section}_heading_ogg");
$poster = get_theme_mod("${section}_heading_ogg");

if($mp4 != '' || $webm != '' || $ogg != ''):
	set_query_var('animation_name', 'section_video');
	get_template_part('template-parts/content/animations');
	$aos = get_query_var('section_video_aos');
	$lax = get_query_var('section_video_lax');
	$lax_class = $lax != '' ? 'lax' : '';
?>

<video
		controls
		class='section-video <?php echo $lax_class; ?>'
		<?php echo $lax; ?>
		<?php echo $aos; ?>>

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

<?php endif; ?>

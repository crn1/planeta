<?php
$render_loading = get_theme_mod('loading_enable', false);
if($render_loading):
	$image = get_theme_mod('loading_image'); ?>

<div id='loading-container'>
	<img
		src='<?php echo $image; ?>'
	/>
</div>

<?php endif; ?>

<?php

$render = get_theme_mod('scroll_down_enable', true);

if($render):
	$icon_class = get_theme_mod('scroll_down_icon', 'simple-down'); ?>

<div id='scroll-down-button'>
	<i class='icofont-<?php echo sanitize_html_class($icon_class); ?>'>
	</i>
</div>

<?php endif; ?>

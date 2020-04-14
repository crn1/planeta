<?php

$render = get_theme_mod('scroll_top_enable', true);
if($render):
	$icon_class = get_theme_mod('scroll_top_icon', 'simple-up'); ?>

<div id="scroll-top-button">
	<i class='icofont-<?php echo $icon_class; ?>'></i>
</div>

<?php endif; ?>

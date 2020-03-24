<div class='social-container'>
	<?php

	$hover_class = get_theme_mod('typography_links_hover', 'none');
	$items = get_theme_mod('social_menu_items', array());

	foreach($items as $item): ?>

		<a class='social-item' href='<?php echo $item['url']; ?>'>
			<i class='icofont-<?php echo $item['service']; ?>'></i>
		</a>

	<?php endforeach; ?>
</div>

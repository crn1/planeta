<div class='social-container'>
	<?php

	$items = get_theme_mod('social_menu_items', array());

	foreach($items as $item): ?>

		<a class='button-link social-item' href='<?php echo $item['url']; ?>'>
			<i class='icofont-<?php echo $item['service']; ?>'></i>
		</a>

	<?php endforeach; ?>
</div>

<?php

$render_social = get_theme_mod('social_menu_header', false);

if($render_social): ?>

<div class='social-container'>
	<?php

	$items = get_theme_mod('social_menu_items', array());
	$hover_class = get_query_var('hover_class');

	foreach($items as $item): ?>

		<span
				class='top-menu-item relative hover-<?php echo get_query_var('hover_class', 'none'); ?>'>
			<a
					href='<?php echo $item['url']; ?>'
					class='button-link'>
				<i class='icofont-<?php echo $item['service']; ?>'></i>
			</a>
		</span>

	<?php endforeach; ?>
</div>

<?php endif; ?>

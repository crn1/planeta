<?php
$items = get_theme_mod('social_menu_items', array());
if(count($items)): ?>
<div class='social-container'>
	<?php
	$hover_class = get_query_var('hover_class', 'hover-none');
	foreach($items as $item): ?>
		<span
				class='top-menu-item relative <?php echo $hover_class; ?>'>
			<a
					href='<?php echo $item['url']; ?>'
					class='button-link'>
				<i class='icofont-<?php echo $item['service']; ?>'></i>
			</a>
		</span>
	<?php endforeach; ?>
</div>
<?php endif; ?>

<?php
$items = get_theme_mod('social_menu_items', array());
if(count($items)): ?>
<div class='social-container'>
	<?php
	$hover_class = get_query_var('hover_class', 'hover-none');
	foreach($items as $item): ?>
		<span
				class='top-menu-item relative <?php echo sanitize_html_class($hover_class); ?>'>
			<a
					href='<?php echo esc_url($item['url']); ?>'
					class='button-link'>
				<i class='icofont-<?php echo sanitize_html_class($item['service']); ?>'></i>
			</a>
		</span>
	<?php endforeach; ?>
</div>
<?php endif; ?>

<?php
$items = get_theme_mod('social_menu_items', array());
if(count($items)): ?>
<div class='social-container'>
	<?php
	foreach($items as $item): ?>
		<span
				class='relative'>
			<a
					href='<?php echo esc_url($item['url']); ?>'
					class='button-link'>
				<i class='icofont-<?php echo sanitize_html_class($item['service']); ?>'></i>
			</a>
		</span>
	<?php endforeach; ?>
</div>
<?php endif; ?>

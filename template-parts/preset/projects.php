<?php

$item = get_query_var('item');

if(array_key_exists('title', $item)): ?>
	<h3 class='title primary-text'>
		<?php echo $item['title']; ?>
	</h3>
<?php endif; ?>

<?php if(array_key_exists('description', $item)): ?>
	<p class='description secondary-text'>
		<?php echo $item['description']; ?>
	</p>
<?php endif; ?>

<?php
	if(array_key_exists('url', $item)):
		$hover_class = get_theme_mod('typography_button_link_hover', 'none');
		$url_tab = $item['url_tab'] ? '_blank' : ''; ?>

<p class='url'>
	<span class='relative hover-<?php echo $hover_class; ?>'>
		<a
				class='button-link'
				href='<?php echo $item['url']; ?>'
				target='<?php echo $url_tab; ?>'>

			<?php echo esc_html__('Read More...', 'planeta'); ?>

		</a>
	</span>
</p>

<?php endif; ?>

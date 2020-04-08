<?php

$item = get_query_var('item');

$render_title = array_key_exists('title', $item);
$render_title = $render_title ? !empty($item['title']) : false;

$render_url = array_key_exists('url', $item);
$render_url = $render_title ? !empty($item['url']) : false; ?>

<?php if($render_title && $render_url):
	$hover_class = get_query_var('hover_class');
	$url_tab = $item['url_tab'] ? '_blank' : ''; ?>

	<p class='button-link'>
		<span class='url relative hover-<?php echo $hover_class; ?>'>
			<a
					href='<?php echo $item['url']; ?>'
					target='<?php echo $item['url_tab']; ?>'>

				<?php echo $item['title'] ?>

			</a>
		</span>
	</p>

<?php endif; ?>

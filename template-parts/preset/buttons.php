<?php

$item = get_query_var('item');

$render_title = array_key_exists('title', $item);
$render_title = $render_title ? !empty($item['title']) : false;

$render_url = array_key_exists('url', $item);
$render_url = $render_title ? !empty($item['url']) : false; ?>

<?php if($render_title && $render_url):
	$hover_class = get_theme_mod('typography_button_link_hover', 'none');
	$url_tab = $item['url_tab'] ? '_blank' : ''; ?>

	<p class='url primary-text <?php echo $hover_class; ?>'>
		<a class='button-link' href='<?php echo $item['url']; ?>' target='<?php echo $item['url_tab']; ?>'>
			<?php echo $item['title'] ?>
		</a>
	</p>
<?php endif; ?>

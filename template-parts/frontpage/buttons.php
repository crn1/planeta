<?php

$section = get_query_var('section');

$items = get_theme_mod("${section}_buttons", array());

if(!empty($items)): ?>

<div class='section-buttons'>
	<?php
		foreach($items as $item)
		{
			$render_title = array_key_exists('title', $item);
			$render_title = $render_title ? !empty($item['title']) : false;

			$render_url = array_key_exists('url', $item);
			$render_url = $render_title ? !empty($item['url']) : false; ?>

			<?php if($render_title && $render_url):
				$hover_class = get_query_var('hover_class', 'hover-none');
				$url_tab = $item['url_tab'] ? '_blank' : ''; ?>

				<span class='relative <?php echo $hover_class; ?>'>
					<a
							class='button-link'
							href='<?php echo $item['url']; ?>'
							target='<?php echo $url_tab; ?>'>

						<?php echo $item['title'] ?>

					</a>
				</span>

			<?php endif;
		}
	?>
</div>

<?php endif; ?>

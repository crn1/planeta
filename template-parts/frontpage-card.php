<?php
	$item = get_query_var('item');
	$card_type = get_query_var('card_type');
?>

<div class='card-<?php echo $card_type; ?>'>

<?php
	if(array_key_exists('image', $item))
	{
		$image_url = wp_get_attachment_image_src($item['image'], 'large')[0];
		echo "<img src='${image_url}' class='card-image' />";
	} ?>

	<div class='card-info'>

	<?php
		if(array_key_exists('title', $item))
		{
			echo "<h3 class='card-title'>${item['title']}</h3>";
		}

		if(array_key_exists('date_span', $item))
		{
			echo "<p class='card-date-span'>${item['date_span']}</p>";
		}

		if(array_key_exists('description', $item))
		{
			echo "<p class='card-description'>${item['description']}</p>";
		}

		if(array_key_exists('url', $item))
		{
			$read_more = esc_html__('Read More...', 'planeta');
			$url_tab = $item['url_tab'] ? '_blank' : '';
			echo "<p class='card-url'><a href='${item['url']}' target='${url_tab}'>${read_more}</a></p>";
		}

		if(array_key_exists('author', $item))
		{
			echo "<p class='card-author'>${item['author']}</p>";
		}

		if(array_key_exists('author_profession', $item))
		{
			echo "<p class='card-author-profession'>${item['author_profession']}</p>";
		} ?>

	</div>

</div>


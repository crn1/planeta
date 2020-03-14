<?php
	$item = get_query_var('item');
	$card_class = get_query_var('card_class');
	$item = array_merge(array(
		'title'							=> 'Block Title',
		'description'				=> 'Lorem ipsum dolor sit amet',
		'url'								=> '',
		'url_tab'						=> '',
		'image'							=> '',
		'date_span'					=> '',
		'author'						=> '',
		'author_profession' => '',
	), $item); ?>

<div class='<?php echo $card_class; ?>'>

<?php
	if($item['image'])
	{
		$image_url = wp_get_attachment_image_src($item['image'], 'large')[0];
		echo "<img src='${image_url}' class='image' />";
	} ?>

	<div class='info'>

	<?php
		echo "<h3 class='title'>${item['title']}</h3>";

		if($item['date_span'])
		{
			echo "<p class='date-span'>${item['date_span']}</p>";
		}

		echo "<p class='description'>${item['description']}</p>";

		if($item['url'])
		{
			$read_more = esc_html__('Read More...', 'planeta');
			$url_tab = $item['url_tab'] ? '_blank' : '';
			echo "<p class='url'><a href='${item['url']}' target='${url_tab}'>${read_more}</a></p>";
		}

		if($item['author'])
		{
			echo "<p class='author'>${item['author']}</p>";
		}

		if($item['author_profession'])
		{
			echo "<p class='author-profession'>${item['author_profession']}</p>";
		} ?>

	</div>

</div>


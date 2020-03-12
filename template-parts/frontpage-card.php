<?php
	$item = get_query_var('item');
	$card_class = get_query_var('card_class');
	$item = array_merge(array(
		'title'							=> 'Block Title',
		'description'				=> 'Lorem ipsum dolor sit amet',
		'url'								=> 'http://example.org',
		'url_tab'						=> '',
		'image'							=> '',
		'date_span'					=> '',
		'author'						=> '',
		'author_profession' => '',
	), $item);

	echo "<div class='${card_class}'>";

	if($item['image'])
	{
		$image_url = wp_get_attachment_image_src($item['image'], 'large')[0];
		echo "<img src='${image_url}' class='image' />";
	}

	echo "<h3 class='title'>${item['title']}</h3>";

	echo $item['date_span'] && "<p class='date-span'>${item['date_span']}</p>";

	echo "<p class='description'>${item['description']}</p>";

	if($item['url'])
	{
		$url_tab = $item['url_tab'] ? '_blank' : '';
		echo "<a href='${item['url']}' target='${url_tab}>' class='url'>Promeni me!</a>";
	}

	echo $item['author'] && "<p class='author'>${item['author']}</p>";

	echo $item['author_profession'] &&  "<p class='author-profession'>${item['author_profession']}</p>";

	echo "</div>"
?>


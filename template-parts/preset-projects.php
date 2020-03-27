<?php

$item = get_query_var('item');

if(array_key_exists('title', $item))
{
	echo "<h3 class='title primary-text'>${item['title']}</h3>";
}

if(array_key_exists('description', $item))
{
	echo "<p class='description secondary-text'>${item['description']}</p>";
}

if(array_key_exists('url', $item))
{
	$read_more = esc_html__('Read More...', 'planeta');
	$url_tab = $item['url_tab'] ? '_blank' : '';
	echo "<p class='url'><a href='${item['url']}' target='${url_tab}'>${read_more}</a></p>";
}

<?php

$item = get_query_var('item');

if(array_key_exists('title', $item))
{
	echo "<h3 class='title primary-text'>${item['title']}</h3>";
}

if(array_key_exists('date_span', $item))
{
	echo "<p class='description secondary-text'>${item['date_span']}</p>";
}

if(array_key_exists('description', $item))
{
	echo "<p class='description'>${item['description']}</p>";
}

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

<?php

$item = get_query_var('item');

if(array_key_exists('name', $item))
{
	echo "<h3 class='title primary-text'>${item['name']}</h3>";
}

if(array_key_exists('description', $item))
{
	echo "<p class='description secondary-text'>${item['description']}</p>";
}

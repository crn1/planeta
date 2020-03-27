<?php

$item = get_query_var('item');

if(array_key_exists('author', $item))
{
	echo "<p class='title primary-text'>${item['author']}</p>";
}

if(array_key_exists('author_description', $item))
{
	echo "<p class='description'>${item['author_description']}</p>";
}

if(array_key_exists('excerpt', $item))
{
	echo "<p class='title secondary-text'>${item['excerpt']}</p>";
}

if(array_key_exists('full_testimonial', $item))
{
	echo "<p class='description'>${item['full_testimonial']}</p>";
}

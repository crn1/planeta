<?php
	echo 'style="';
	$section = get_query_var('section');

	$separator = get_theme_mod("${section}_separator", 'none');
	switch($separator)
	{
		case 'none':
			break;

		case 'line-left':
			$angle = get_theme_mod("${section}_separator_angle", 10);
			echo "clip-path: polygon(0 0, 100% 0, 100% ${angle}%, 0% 100%);";
			break;

		case 'line-right':
			$angle = get_theme_mod("${section}_separator_angle", 10);
			echo "clip-path: polygon(0 0, 100% 0, 100% 100%, 0% ${angle}%);";
			break;
	}

	echo '"';
?>

<?php
	$section = get_query_var('section');
	$item = get_query_var('item');

	set_query_var('animation_name', 'card_info');
	get_template_part('template-parts/content', 'animations');
	$info_aos = get_query_var('card_info_aos');
	$info_lax = get_query_var('card_info_lax');
	$i_lax = $info_lax != '' ? 'lax' : '';
?>

<div class='card <?php echo $lax; ?>' <?php echo $card_lax; ?> <?php echo $card_aos; ?>>

<?php

	if(array_key_exists('image', $item)):

		set_query_var('animation_name', 'card_image');
		get_template_part('template-parts/content', 'animations');
		$image_aos = get_query_var('card_image_aos');
		$image_lax = get_query_var('card_image_lax');
		$img_lax = $image_lax != '' ? 'lax' : '';

		$image_src = wp_get_attachment_image_src($item['image'], 'large')[0];
		set_query_var('setting', "${section}_items_appearance"); ?>
		<img
			<?php get_template_part('template-parts/content', 'shape'); ?>
			src='<?php echo $image_src; ?>'
			class='image <?php echo $img_lax; ?>'
			<?php echo $image_aos; ?>
			<?php echo $image_lax; ?>
		/>
	<?php endif; ?>

	<div
			class='info <?php echo $i_lax; ?>'
			<?php echo $info_aos; ?>
			<?php echo $info_lax; ?>>

	<?php
		if(array_key_exists('title', $item))
		{
			echo "<h3 class='title'>${item['title']}</h3>";
		}

		if(array_key_exists('date_span', $item))
		{
			echo "<p class='date-span'>${item['date_span']}</p>";
		}

		if(array_key_exists('description', $item))
		{
			echo "<p class='description'>${item['description']}</p>";
		}

		if(array_key_exists('url', $item))
		{
			$read_more = esc_html__('Read More...', 'planeta');
			$url_tab = $item['url_tab'] ? '_blank' : '';
			echo "<p class='url'><a href='${item['url']}' target='${url_tab}'>${read_more}</a></p>";
		}

		if(array_key_exists('author', $item))
		{
			echo "<p class='author'>${item['author']}</p>";
		}

		if(array_key_exists('author_profession', $item))
		{
			echo "<p class='author-profession'>${item['author_profession']}</p>";
		} ?>

	</div>

</div>

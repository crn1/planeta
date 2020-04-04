<?php
	$section = get_query_var('section');
	$card_preset = get_query_var('card_preset', 'posts');

	set_query_var('animation_name', 'card_info');
	get_template_part('template-parts/content/animations');
	$info_aos = get_query_var('card_info_aos');
	$info_lax = get_query_var('card_info_lax');
	$info_lax_class = $info_lax != '' ? 'lax' : '';
?>

<div class='card card-<?php echo $card_preset; ?>'>

<?php
	$item = get_query_var('item', array());
	if(array_key_exists('image', $item) || has_post_thumbnail()):

		set_query_var('animation_name', 'card_image');
		get_template_part('template-parts/content/animations');
		$image_aos = get_query_var('card_image_aos');
		$image_lax = get_query_var('card_image_lax');
		$image_lax_class = $image_lax != '' ? 'lax' : '';

		$image_src = '';
		if($card_preset == 'posts')
		{
			$image_src = get_the_post_thumbnail_url();
		}else{
			$image_src = wp_get_attachment_image_src($item['image'], 'large')[0]; } ?>

		<img
			<?php get_template_part('template-parts/content/shape'); ?>
			src='<?php echo $image_src; ?>'
			class='image <?php echo $image_lax_class; ?>'
			<?php echo $image_aos; ?>
			<?php echo $image_lax; ?>
		/>
	<?php endif; ?>

	<div
			class='info <?php echo $info_lax_class; ?>'
			<?php echo $info_aos; ?>
			<?php echo $info_lax; ?>>

	<?php get_template_part("template-parts/frontpage/preset/${card_preset}"); ?>

	</div>

</div>

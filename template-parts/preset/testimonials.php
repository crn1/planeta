<?php

$item = get_query_var('item');

$render_title = array_key_exists('title', $item);
$render_title = $render_title ? !empty($item['title']) : false;

$render_desc = array_key_exists('author_description', $item);
$render_desc = $render_desc ? !empty($item['author_description']) : false;

$render_excerpt = array_key_exists('excerpt', $item);
$render_excerpt = $render_excerpt ? !empty($item['excerpt']) : false;

$render_test = array_key_exists('full_testimonial', $item);
$render_test = $render_test ? !empty($item['full_testimonial']) : false;

?>

<div class='author-container primary-text'>
	<?php if($render_title): ?>
		<h3 class='author'>
			<?php echo $item['title']; ?>
		</h3>
	<?php endif; ?>

	<?php if($render_desc): ?>
		<p class='author-description'>
			<?php echo $item['author_description']; ?>
		</p>
	<?php endif; ?>
</div>

<?php if($render_excerpt): ?>
	<p class='excerpt secondary-text'><?php echo $item['excerpt']; ?></p>
<?php endif; ?>

<?php if($render_test): ?>
	<p class='full-testimonial'>
		<?php echo $item['full_testimonial']; ?>
	</p>
<?php endif; ?>

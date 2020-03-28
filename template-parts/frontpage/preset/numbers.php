<?php

$item = get_query_var('item');

$render_num = array_key_exists('number', $item);
$render_num = $render_num ? !empty($item['number']) : false;

$render_title = array_key_exists('title', $item);
$render_title = $render_title ? !empty($item['title']) : false;

$render_desc = array_key_exists('description', $item);
$render_desc = $render_desc ? !empty($item['description']) : false;

?>

<?php if($render_num || $render_title): ?>
	<h3>
		<?php if($render_num): ?>
			<span class='number primary-text'>
				<?php echo $item['number']; ?>
			</span>
		<?php endif; ?>

		<?php if($render_title): ?>
			<span class='title secondary-text'>
				<?php echo $item['title']; ?>
			</span>
		<?php endif; ?>
	</h3>
<?php endif; ?>

<?php if($render_desc): ?>
	<p class='description'>
		<?php echo $item['description']; ?>
	</p>
<?php endif; ?>


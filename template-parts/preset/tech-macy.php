<?php $item = get_query_var('item'); ?>

<?php if(array_key_exists('title', $item)): ?>
	<h3 class='title primary-text'>
		<?php echo $item['title']; ?>
	</h3>
<?php endif; ?>

<?php if(array_key_exists('description', $item)): ?>
	<p class='description secondary-text'>
		<?php echo $item['description']; ?>
	</p>
<?php endif; ?>

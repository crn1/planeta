<?php if(is_active_sidebar('extended-header')): ?>
	<div id='extended-header' class='default-container'>
		<?php dynamic_sidebar('extended-header'); ?>
	</div>
	<script>
		Macy({
			container: '#extended-header',
			columns: <?php echo get_theme_mod('extended_header_container', 3); ?>,
			breakAt: {
				960: <?php echo get_theme_mod('extended_header_container', 3) == 1 ? 1 : 2; ?>,
				768: 1,
			},
			margin: 16,
		});
	</script>
<?php endif; ?>

<?php if(is_active_sidebar('promotion')): ?>
	<div id='promotion' class='default-container'>
		<?php dynamic_sidebar('promotion'); ?>
	</div>

	<script>
		Macy({
			container: '#promotion',
			columns: <?php echo get_theme_mod('promotion_container', 3); ?>,
			breakAt: {
				960: <?php echo get_theme_mod('promotion_container', 3) == 1 ? 1 : 2; ?>,
				768: 1,
			},
			margin: 16,
		});
	</script>
<?php endif; ?>

<?php $section = get_query_var('section');
if($section !== 'landing'): ?>
	<script>
		Macy({
			container: '#<?php echo $section; ?>-items-container',
			columns: <?php echo get_theme_mod("${section}_masonry_num", 3); ?>,
			breakAt: {
				960: <?php echo get_theme_mod("${section}_masonry_num", 3) == 1 ? 1: 2; ?>,
				768: 1,
			},
			margin: 16,
		});
	</script>
<?php endif; ?>

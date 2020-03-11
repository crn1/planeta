<?php $index = get_query_var('index'); ?>
<script>
	Macy({
		container: '#section-<?php echo $index; ?>-items',
		columns: <?php echo get_theme_mod("section_${index}_masonry_num", 3); ?>,
		breakAt: {
			960: <?php echo get_theme_mod("section_${index}_masonry_num", 3) == 1 ? 1: 2; ?>,
			768: 1,
		},
		margin: 16,
	});
</script>

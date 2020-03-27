<?php

$section = get_query_var('section');
$masonry_num = get_theme_mod("${section}_masonry_num", 3);

$margin = 48;
if($masonry_num == 2) { $margin = 128; }
else if($masonry_num == 3) { $margin = 64; }
else if($masonry_num == 4) { $margin = 48; }
else if($masonry_num == 5) { $margin = 32; }
else if($masonry_num == 6) { $margin = 16; }
else if($masonry_num == 7) { $margin = 8; }

?>

<script>
	Macy({
		container: '#<?php echo $section; ?>-items',
		columns: <?php echo $masonry_num; ?>,
		breakAt: {
			960: <?php echo $masonry_num == 1 ? 1 : 2; ?>,
			768: 1,
		},
		margin: <?php echo $margin; ?>,
	})
</script>

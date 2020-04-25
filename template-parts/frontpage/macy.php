<?php

$section = get_query_var('section');
$masonry_num = get_theme_mod("${section}_masonry_num", 3);

switch($masonry_num)
{
	case 2: $margin = 64; break;
	case 3: $margin = 48; break;
	case 4: $margin = 40; break;
}

?>

<script>
	Macy({
		container: '#<?php echo $section; ?>-items',
		columns: <?php echo $masonry_num; ?>,
		breakAt: {
			900: 2,
			600: 1,
		},
		margin: <?php echo $margin; ?>,
	})
</script>

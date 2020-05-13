<?php

$section = get_query_var('section');
$masonry_num = get_theme_mod("${section}_masonry_num", 2);
$masonry_num = intval($masonry_num);

switch($masonry_num)
{
	case 2: $margin = 64; break;
	case 3: $margin = 48; break;
	case 4: $margin = 40; break;
}

?>

<script>
	Macy({
		container: '#<?php echo esc_js($section); ?>-items',
		columns: <?php echo intval(json_encode($masonry_num)); ?>,
		breakAt: {
			900: 2,
			600: 1,
		},
		margin: <?php echo intval(json_encode($margin)); ?>,
	})
</script>

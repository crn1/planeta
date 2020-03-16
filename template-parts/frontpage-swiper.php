<?php
	$section = get_query_var('section');
?>
<script>
	new Swiper('.<?php echo $section; ?>-swiper', {
		loop: true,
		navigation: {
			prevEl: '.<?php echo $section; ?>-button-prev',
			nextEl: '.<?php echo $section; ?>-button-next',
		},
	})
</script>

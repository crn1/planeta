<?php
	$featured_image = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'full') : '';
?>
<div class='page-title-container' style="background-image: url('<?php echo $featured_image; ?>');">
	<div class='page-title-overlay'></div>

	<div class='default-container'>
		<h2 class='page-title'>
			<?php the_title(); ?>
		</h2>
	</div>
</div>

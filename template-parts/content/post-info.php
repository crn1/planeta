<?php
	$font_size = get_theme_mod('typography_main_size', 16);
	$avatar = get_avatar(get_the_author_meta('ID'), $font_size*2);
?>
<div class='post-info'>
	<div class='user'>
		<?php echo $avatar; ?> <?php the_author(); ?> - <?php the_date(); ?>
	</div>

	<?php the_category(' / '); ?>
</div>

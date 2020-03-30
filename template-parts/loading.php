<?php

$render_loading = get_theme_mod('loading_enable', false);

if($render_loading):
	$text = get_theme_mod('loading_text', '');
	$logo = get_theme_mod('loading_logo', '');
	$animation = get_theme_mod('loading_animation', ''); ?>

<div id='loading-container'>

	<?php if(!empty($logo)): ?>
		<img
			class='logo'
			src='<?php echo $logo; ?>'
		/>
	<?php endif; ?>

	<?php if(!empty($animation)): ?>
		<img
			class='animation'
			src='<?php echo $animation; ?>'
		/>
	<?php endif; ?>

	<?php if(!empty($text)): ?>
		<p class='text'>
			<?php echo $text; ?>
		</p>
	<?php endif; ?>

</div>

<?php endif; ?>

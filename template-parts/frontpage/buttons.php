<?php

$section = get_query_var('section');

$items = get_theme_mod("${section}_buttons", array());
set_query_var('card_preset', 'buttons');

if(!empty($items)): ?>

<div
		id='<?php echo $section; ?>-buttons'
		class='section-items'>

	<?php
		foreach($items as $item)
		{
			set_query_var('item', $item);
			get_template_part('template-parts/preset/wrapper');
		}
	?>
</div>

<?php endif; ?>

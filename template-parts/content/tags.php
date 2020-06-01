<?php
	if(has_tag() && !is_archive() && !is_search())
	{ ?>
		<p class='tags-container'>
	<?php

		$tags = get_the_tags();
		if(!empty($tags))
		{
			esc_html_e('Tags:', 'planeta');
			foreach($tags as $tag)
			{
				$tag_link = get_tag_link($tag->term_id); ?>
				<a
						rel='tag'
						title='<?php echo esc_attr($tag->name); ?>'
						href='<?php echo esc_url($tag_link); ?>'
						class='title-tag <?php echo sanitize_html_class($tag->slug); ?>'>
					<?php echo esc_html($tag->name); ?>
				</a><?php echo $tag !== end($tags) ? ',' : ''; ?>
			<?php
			}
		} ?>
		</p>
	<?php
	}
?>

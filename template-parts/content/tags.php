<?php
	if(has_tag() && !is_archive() && !is_search())
	{ ?>
		<p class='tags-container'>
	<?php

		$tags = get_the_tags();
		foreach($tags as $tag)
		{
			$tag_link = get_tag_link( $tag->term_id ); ?>
			<a
					rel='tag'
					title='<?php echo esc_attr($tag->name); ?>'
					href='<?php echo esc_url($tag_link); ?>'
					class='title-tag button-link <?php echo sanitize_html_class($tag->slug); ?>'>
				<?php echo esc_html($tag->name); ?>
			</a>
		<?php } ?>
		</p>
	<?php
	}
?>

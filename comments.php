<?php if(post_password_required()) { return; } ?>

<div id="comments" class="comments-area">
	<?php if(have_comments()): ?>

		<ul class="comment-list">

			<?php
				$args = array(
					'walker'						=> null,
					'max_depth'					=> '',
					'style'							=> 'ul',
					'callback'					=> null,
					'end-callback'			=> null,
					'type'							=> 'all',
					'reply_text'				=> 'Reply',
					'page'							=> '',
					'per_page'					=> '',
					'avatar_size'				=> 32,
					'reverse_top_level' => null,
					'reverse_children'	=> '',
					'format'						=> 'html5',
					'short_ping'				=> false,
					'echo'							=> true,
				);
				wp_list_comments($args);
			?>

		</ul>

		<?php previous_comments_link() ?>
		<?php next_comments_link() ?>

	<?php	endif; ?>

	<?php comment_form(); ?>
</div>

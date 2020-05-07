<?php

if(post_password_required()) { return; }

if(have_comments() && comments_open()): ?>

	<div id='comments'>
		<?php
			$thoughts = esc_html__('Thoughts on this post', 'planeta'); ?>
		<h3 class='comments-title'>
			<?php echo esc_html($thoughts); ?>
		</h3>

		<ul class="comment-list">
			<?php
				$args = array(
					'walker'						=> null,
					'max_depth'					=> 3,
					'style'							=> 'ul',
					'callback'					=> null,
					'end-callback'			=> null,
					'type'							=> 'all',
					'reply_text'				=> esc_html__('Reply', 'planeta'),
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

		<?php
			$admin_url = admin_url('profile.php');
			$logout_url = wp_logout_url(apply_filters('the_permalink', get_permalink()));

			$args = array(
				'comment_notes_before' 	=> '',
				'class_submit'      		=> 'button-link',
				'logged_in_as' 					=> "<p class='logged-in-as'>
					<span>
						Logged in as <a href='${admin_url}'>${user_identity}</a>.
					</span>
					<a href='${logout_url}' title='Log out of this account'>Log out</a>
				</p>",
			);
			comment_form($args);
		?>
	</div>

<?php endif; ?>

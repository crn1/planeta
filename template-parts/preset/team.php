<?php
	$name = get_post_meta($post->ID, 'member_name', true);
	$position = get_post_meta($post->ID, 'member_position', true);
	$description = get_post_meta($post->ID, 'member_description', true);

	$facebook_url = get_post_meta($post->ID, 'member_social_facebook', true);
	$twitter_url = get_post_meta($post->ID, 'member_social_twitter', true);
	$instagram_url = get_post_meta($post->ID, 'member_social_instagram', true);
	$linkedin_url = get_post_meta($post->ID, 'member_social_linkedin', true);
	$skype_url = get_post_meta($post->ID, 'member_social_skype', true);
	$github_url = get_post_meta($post->ID, 'member_social_github', true);
?>

<?php if(!empty($name)): ?>
<h3 class='member-title'>
	<?php echo esc_html($name); ?>
</h3>
<?php endif; ?>

<?php if(!empty($position)): ?>
<p class='member-position'>
	<?php echo esc_html($position); ?>
</p>
<?php endif; ?>

<?php
if(
	!empty($facebook_url) ||
	!empty($twitter_url) ||
	!empty($instagram_url) ||
	!empty($linkedin_url) ||
	!empty($skype_url) ||
	!empty($github_url)
): ?>
<span class='member-social-container'>
	<?php if(!empty($facebook_url)): ?>
		<a
				class='button-link'
				href='<?php echo esc_url($facebook_url); ?>'>
			<i class='icofont-facebook'></i>
		</a>
	<?php endif; ?>
	<?php if(!empty($twitter_url)): ?>
		<a
				class='button-link'
				href='<?php echo esc_url($twitter_url); ?>'>
			<i class='icofont-twitter'></i>
		</a>
	<?php endif; ?>
	<?php if(!empty($instagram_url)): ?>
		<a
				class='button-link'
				href='<?php echo esc_url($instagram_url); ?>'>
			<i class='icofont-instagram'></i>
		</a>
	<?php endif; ?>
	<?php if(!empty($linkedin_url)): ?>
		<a
				class='button-link'
				href='<?php echo esc_url($linkedin_url); ?>'>
			<i class='icofont-linkedin'></i>
		</a>
	<?php endif; ?>
	<?php if(!empty($skype_url)): ?>
		<a
				class='button-link'
				href='<?php echo esc_url($skype_url); ?>'>
			<i class='icofont-skype'></i>
		</a>
	<?php endif; ?>
	<?php if(!empty($github_url)): ?>
		<a
				class='button-link'
				href='<?php echo esc_url($github_url); ?>'>
			<i class='icofont-github'></i>
		</a>
	<?php endif; ?>
</span>
<?php endif; ?>

<?php if(!empty($description)): ?>
<p class='member-description'>
	<?php echo esc_html($description); ?>
</p>
<?php endif; ?>

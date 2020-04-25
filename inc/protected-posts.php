<?php

add_filter('the_password_form', 'planeta_password_form');
function planeta_password_form()
{
	global $post;
	$site_url = get_option('siteurl');
	$enter_password = esc_html__('Enter Password', 'planeta');

	$output = "<form
			id='protected-post-form'
			action='${site_url}/wp-login.php?action=postpass'
			method='POST'>
		<input
			type='password'
			required
			placeholder='${enter_password}'
			name='post_password'
		/>
		<button type='submit'>
			<i class='icofont-simple-right'></i>
		</button>
	</form>";

	return $output;
}

?>

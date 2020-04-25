<form
		id='search-form'
		role='search'
		method='GET'
		action='<?php echo home_url('/'); ?>'>
	<button type='submit'>
		<i class='icofont-search-1'></i>
	</button>
	<input
			type='search'
			required
			placeholder="<?php echo esc_attr_x( 'Search', 'placeholder' ) ?>"
			value='<?php echo get_search_query(); ?>'
			name='s' />
</form>

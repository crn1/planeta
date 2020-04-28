<?php

function planeta_metabox_price_display()
{
	global $post;
	$price_tag = get_post_meta($post->ID, 'price_title', true);
	$price_url = get_post_meta($post->ID, 'price_url', true);

	$tag = esc_html__('Value and Currency', 'planeta');
	$url = esc_html__('URL', 'planeta');
?>
	<fieldset>
		<legend class='screen-reader-text'>Price Information</legend>
		<table class='form-table'>
			<tr>
				<td class='first'>
					<?php echo $tag; ?>
				</td>
				<td>
					<input
						required
						size='30'
						type='text'
						name='price_tag'
						class='widefat'
						value='<?php echo $price_tag; ?>'
					/>
				</td>
			</tr>
			<tr>
				<td class='first'>
					<?php echo $url; ?>
				</td>
				<td>
					<input
						size='30'
						type='url'
						name='price_url'
						class='widefat'
						value='<?php echo $price_url; ?>'
					/>
				</td>
			</tr>
		</table>
	</fieldset>
<?php }

function planeta_add_metabox_price()
{
	add_meta_box(
		'planeta_metabox_price',
		'price Information',
		'planeta_metabox_price_display',
		'price',
		'advanced',
		'high'
	);
}

function planeta_metabox_price_save($post_id)
{
	$is_autosave = wp_is_post_autosave($post_id);
	$is_revision = wp_is_post_revision($post_id);

	if($is_autosave || $is_revision)
	{
		return;
	}

	$post = get_post($post_id);
	if($post->post_type == 'price')
	{
		if(array_key_exists('price_tag', $_POST))
		{
			update_post_meta($post_id, 'price_title', $_POST['price_title']);
		}
		if(array_key_exists('price_url', $_POST))
		{
			update_post_meta($post_id, 'price_url', $_POST['price_url']);
		}
	}
}
add_action('save_post', 'planeta_metabox_price_save');

function planeta_register_post_type_price()
{
	$labels_prices = array(
		'name'									=> esc_html__('Pricing', 'planeta'),
		'singular_name'					=> esc_html__('Price', 'planeta'),
		'add_new'								=> esc_html__('Add New Price', 'planeta'),
		'add_new_item'					=> esc_html__('Add New Item', 'planeta'),
		'edit_item'							=> esc_html__('Edit price', 'planeta'),
		'search_items'					=> esc_html__('Search Items', 'planeta'),
		'not_found'							=> esc_html__('No prices found.', 'planeta'),
		'not_found_in_trash'		=> esc_html__('No prices found in Trash.', 'planeta'),
		'item_updated'					=> esc_html__('Price updated.', 'planeta'),
	);
	$args_prices = array(
		'labels'								=> $labels_prices,
		'public'								=> true,
		'exclude_from_search'		=> true,
		'publicly_queryable'		=> false,
		'show_in_nav_menus'			=> false,
		'show_in_menu'					=> false,
		'show_in_rest'					=> false,
		'register_meta_box_cb'	=> 'planeta_add_metabox_price',
		'supports'							=> array(
			'thumbnail',
		),
	);
	register_post_type('price', $args_prices);
}
add_action('init', 'planeta_register_post_type_price');

//Add to Submenu
add_submenu_page(
	'planeta_welcome',
	esc_html__('Pricing', 'planeta'),
	esc_html__('Pricing', 'planeta'),
	'manage_options',
	'edit.php?post_type=price');

add_filter('manage_price_posts_columns', 'planeta_price_columns');
function planeta_price_columns($columns)
{
	$columns['price_tag'] = esc_html__('Name', 'planeta');
	$columns['price_url'] = esc_html__('Description', 'planeta');
	unset($columns['date']);
	return $columns;
}

add_action('manage_price_posts_custom_column', 'custom_price_column', 10, 2);
function custom_price_column($column, $post_id)
{
	global $post;
	switch($column)
	{
		case 'price_tag':
			$price_tag = get_post_meta($post->ID, 'price_tag', true);
			echo $price_tag;
			break;

		case 'price_url':
			$price_url = get_post_meta($post->ID, 'price_url', true);
			echo $price_url;
			break;
	}
}

add_filter('manage_edit-price_sortable_columns', 'planeta_price_columns_sortable');
function planeta_price_columns_sortable($columns)
{
	$columns['price_url'] = 'price_url';
	$columns['price_tag'] = 'price_tag';
	return $columns;
}

?>

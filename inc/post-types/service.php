<?php

function planeta_metabox_service_display()
{
	global $post;
	$service_title = get_post_meta($post->ID, 'service_title', true);
	$service_description = get_post_meta($post->ID, 'service_description', true);
	$service_url = get_post_meta($post->ID, 'service_url', true);

	$title = esc_html__('Title', 'planeta');
	$description = esc_html__('Description', 'planeta');
	$url = esc_html__('URL', 'planeta');
?>
	<fieldset>
		<legend class='screen-reader-text'>Service Information</legend>
		<table class='form-table'>
			<tr>
				<td class='first'>
					<?php echo $title; ?>
				</td>
				<td>
					<input
						required
						size='30'
						type='text'
						name='service_title'
						class='widefat'
						value='<?php echo $service_title; ?>'
					/>
				</td>
			</tr>
			<tr>
				<td>
					<?php echo $description; ?>
				</td>
				<td>
					<?php wp_editor(
						$service_description,
						'service_description', array(
							'media_buttons'	=> false,
							'quicktags'			=> false,
							'teeny'					=> true,
						)); ?>
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
						name='service_url'
						class='widefat'
						value='<?php echo $service_url; ?>'
					/>
				</td>
			</tr>
		</table>
	</fieldset>
<?php }

function planeta_add_metabox_service()
{
	add_meta_box(
		'planeta_metabox_service',
		'Service Information',
		'planeta_metabox_service_display',
		'service',
		'advanced',
		'high'
	);
}

function planeta_metabox_service_save($post_id)
{
	$is_autosave = wp_is_post_autosave($post_id);
	$is_revision = wp_is_post_revision($post_id);

	if($is_autosave || $is_revision)
	{
		return;
	}

	$post = get_post($post_id);
	if($post->post_type == 'service')
	{
		if(array_key_exists('service_title', $_POST))
		{
			update_post_meta($post_id, 'service_title', $_POST['service_title']);
		}
		if(array_key_exists('service_description', $_POST))
		{
			update_post_meta($post_id, 'service_description', $_POST['service_description']);
		}
		if(array_key_exists('service_url', $_POST))
		{
			update_post_meta($post_id, 'service_url', $_POST['service_url']);
		}
	}
}
add_action('save_post', 'planeta_metabox_service_save');

function planeta_register_post_type_service()
{
	$labels_services = array(
		'name'									=> esc_html__('Services', 'planeta'),
		'singular_name'					=> esc_html__('Service', 'planeta'),
		'add_new'								=> esc_html__('Add New Service', 'planeta'),
		'add_new_item'					=> esc_html__('Add New Item', 'planeta'),
		'edit_item'							=> esc_html__('Edit Service', 'planeta'),
		'search_items'					=> esc_html__('Search Items', 'planeta'),
		'not_found'							=> esc_html__('No services found.', 'planeta'),
		'not_found_in_trash'		=> esc_html__('No services found in Trash.', 'planeta'),
	);
	$args_services = array(
		'labels'								=> $labels_services,
		'public'								=> true,
		'menu_icon'							=> 'dashicons-hammer',
		'exclude_from_search'		=> true,
		'publicly_queryable'		=> false,
		'show_in_nav_menus'			=> false,
		'show_in_rest'					=> false,
		'register_meta_box_cb'	=> 'planeta_add_metabox_service',
		'supports'							=> array(
			'thumbnail',
		),
	);
	register_post_type('service', $args_services);
}
add_action('init', 'planeta_register_post_type_service');

add_filter('manage_service_posts_columns', 'planeta_service_columns');
function planeta_service_columns($columns)
{
	$columns['service_title'] = esc_html__('Name', 'planeta');
	$columns['service_description'] = esc_html__('Description', 'planeta');
	unset($columns['title']);
	unset($columns['date']);
	return $columns;
}

add_action('manage_service_posts_custom_column', 'custom_service_column', 10, 2);
function custom_service_column($column, $post_id)
{
	global $post;
	switch($column)
	{
		case 'service_title':
			$service_title = get_post_meta($post->ID, 'service_title', true);
			echo $service_title;
			break;

		case 'service_description':
			$service_description = get_post_meta($post->ID, 'service_description', true);
			echo $service_description;
			break;
	}
}

add_filter('manage_edit-service_sortable_columns', 'planeta_service_columns_sortable');
function planeta_service_columns_sortable($columns)
{
	$columns['service_title'] = 'service_title';
	$columns['service_description'] = 'service_description';
	return $columns;
}

?>
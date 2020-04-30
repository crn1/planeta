<?php

function planeta_metabox_feature_display()
{
	global $post;
	$feature_title = get_post_meta($post->ID, 'feature_title', true);
	$feature_description = get_post_meta($post->ID, 'feature_description', true);

	$title = esc_html__('Title', 'planeta');
	$description = esc_html__('Description', 'planeta');
?>
	<fieldset>
		<legend class='screen-reader-text'>Feature Information</legend>
		<table class='form-table'>
			<tr>
				<td>
					<?php echo $description; ?>
				</td>
				<td>
					<?php wp_editor(
						$feature_description,
						'feature_description', array(
							'media_buttons'	=> false,
							'quicktags'			=> false,
							'teeny'					=> true,
						)); ?>
				</td>
			</tr>
		</table>
	</fieldset>
<?php }

function planeta_metabox_feature_url_display()
{
	global $post;
	$feature_url = get_post_meta($post->ID, 'feature_url', true);
	$feature_url_text = get_post_meta($post->ID, 'feature_url_text', true);
	if(empty($feature_url_text))
	{
		$feature_url_text = esc_html__('Read More...', 'planeta');
	}

	$url = esc_html__('URL', 'planeta');
	$url_text = esc_html__('Button URL Text', 'planeta');
?>
	<fieldset>
		<legend class='screen-reader-text'>Button URL</legend>
		<table class='form-table'>
			<tr>
				<td class='first'>
					<?php echo $url; ?>
				</td>
				<td>
					<input
						size='30'
						type='url'
						name='feature_url'
						class='widefat'
						value='<?php echo $feature_url; ?>'
					/>
				</td>
			</tr>
			<tr>
				<td class='first'>
					<?php echo $url_text; ?>
				</td>
				<td>
					<input
						required
						size='30'
						type='text'
						name='feature_url_text'
						class='widefat'
						value='<?php echo $feature_url_text; ?>'
					/>
				</td>
			</tr>
		</table>
	</fieldset>
<?php }

function planeta_add_metabox_feature()
{
	add_meta_box(
		'planeta_metabox_feature',
		esc_html__('Feature Information', 'planeta'),
		'planeta_metabox_feature_display',
		'feature',
		'advanced',
		'high'
	);

	add_meta_box(
		'planeta_metabox_feature_url',
		esc_html__('Button URL', 'planeta'),
		'planeta_metabox_feature_url_display',
		'feature',
		'advanced',
		'high'
	);
}

function planeta_metabox_feature_save($post_id)
{
	$is_autosave = wp_is_post_autosave($post_id);
	$is_revision = wp_is_post_revision($post_id);

	if($is_autosave || $is_revision)
	{
		return;
	}

	$post = get_post($post_id);
	if($post->post_type == 'feature')
	{
		if(array_key_exists('feature_description', $_POST))
		{
			update_post_meta($post_id, 'feature_description', $_POST['feature_description']);
		}
		if(array_key_exists('feature_url', $_POST))
		{
			update_post_meta($post_id, 'feature_url', $_POST['feature_url']);
		}
		if(array_key_exists('feature_url_text', $_POST))
		{
			update_post_meta($post_id, 'feature_url_text', $_POST['feature_url_text']);
		}
	}
}
add_action('save_post', 'planeta_metabox_feature_save');

function planeta_register_post_type_feature()
{
	$labels_features = array(
		'name'									=> esc_html__('Features', 'planeta'),
		'singular_name'					=> esc_html__('Feature', 'planeta'),
		'add_new'								=> esc_html__('Add New Feature', 'planeta'),
		'add_new_item'					=> esc_html__('Add New Item', 'planeta'),
		'edit_item'							=> esc_html__('Edit Feature', 'planeta'),
		'search_items'					=> esc_html__('Search Items', 'planeta'),
		'not_found'							=> esc_html__('No features found.', 'planeta'),
		'not_found_in_trash'		=> esc_html__('No features found in Trash.', 'planeta'),
		'item_updated'					=> esc_html__('Feature updated.', 'planeta'),
	);
	$args_features = array(
		'labels'								=> $labels_features,
		'public'								=> true,
		'exclude_from_search'		=> true,
		'publicly_queryable'		=> false,
		'show_in_nav_menus'			=> false,
		'show_in_menu'					=> false,
		'show_in_rest'					=> false,
		'register_meta_box_cb'	=> 'planeta_add_metabox_feature',
		'supports'							=> array(
			'title',
			'thumbnail',
		),
	);
	register_post_type('feature', $args_features);
}
add_action('init', 'planeta_register_post_type_feature');

//Add to Submenu
add_submenu_page(
	'planeta_welcome',
	esc_html__('Features', 'planeta'),
	esc_html__('Features', 'planeta'),
	'manage_options',
	'edit.php?post_type=feature');

add_filter('manage_feature_posts_columns', 'planeta_feature_columns');
function planeta_feature_columns($columns)
{
	$columns['feature_description'] = esc_html__('Description', 'planeta');
	return $columns;
}

add_action('manage_feature_posts_custom_column', 'custom_feature_column', 10, 2);
function custom_feature_column($column, $post_id)
{
	global $post;
	switch($column)
	{
		case 'feature_description':
			$feature_description = get_post_meta($post->ID, 'feature_description', true);
			echo $feature_description;
			break;
	}
}

add_filter('manage_edit-feature_sortable_columns', 'planeta_feature_columns_sortable');
function planeta_feature_columns_sortable($columns)
{
	$columns['feature_description'] = 'feature_description';
	return $columns;
}

?>

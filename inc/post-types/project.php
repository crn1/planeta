<?php

function planeta_metabox_project_display()
{
	global $post;
	$project_title = get_post_meta($post->ID, 'project_title', true);
	$project_description = get_post_meta($post->ID, 'project_description', true);

	$title = esc_html__('Title', 'planeta');
	$description = esc_html__('Description', 'planeta');
?>
	<fieldset>
		<legend class='screen-reader-text'>Project Information</legend>
		<table class='form-table'>
			<tr>
				<td>
					<?php echo $description; ?>
				</td>
				<td>
					<?php wp_editor(
						$project_description,
						'project_description', array(
							'media_buttons'	=> false,
							'quicktags'			=> false,
							'teeny'					=> true,
						)); ?>
				</td>
			</tr>
		</table>
	</fieldset>
<?php }

function planeta_metabox_project_url_display()
{
	global $post;
	$project_url = get_post_meta($post->ID, 'project_url', true);
	$project_url_text = get_post_meta($post->ID, 'project_url_text', true);
	if(empty($project_url_text))
	{
		$project_url_text = esc_html__('Read More...', 'planeta');
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
						name='project_url'
						class='widefat'
						value='<?php echo $project_url; ?>'
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
						name='project_url_text'
						class='widefat'
						value='<?php echo $project_url_text; ?>'
					/>
				</td>
			</tr>
		</table>
	</fieldset>
<?php }

function planeta_add_metabox_project()
{
	add_meta_box(
		'planeta_metabox_project',
		esc_html__('Project Information', 'planeta'),
		'planeta_metabox_project_display',
		'project',
		'advanced',
		'high'
	);

	add_meta_box(
		'planeta_metabox_project_url',
		esc_html__('Button URL', 'planeta'),
		'planeta_metabox_project_url_display',
		'project',
		'advanced',
		'high'
	);
}

function planeta_metabox_project_save($post_id)
{
	$is_autosave = wp_is_post_autosave($post_id);
	$is_revision = wp_is_post_revision($post_id);

	if($is_autosave || $is_revision)
	{
		return;
	}

	$post = get_post($post_id);
	if($post->post_type == 'project')
	{
		if(array_key_exists('project_description', $_POST))
		{
			update_post_meta($post_id, 'project_description', $_POST['project_description']);
		}
		if(array_key_exists('project_url', $_POST))
		{
			update_post_meta($post_id, 'project_url', $_POST['project_url']);
		}
		if(array_key_exists('project_url_text', $_POST))
		{
			update_post_meta($post_id, 'project_url_text', $_POST['project_url_text']);
		}
	}
}
add_action('save_post', 'planeta_metabox_project_save');

function planeta_register_post_type_project()
{
	$labels_projects = array(
		'name'									=> esc_html__('Projects', 'planeta'),
		'singular_name'					=> esc_html__('Project', 'planeta'),
		'add_new'								=> esc_html__('Add New Project', 'planeta'),
		'add_new_item'					=> esc_html__('Add New Item', 'planeta'),
		'edit_item'							=> esc_html__('Edit project', 'planeta'),
		'search_items'					=> esc_html__('Search Items', 'planeta'),
		'not_found'							=> esc_html__('No projects found.', 'planeta'),
		'not_found_in_trash'		=> esc_html__('No projects found in Trash.', 'planeta'),
		'item_updated'					=> esc_html__('Project updated.', 'planeta'),
	);
	$args_projects = array(
		'labels'								=> $labels_projects,
		'public'								=> true,
		'exclude_from_search'		=> true,
		'publicly_queryable'		=> false,
		'show_in_nav_menus'			=> false,
		'show_in_menu'					=> false,
		'show_in_rest'					=> false,
		'register_meta_box_cb'	=> 'planeta_add_metabox_project',
		'supports'							=> array(
			'title',
			'thumbnail',
		),
	);
	register_post_type('project', $args_projects);
}
add_action('init', 'planeta_register_post_type_project');

//Add to Submenu
function planeta_add_project_submenu()
{
add_submenu_page(
	'planeta_welcome',
	esc_html__('Projects', 'planeta'),
	esc_html__('Projects', 'planeta'),
	'manage_options',
	'edit.php?post_type=project');
}
add_action('admin_menu', 'planeta_add_project_submenu');

add_filter('manage_project_posts_columns', 'planeta_project_columns');
function planeta_project_columns($columns)
{
	$columns['project_description'] = esc_html__('Description', 'planeta');
	return $columns;
}

add_action('manage_project_posts_custom_column', 'custom_project_column', 10, 2);
function custom_project_column($column, $post_id)
{
	global $post;
	switch($column)
	{
		case 'project_description':
			$project_description = get_post_meta($post->ID, 'project_description', true);
			echo $project_description;
			break;
	}
}

add_filter('manage_edit-project_sortable_columns', 'planeta_project_columns_sortable');
function planeta_project_columns_sortable($columns)
{
	$columns['project_description'] = 'project_description';
	return $columns;
}

?>

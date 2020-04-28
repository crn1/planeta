<?php

function planeta_metabox_project_display()
{
	global $post;
	$project_title = get_post_meta($post->ID, 'project_title', true);
	$project_description = get_post_meta($post->ID, 'project_description', true);
	$project_url = get_post_meta($post->ID, 'project_url', true);

	$title = esc_html__('Title', 'planeta');
	$description = esc_html__('Description', 'planeta');
	$url = esc_html__('URL', 'planeta');
?>
	<fieldset>
		<legend class='screen-reader-text'>Project Information</legend>
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
						name='project_title'
						class='widefat'
						value='<?php echo $project_title; ?>'
					/>
				</td>
			</tr>
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
		</table>
	</fieldset>
<?php }

function planeta_add_metabox_project()
{
	add_meta_box(
		'planeta_metabox_project',
		'Project Information',
		'planeta_metabox_project_display',
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
		if(array_key_exists('project_title', $_POST))
		{
			update_post_meta($post_id, 'project_title', $_POST['project_title']);
		}
		if(array_key_exists('project_description', $_POST))
		{
			update_post_meta($post_id, 'project_description', $_POST['project_description']);
		}
		if(array_key_exists('project_url', $_POST))
		{
			update_post_meta($post_id, 'project_url', $_POST['project_url']);
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
			'thumbnail',
		),
	);
	register_post_type('project', $args_projects);
}
add_action('init', 'planeta_register_post_type_project');

//Add to Submenu
add_submenu_page(
	'planeta_welcome',
	esc_html__('Projects', 'planeta'),
	esc_html__('Projects', 'planeta'),
	'manage_options',
	'edit.php?post_type=project');

add_filter('manage_project_posts_columns', 'planeta_project_columns');
function planeta_project_columns($columns)
{
	$columns['project_title'] = esc_html__('Name', 'planeta');
	$columns['project_description'] = esc_html__('Description', 'planeta');
	unset($columns['title']);
	unset($columns['date']);
	return $columns;
}

add_action('manage_project_posts_custom_column', 'custom_project_column', 10, 2);
function custom_project_column($column, $post_id)
{
	global $post;
	switch($column)
	{
		case 'project_title':
			$project_title = get_post_meta($post->ID, 'project_title', true);
			echo $project_title;
			break;

		case 'project_description':
			$project_description = get_post_meta($post->ID, 'project_description', true);
			echo $project_description;
			break;
	}
}

add_filter('manage_edit-project_sortable_columns', 'planeta_project_columns_sortable');
function planeta_project_columns_sortable($columns)
{
	$columns['project_title'] = 'project_title';
	$columns['project_description'] = 'project_description';
	return $columns;
}

?>

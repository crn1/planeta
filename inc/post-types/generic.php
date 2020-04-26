<?php

function planeta_metabox_generic_display()
{
	global $post;
	$generic_url = get_post_meta($post->ID, 'generic_url', true);
	$url = esc_html__('URL', 'planeta');
?>
	<fieldset>
		<legend class='screen-reader-text'>
			<?php echo $url; ?>
		</legend>
		<table class='form-table'>
			<tr>
				<td class='first'>
					<?php echo $url; ?>
				</td>
				<td>
					<input
						required
						size='30'
						type='url'
						name='generic_url'
						class='widefat'
						value='<?php echo $generic_url; ?>'
					/>
				</td>
			</tr>
		</table>
	</fieldset>
<?php }

function planeta_metabox_generic_template($index)
{
	add_meta_box(
		"planeta_metabox_generic-${index}",
		esc_html__('URL', 'planeta'),
		"planeta_metabox_generic_display",
		"generic-${index}",
		'advanced',
		'high'
	);
}
function planeta_add_metabox_generic_1() { planeta_metabox_generic_template(1); }
function planeta_add_metabox_generic_2() { planeta_metabox_generic_template(2); }
function planeta_add_metabox_generic_3() { planeta_metabox_generic_template(3); }

function planeta_metabox_generic_save_template($post_id, $index)
{
	$is_autosave = wp_is_post_autosave($post_id);
	$is_revision = wp_is_post_revision($post_id);

	if($is_autosave || $is_revision)
	{
		return;
	}

	$post = get_post($post_id, $index);
	if($post->post_type == "generic-${index}")
	{
		if(array_key_exists('generic_url', $_POST))
		{
			update_post_meta($post_id, 'generic_url', $_POST['generic_url']);
		}
	}
}
function planeta_metabox_generic_1_save($post_id) { planeta_metabox_generic_save_template($post_id, 1); }
function planeta_metabox_generic_2_save($post_id) { planeta_metabox_generic_save_template($post_id, 2); }
function planeta_metabox_generic_3_save($post_id) { planeta_metabox_generic_save_template($post_id, 3); }
add_action('save_post', "planeta_metabox_generic_1_save");
add_action('save_post', "planeta_metabox_generic_2_save");
add_action('save_post', "planeta_metabox_generic_3_save");

function planeta_register_post_type_generic_template($index)
{
	$labels_generic = array(
		'name'									=> esc_html__("Generic Sections #${index}", 'planeta'),
		'singular_name'					=> esc_html__('Section', 'planeta'),
		'add_new'								=> esc_html__('Add New Section', 'planeta'),
		'add_new_item'					=> esc_html__('Add New Item', 'planeta'),
		'edit_item'							=> esc_html__('Edit generic', 'planeta'),
		'search_items'					=> esc_html__('Search Items', 'planeta'),
		'not_found'							=> esc_html__('No sections found.', 'planeta'),
		'not_found_in_trash'		=> esc_html__('No sections found in Trash.', 'planeta'),
	);
	$args_generic = array(
		'labels'								=> $labels_generic,
		'public'								=> true,
		'menu_icon'							=> 'dashicons-format-aside',
		'exclude_from_search'		=> true,
		'publicly_queryable'		=> false,
		'show_in_nav_menus'			=> false,
		'show_in_rest'					=> false,
		'register_meta_box_cb'	=> "planeta_add_metabox_generic_${index}",
		'supports'							=> array(
			'title',
			'editor',
			'thumbnail',
		),
	);
	register_post_type("generic-${index}", $args_generic);
}
function planeta_register_post_type_generic_1() { planeta_register_post_type_generic_template(1); }
function planeta_register_post_type_generic_2() { planeta_register_post_type_generic_template(2); }
function planeta_register_post_type_generic_3() { planeta_register_post_type_generic_template(3); }
add_action('init', 'planeta_register_post_type_generic_1');
add_action('init', 'planeta_register_post_type_generic_2');
add_action('init', 'planeta_register_post_type_generic_3');

?>

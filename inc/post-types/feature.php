<?php

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
			'editor',
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

?>

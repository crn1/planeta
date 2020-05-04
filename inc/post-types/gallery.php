<?php

function planeta_register_post_type_gallery()
{
	$labels_gallerys = array(
		'name'									=> esc_html__('Gallery', 'planeta'),
		'singular_name'					=> esc_html__('Image', 'planeta'),
		'add_new'								=> esc_html__('Add New Image', 'planeta'),
		'add_new_item'					=> esc_html__('Add New Item', 'planeta'),
		'edit_item'							=> esc_html__('Edit Item', 'planeta'),
		'search_items'					=> esc_html__('Search Items', 'planeta'),
		'not_found'							=> esc_html__('No images found.', 'planeta'),
		'not_found_in_trash'		=> esc_html__('No iamges found in Trash.', 'planeta'),
		'item_updated'					=> esc_html__('Image updated.', 'planeta'),
	);
	$args_gallerys = array(
		'labels'								=> $labels_gallerys,
		'public'								=> true,
		'exclude_from_search'		=> true,
		'publicly_queryable'		=> false,
		'show_in_nav_menus'			=> false,
		'show_in_menu'					=> false,
		'show_in_rest'					=> false,
		'supports'							=> array(
			'thumbnail',
			'title',
		),
	);
	register_post_type('gallery', $args_gallerys);
}
add_action('init', 'planeta_register_post_type_gallery');

//Add to Submenu
function planeta_add_gallery_submenu()
{
add_submenu_page(
	'planeta_welcome',
	esc_html__('Gallery', 'planeta'),
	esc_html__('Gallery', 'planeta'),
	'manage_options',
	'edit.php?post_type=gallery');
}
add_action('admin_menu', 'planeta_add_gallery_submenu');

add_filter('manage_gallery_posts_columns', 'planeta_gallery_columns');
function planeta_gallery_columns($columns)
{
	$columns['featured_image'] = esc_html__('Image', 'planeta');
	unset($columns['date']);
	return $columns;
}

add_action('manage_gallery_posts_custom_column', 'custom_gallery_column', 10, 2);
function custom_gallery_column($column, $post_id)
{
	global $post;
	switch($column)
	{
		case 'featured_image':
			$featured_image = get_the_post_thumbnail_url();
			echo "<img style='max-height: 512px; max-width: 512px;' src='${featured_image}' />";
			break;
		case 'title':
			$title = get_the_title();
			echo $title;
			break;
	}
}

add_filter('manage_edit-gallery_sortable_columns', 'planeta_gallery_columns_sortable');
function planeta_gallery_columns_sortable($columns)
{
	$columns['title'] = 'title';
	return $columns;
}

?>

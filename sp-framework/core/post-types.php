<?php
/*
* Post Types
*/


/*
* Post Type: sp_slider
*/


$spSlider = new SP_Framework_Post_Type();
 
$args = array(
	'name' 					=> 'sp_slider',
	'slug' 					=> 'sp_slider',
	'label' 				=> 'Slider',
	'all_items' 			=> 'All',
	'add_new' 				=> 'Add',
	'add_new_item' 			=> 'Add',
	'edit_item' 			=> 'Edit',
	'new_item' 				=> 'New',
	'view_item' 			=> 'View',
	'view_items' 			=> 'View',
	'search_items' 			=> 'Search',
	'not_found' 			=> 'Not found',
	'not_found_in_trash' 	=> 'Not found in trash',
	'menu_icon'				=> 'dashicons-format-image',
	'supports' 				=> array('title', 'thumbnail', 'editor'),
	'hidden' 				=> 'y',
);
 
$spSlider->create($args);


/*
* Post Type: sp_protfolio
*/


$spProtfolio = new SP_Framework_Post_Type();

$args = array(
	'name' 					=> 'sp_portfolio',
	'slug' 					=> 'sp_portfolio',
	'label' 				=> 'Portfolio',
	'all_items' 			=> 'All',
	'add_new' 				=> 'Add',
	'add_new_item' 			=> 'Add',
	'edit_item' 			=> 'Edit',
	'new_item' 				=> 'New',
	'view_item' 			=> 'View',
	'view_items' 			=> 'View',
	'search_items' 			=> 'Search',
	'not_found' 			=> 'Not found',
	'not_found_in_trash' 	=> 'Not found in trash',
	'menu_icon'				=> 'dashicons-images-alt2',
	'supports' 				=> array('title', 'thumbnail', 'editor'),
	'hidden' 				=> 'n',
);
 
$spProtfolio->create($args);



/*
* Post Type: sp_clients
*/


$spClients = new SP_Framework_Post_Type();

$args = array(
	'name' 					=> 'sp_clients',
	'slug' 					=> 'sp_clients',
	'label' 				=> 'Clients',
	'all_items' 			=> 'All',
	'add_new' 				=> 'Add',
	'add_new_item' 			=> 'Add',
	'edit_item' 			=> 'Edit',
	'new_item' 				=> 'New',
	'view_item' 			=> 'View',
	'view_items' 			=> 'View',
	'search_items' 			=> 'Search',
	'not_found' 			=> 'Not found',
	'not_found_in_trash' 	=> 'Not found in trash',
	'menu_icon'				=> 'dashicons-groups',
	'supports' 				=> array('title', 'thumbnail'),
	'hidden' 				=> 'y',
);
 
$spClients->create($args);
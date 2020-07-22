<?php
/*
* Taxonomies
*/

$spCT = new SP_Framework_Taxonomy();
 
$args = array(
	'taxonomy' 		=> 'sp_portfolio_tax',
	'slug' 			=> 'sp_portfolio_tax',
	'post_type' 	=> 'sp_portfolio',
	'name' 			=> 'Category',
	'singular_name' => 'Category',
	'menu_name' 	=> 'Category',
	'all_items' 	=> 'All',
	'edit_item' 	=> 'Edit',
	'view_item' 	=> 'View',
	'update_item' 	=> 'Update',
	'add_new_item' 	=> 'Add',
	'new_item_name' => 'New',
);
 
$spCT->create($args);
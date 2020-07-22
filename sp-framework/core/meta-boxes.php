<?php
/*
* Meta boxes
*/


/*
* Meta: sp_protfolio
*/


$spMB = new SP_Framework_Post_Type_Meta_Box();
 
$args = array(
	'post_type' => 'sp_portfolio',
	'name'     	=> 'settings_name',
	'label'		=> 'Settings',
	'validate' => 'n',
	'sanitize' => 'n',
 	'fields' => array(
 		'portfolio_images' =>  array(
 			'type' 	=> 'images',
 			'name' 	=> 'portfolio_images',
 			'label' => 'Images',
 			'caption' => '',
 			'required' => 'n',
 			'default' => '', 
 		),
 		'portfolio_сreated_by' => array(
			'type' 	=> 'text',
			'name' 	=> 'portfolio_сreated_by',
			'label' => 'Created by',
			'caption' => '',
			'required' => 'n',
			'default' => '', 
 		),
 		'portfolio_completed_on' => array(
			'type' 	=> 'text',
			'name' 	=> 'portfolio_completed_on',
			'label' => 'Completed on',
			'caption' => '',
			'required' => 'n',
			'default' => '', 
 		),
 		'portfolio_skills' => array(
			'type' 	=> 'text',
			'name' 	=> 'portfolio_skills',
			'label' => 'Skills',
			'caption' => '',
			'required' => 'n',
			'default' => '', 
 		),
 		'portfolio_client' => array(
			'type' 	=> 'text',
			'name' 	=> 'portfolio_client',
			'label' => 'Client',
			'caption' => '',
			'required' => 'n',
			'default' => '', 
 		),
 	),
);
  
$spMB->create($args);
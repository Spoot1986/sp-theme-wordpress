<?php
/*
* Customizer
*/

$spCC = new SP_Framework_Customizer();
 
$args = array(
 	'name' 	=> 'sp_framework',
 	'priority' => 99,
 	'title' => 'SP Framework',
 	'description' => 'SP Framework',
 	'section' => array(
 		'logo' => array(
	 		'name' 	=> 'logo',
	 		'title' => 'Логотип',
	 		'fields' => array(
	 			'sp_logo_1' => array(
					'name' => 'sp_logo_1',
	 				'type' => 'image', 
	 				'label' => 'Логотип 1',
	 			), 
	 			'sp_logo_2' => array(
					'name' => 'sp_logo_2',
	 				'type' => 'image', 
	 				'label' => 'Логотип 2',
	 			), 			
	 		),
	 	),
 		'contacts' => array(
	 		'name' 	=> 'contacts',
	 		'title' => 'Контакты',
	 		'fields' => array(
	 			'sp_contact_address' => array(
	 				'name' => 'sp_contact_address',
	 				'type' => 'input', 
	 				'label' => 'Адрес',
	 			),
	 			'sp_contact_phone' => array(
	 				'name' => 'sp_contact_phone',
	 				'type' => 'input', 
	 				'label' => 'Телефон',
	 			),
	 			'sp_contact_email' => array(
	 				'name' => 'sp_contact_email',
	 				'type' => 'input', 
	 				'label' => 'E-mail',
	 			),
	 			'sp_contact_facebook' => array(
	 				'name' => 'sp_contact_facebook',
	 				'type' => 'input', 
	 				'label' => 'Facebook',
	 			),
	 			'sp_contact_twitter' => array(
	 				'name' => 'sp_contact_twitter',
	 				'type' => 'input', 
	 				'label' => 'Twitter',
	 			),
	 			'sp_contact_gplus' => array(
	 				'name' => 'sp_contact_gplus',
	 				'type' => 'input', 
	 				'label' => 'Google plus',
	 			),		
	 		),
	 	), 	
 	),
);
 
$spCC->create($args);
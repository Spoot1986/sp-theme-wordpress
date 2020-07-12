<?php
/*
* Styles and Scripts 
*/


$spMC = new SP_Framework_Enqueue();
 
$args = array(
 	'css' => array(
 		array(
 			'name' 	=> 'bootstrap',
			'path' 	=> '/assets/css/bootstrap.css',
		),
		array(
 			'name' 	=> 'style',
			'path' 	=> '/assets/css/style.css',
		),
		array(
 			'name' 	=> 'swiper',
			'path' 	=> '/assets/css/swiper.css',
		),
		array(
 			'name' 	=> 'dark',
			'path' 	=> '/assets/css/dark.css',
		),
		array(
 			'name' 	=> 'fontIcons',
			'path' 	=> '/assets/css/font-icons.css',
		),
		array(
 			'name' 	=> 'animate',
			'path' 	=> '/assets/css/animate.css',
		),
		array(
 			'name' 	=> 'responsive',
			'path' 	=> '/assets/css/responsive.css',
		),
	),	
 	'js' => array(
		array(
 			'name' 	=> 'jquery',
 			'path' 	=> '',
			'jquery' => 'y',
		),
		array(
 			'name' 	=> 'swiper',
			'path' 	=> '/assets/js/swiper.js',
		),
		array(
 			'name' 	=> 'carousel',
			'path' 	=> '/assets/js/owl.carousel.js',
		),
		array(
 			'name' 	=> 'superfish',
			'path' 	=> '/assets/js/superfish.js',
		),
		array(
 			'name' 	=> 'jRespond',
			'path' 	=> '/assets/js/jRespond.js',
		),
		array(
 			'name' 	=> 'cookie',
			'path' 	=> '/assets/js/js.cookie.js',
		),
		array(
 			'name' 	=> 'appear',
			'path' 	=> '/assets/js/jquery.appear.js',
		),
		array(
 			'name' 	=> 'plugin',
			'path' 	=> '/assets/js/jquery.plugin.js',
		),
		array(
 			'name' 	=> 'countTo',
			'path' 	=> '/assets/js/jquery.countTo.js',
		),
		array(
 			'name' 	=> 'animsition',
			'path' 	=> '/assets/js/animsition.js',
		),
		array(
 			'name' 	=> 'flexslider',
			'path' 	=> '/assets/js/jquery.flexslider.js',
		),
		array(
 			'name' 	=> 'jquery-ui',
			'path' 	=> '/assets/js/jquery-ui.js',
		),
		array(
 			'name' 	=> 'scripts',
			'path' 	=> '/assets/js/scripts.js',
		),
 	),
);
 
$spMC->create($args);
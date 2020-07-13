<?php
/*
* Functions 
*/


/*
* Header
*/


function sp_get_header_logo(){
	$siteUrl 	= get_home_url();
	$logo1 		= get_theme_mod('sp_logo_1');
	$logo2 		= get_theme_mod('sp_logo_2');

	if(!empty($logo1) && !empty($logo2)){
		echo '<a href="'.$siteUrl.'" class="standard-logo" data-dark-logo="'.$logo1.'"><img src="'.$logo1.'" alt="Logo"></a>';
	}	
}

function sp_get_header_menu($menuID=null, $result=null){
	if(!empty($menuID)){

		$itemsLv1 = SP_Framework_Menu::get($menuID); 
		$itemsLv2 = SP_Framework_Menu::get($menuID);

		$result .= '<ul>';

			foreach ($itemsLv1 as $itemLv1) {
				
				if($itemLv1['have_children'] == 'y'){
					
					$result .= '<li>';
						$result .= '<a href="'.$itemLv1['url'].'"><div>'.$itemLv1['title'].'</div></a>';

						$result .= '<ul>';

							foreach ($itemsLv2 as $itemLv2) {
								if($itemLv1['id'] == $itemLv2['parent']){
									$result .= '<li><a href="'.$itemLv2['url'].'"><div>'.$itemLv2['title'].'</div></a></li>';
								}
							}

						$result .= '</ul>';

					$result .= '</li>';

				} else {
					$result .= '<li><a href="'.$itemLv1['url'].'"><div>'.$itemLv1['title'].'</div></a></li>';
				}

			}

		$result .= '</ul>';
	}

	return $result;
}


/*
* Front page sections
*/


function sp_get_slider_section($result=null){

	$result .= '<section id="slider" class="slider-element slider-parallax swiper_wrapper full-screen clearfix">';
		$result .= '<div class="slider-parallax-inner">';

			$result .= '<div class="swiper-container swiper-parent">';
				$result .= '<div class="swiper-wrapper">';

					$args = array(
						'post_type' 	=> 	'sp_slider',
						'order'			=>	'asc',
					);
					 				 
					$spPosts = SP_Framework_Post_Type_Utility::get_list($args);

					if(count($spPosts)>0){
						foreach ($spPosts as $spPost) {
							$postID 	= $spPost['id'];
							$title 		= $spPost['title']; 
							$content 	= SP_Framework_Post_Type_Utility::get_content($postID); 
							$image 		= SP_Framework_Post_Type_Utility::get_image($postID, 'full');

							$result .= '<div class="swiper-slide dark" style="background-image: url('.$image.');">';
								$result .= '<div class="slider-content">';
									$result .= '<div class="container clearfix">';
										$result .= '<div class="slider-caption slider-caption-center">';
											$result .= '<h2 data-animate="fadeInUp">'.$title.'</h2>';
											$result .= '<p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">'.$content.'</p>';
										$result .= '</div>';
									$result .= '</div>';
								$result .= '</div>';
							$result .= '</div>';
						}
					}

				$result .= '</div>';
				$result .= '<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>';
				$result .= '<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>';
			$result .= '</div>';

			$result .= '<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>';

		$result .= '</div>';
	$result .= '</section>';

	return $result;
}


/*
* Pages
*/


function sp_get_page_contacts($result=null){

	$address 	= get_theme_mod('sp_contact_address');
	$phone 		= get_theme_mod('sp_contact_phone');
	$email 		= get_theme_mod('sp_contact_email');
	$twitter 	= get_theme_mod('sp_contact_twitter');

	if($address){
		$result .= '<div class="col-lg-3 col-md-6 bottommargin clearfix">';
			$result .= '<div class="feature-box fbox-center fbox-bg fbox-plain">';
				$result .= '<div class="fbox-icon">';
					$result .= '<a href="#"><i class="icon-map-marker2"></i></a>';
				$result .= '</div>';
				$result .= '<h3>Our Headquarters<span class="subtitle">'.$address.'</span></h3>';
			$result .= '</div>';
		$result .= '</div>';
	}	

	if($phone){
		$result .= '<div class="col-lg-3 col-md-6 bottommargin clearfix">';
			$result .= '<div class="feature-box fbox-center fbox-bg fbox-plain">';
				$result .= '<div class="fbox-icon">';
					$result .= '<a href="tel:'.$phone.'"><i class="icon-phone3"></i></a>';
				$result .= '</div>';
				$result .= '<h3>Speak to Us<span class="subtitle">'.$phone.'</span></h3>';
			$result .= '</div>';
		$result .= '</div>';
	}	

	if($email){
		$result .= '<div class="col-lg-3 col-md-6 bottommargin clearfix">';
			$result .= '<div class="feature-box fbox-center fbox-bg fbox-plain">';
				$result .= '<div class="fbox-icon">';
					$result .= '<a href="mailto:'.$email.'"><i class="icon-envelope2"></i></a>';
				$result .= '</div>';
				$result .= '<h3>e-mail<span class="subtitle">'.$email.'</span></h3>';
			$result .= '</div>';
		$result .= '</div>';
	}	

	if($twitter){
		$result .= '<div class="col-lg-3 col-md-6 bottommargin clearfix">';
			$result .= '<div class="feature-box fbox-center fbox-bg fbox-plain">';
				$result .= '<div class="fbox-icon">';
					$result .= '<a href="'.$twitter.'"><i class="icon-twitter2"></i></a>';
				$result .= '</div>';
				$result .= '<h3>Follow on Twitter<span class="subtitle">twitter.com</span></h3>';
			$result .= '</div>';
		$result .= '</div>';
	}	

	return $result;
}


/*
* Footer
*/


function sp_get_footer_menu($menuID=null, $result=null){

	if(!empty($menuID)){

		$itemsLv1 = SP_Framework_Menu::get($menuID); 

		$result .= '<div class="copyright-links">';

		foreach ($itemsLv1 as $itemLv1) {
			$result .= '<a href="'.$itemLv1['url'].'">'.$itemLv1['title'].'</a>';
		}

		$result .= '</div>';

	}	

	return $result;
}

function sp_get_footer_contacts($result=null){
	$phone 		= get_theme_mod('sp_contact_phone');
	$email 		= get_theme_mod('sp_contact_email');
	$facebook 	= get_theme_mod('sp_contact_facebook');
	$twitter 	= get_theme_mod('sp_contact_twitter');
	$gplus 		= get_theme_mod('sp_contact_gplus');

	$result .= '<div class="fright clearfix">';
		
		if($facebook){
			$result .= '<a href="'.$facebook.'" class="social-icon si-small si-borderless si-facebook">';
				$result .= '<i class="icon-facebook"></i>';
				$result .= '<i class="icon-facebook"></i>';
			$result .= '</a>';
		}	

		if($twitter){
			$result .= '<a href="'.$twitter.'" class="social-icon si-small si-borderless si-twitter">';
				$result .= '<i class="icon-twitter"></i>';
				$result .= '<i class="icon-twitter"></i>';
			$result .= '</a>';
		}	

		if($gplus){
			$result .= '<a href="'.$gplus.'" class="social-icon si-small si-borderless si-gplus">';
				$result .= '<i class="icon-gplus"></i>';
				$result .= '<i class="icon-gplus"></i>';
			$result .= '</a>';
		}	

	$result .= '</div>';

	$result .= '<div class="clear"></div>';

	if($email){
		$result .= '<i class="icon-envelope2"></i> '.$email;
	}	

	$result .= '<span class="middot">&middot;</span>';

	if($phone){
		$result .= '<i class="icon-headphones"></i> '.$phone;
	}	

	return $result;
}

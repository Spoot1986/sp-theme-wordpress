<?php
/*
* Functions 
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

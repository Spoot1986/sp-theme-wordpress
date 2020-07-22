<?php
/*
*  Portfolio single page
*/

get_header();

$postID = get_the_ID();
$postTitle = get_the_title();
$postContent = SP_Framework_Post_Type_Utility::get_content($postID);

$portfolioImages = SP_Framework_Post_Type_Utility::get_meta($postID, 'img_portfolio_images');
$portfolioCreatedBy = SP_Framework_Post_Type_Utility::get_meta($postID, 'portfolio_сreated_by');
$portfolioCompletedOn = SP_Framework_Post_Type_Utility::get_meta($postID, 'portfolio_completed_on');
$portfolioSkills = SP_Framework_Post_Type_Utility::get_meta($postID, 'portfolio_skills');
$portfolioClient = SP_Framework_Post_Type_Utility::get_meta($postID, 'portfolio_client');
?>

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1><?php echo $postTitle;?></h1>
	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<!-- Portfolio Single Gallery
			============================================= -->
			<div class="col_full portfolio-single-image">

				<div class="fslider" data-arrows="true" data-animation="slide">
					<div class="flexslider">
						<div class="slider-wrap">
							<div class="slide"><a href="#"><img src="images/portfolio/single/full/1.jpg" alt=""></a></div>
							<div class="slide"><a href="#"><img src="images/portfolio/single/full/7.jpg" alt=""></a></div>
							<div class="slide"><a href="#"><img src="images/portfolio/single/full/10.jpg" alt=""></a></div>
						</div>
					</div>
				</div>

				<?php
				if(!empty($portfolioImages)){
					echo '<div class="fslider" data-arrows="true" data-animation="slide">';
						echo '<div class="flexslider">';
							echo '<div class="slider-wrap">';							
								foreach ($portfolioImages as $imageID) {
									$imageFull = wp_get_attachment_image_url($imageID, 'full');
									$imageLarge = wp_get_attachment_image_url($imageID, 'large');
									echo '<div class="slide"><a href="'.$imageFull.'"><img src="'.$imageLarge.'" alt="Image: '.$postTitle.'"></a></div>';
								}
							echo '</div>';
						echo '</div>';
					echo '</div>';
				}
				?>

			</div><!-- .portfolio-single-image end -->

			<div class="col_one_third nobottommargin">

				<!-- Portfolio Single - Meta
				============================================= -->
				<div class="card events-meta">
					<div class="card-body">
						<ul class="portfolio-meta nobottommargin">
							
							<?php
							if(!empty($portfolioCreatedBy)){
								echo '<li><span><i class="icon-user"></i>Created by:</span> '.$portfolioCreatedBy.'</li>';
							}

							if(!empty($portfolioCompletedOn)){
								echo '<li><span><i class="icon-calendar3"></i>Completed on:</span> '.$portfolioCompletedOn.'</li>';
							}

							if(!empty($portfolioSkills)){
								echo '<li><span><i class="icon-lightbulb"></i>Skills:</span> '.$portfolioSkills.'</li>';
							}

							if(!empty($portfolioClient)){
								echo '<li><span><i class="icon-link"></i>Client:</span> '.$portfolioClient.'</li>';
							}
							?>

						</ul>
					</div>
				</div>
				<!-- Portfolio Single - Meta End -->

			</div>

			<!-- Portfolio Single Content
			============================================= -->
			<div class="col_two_third portfolio-single-content col_last nobottommargin">

				<!-- Portfolio Single - Description
				============================================= -->
				<div class="fancy-title title-dotted-border">
					<h2>Project Info:</h2>
				</div>

				<div class="col_full nobottommargin">
					<?php echo $postContent;?>
				</div>

				<!-- Portfolio Single - Description End -->

			</div><!-- .portfolio-single-content end -->

			<div class="clear"></div>

			<div class="divider divider-center"><i class="icon-circle"></i></div>

			<!-- Related Portfolio Items
			============================================= -->
			<h4>Related Projects:</h4>

			<div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget" data-margin="30" data-nav="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">

				<div class="oc-item">
					<div class="iportfolio">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html">Open Imagination</a></h3>
							<span><a href="#">Media</a>, <a href="#">Icons</a></span>
						</div>
					</div>
				</div>

				<div class="oc-item">
					<div class="iportfolio">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
							<span><a href="#">Illustrations</a></span>
						</div>
					</div>
				</div>

				<div class="oc-item">
					<div class="iportfolio">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html">Open Imagination</a></h3>
							<span><a href="#">Media</a>, <a href="#">Icons</a></span>
						</div>
					</div>
				</div>

				<div class="oc-item">
					<div class="iportfolio">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
							<span><a href="#">Illustrations</a></span>
						</div>
					</div>
				</div>

				<div class="oc-item">
					<div class="iportfolio">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/portfolio/4/1.jpg" alt="Open Imagination">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html">Open Imagination</a></h3>
							<span><a href="#">Media</a>, <a href="#">Icons</a></span>
						</div>
					</div>
				</div>

				<div class="oc-item">
					<div class="iportfolio">
						<div class="portfolio-image">
							<a href="portfolio-single.html">
								<img src="images/portfolio/4/2.jpg" alt="Locked Steel Gate">
							</a>
						</div>
						<div class="portfolio-desc">
							<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
							<span><a href="#">Illustrations</a></span>
						</div>
					</div>
				</div>

			</div><!-- .portfolio-carousel end -->

		</div>

	</div>

</section><!-- #content end -->

<?php
get_footer();
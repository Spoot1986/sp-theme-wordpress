<?php
/*
Template Name:  Portfolio list
*/

get_header();

if(is_tax()){
	$title = single_term_title('', 0);
} else {
	$title = get_the_title();
}

?>

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1><?php echo $title;?></h1>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Portfolio</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">

	<div class="content-wrap">

		<div class="container clearfix">

			<?php echo sp_get_portfolio_list();?>

		</div>

	</div>

</section><!-- #content end -->

<?php
get_footer();
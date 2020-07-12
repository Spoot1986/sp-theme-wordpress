<?php
/**
 * The template for displaying the footer
 *
 */
?>

<footer id="footer" class="dark">

		<!-- Copyrights
		============================================= -->
		<div id="copyrights">

			<div class="container clearfix">

				<div class="col_half">
					Copyrights &copy; <?php echo date('Y')?><br>
					
					<?php echo sp_get_footer_menu('bottom-menu');?>

				</div>

				<div class="col_half col_last tright">
					<?php echo sp_get_footer_contacts();?>
				</div>

			</div>

		</div><!-- #copyrights end -->

	</footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<?php wp_footer(); ?>

</body>
</html>
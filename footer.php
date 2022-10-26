<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package earthshot_catalog
 */

?>

		
		<div class="footer">
			<div class="container">
				<div class="row">
					<div class="col">
						<h5 class="h6__title">contact</h5>
						<a class="link-text mb-2" href="mailto:earthshot@garage.co.jp" >earthshot@garage.co.jp</a>

						<p class="p-sm copyright">Copyright <?php echo date("Y");?> © Digital Garage All rights reserved.</p>
					</div>
				</div>
			</div>
		</div>
		<?php wp_footer(); ?>
		
		<script src="<?php echo get_template_directory_uri(); ?>/js/vendor.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/scripts.min.js"></script>
	</body>
</html>

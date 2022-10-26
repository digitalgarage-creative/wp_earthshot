<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package earthshot_catalog
 */

get_header();
?>

	<main id="primary" class="site-main">
<section class="section">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-8 mx-auto text-center">
				<p class="text-center mt-5"><img class="img-fluid my-5" src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt=""></p>
				<h1 class="en-serif">Page not Found</h1>
				<p>Go back to <a class="link-text dark" href="<?php echo esc_url( home_url( '/' ) ); ?>">Top Page</a></p>
				
			</div>
		</div>
	</div>
	
</section>

	</main><!-- #main -->

<?php
get_footer();

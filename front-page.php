<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package earthshot_catalog
 */

get_header();
?>


<div class="kv">
		
			
			<div class="container">
				<div class="row">
					<div class="col-12">
					<div class="kv__text">
						<div>
						<h1 class="en kv__text__title">
							<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/kv_top.svg" alt="Earthshot">
						</h1>
				
						</div>
					</div>
						<video class="kv__video" autoplay="" loop="" playsinline="" muted="" src="<?php echo get_template_directory_uri(); ?>/kv.mp4" poster="<?php echo get_template_directory_uri(); ?>/images/movie_poster.jpg"></video>

					</div>
					

					</div>
				
				</div>
			
				<p class="scroll">scroll</p>
			</div>
			


	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				the_content();
				


			endwhile;

	

		else :

		

		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();

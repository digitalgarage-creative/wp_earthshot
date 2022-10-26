<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package earthshot_catalog
 */

get_header();
?>

<div class="page__title ">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h1 class="h1__title en-serif">Startups | <span>World Changers</span></h1>
						<p class="p-lg">世界を変える起業家たち</p>
						
					</div>
				</div>
			</div>
		</div>
		<main>
    <section class="section pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <nav class="nav-tab">
                        <ul class="nav-tab-ul">
                            <li class="<?php if( is_category('earthshot-tv') ) { echo 'active';} ?>"><a href="/earthshot-tv/">Earthshot TV</a></li>
                            <li class="<?php if( is_category('startups') ) { echo 'active';} ?>"><a href="/startups/">Startups</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="flex__vid flex__vid-thirds">
          
                    
		<?php if ( have_posts() ) : ?>


				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', 'videos' );

				endwhile;

				the_posts_navigation();

				else :

				get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
							
                    
                </div>

				<!-- pagination -->
                <nav class="nav-pagination">
                    <ul class="pagination">
                        <li class="page-item"><span aria-current="page" class="page-numbers current">1</span></li>
                        <li class="page-item"><a class="page-numbers" href="#">2</a></li>
                        <li class="page-item"><a class="page-numbers" href="#">3</a></li>
                        <li class="page-item"><span class="page-numbers dots">…</span></li>
                        <li class="page-item"><a class="page-numbers" href="#">11</a></li>
                        <li class="page-item"><a class="next page-numbers" href="#">次</a></li></ul></nav>
                </div>
				<!-- pagination -->
            </div>
        </div>
    </section>







	</main><!-- #main -->

<?php

get_footer();

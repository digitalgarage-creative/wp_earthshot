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

<!-- add rss feed here -->
<div class="container">
	<div class="row">
		<div class="col-12 ">
			<h2>Onlab Feed  </h2>

<?php // Get RSS Feed(s)
include_once( ABSPATH . WPINC . '/feed.php' );

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed( 'https://onlab.jp/tag/esg/feed/', 'https://dgventures.com/blog/feed/' );
// $rss = fetch_feed( 'http://www.forbes.com/taxes-law/feed2/', 'http://www.wsj.com/xml/rss/3_7031.xml' );

/*
$rsslist = array(   'http://www.forbes.com/taxes-law/feed2/',
                    'http://www.wsj.com/xml/rss/3_7031.xml',
                    'http://www.taxlawroundup.com/?feed=rss'
                );
$rss = fetch_feed($rsslist);
*/

$maxitems = 0;

if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( 4 ); 

    // Build an array of all the items, starting with element 0 (first element).
    
    $rss_items = $rss->get_items( 0, $maxitems );
   

endif;
?>

    <?php if ( $maxitems == 0 ) : ?>
<ul>
<li><?php _e( 'No items', 'my-text-domain' ); ?></li>
</ul>
    <?php else : ?>
        <?php foreach ( $rss_items as $item ) :     
	// category name
	$cat_terms = array();
	foreach ($item->get_categories() as $cat) {
	    $cat_terms[] = $cat->get_term();
	}
	if ($cat_terms[0] = "Journal" ){
		$itemCat = "Onlab | ESG";
	} else {
		$itemCat = "Others";
	}  
		?>


<div class="rss-feed-container">
	<a href="<?php echo $item->get_permalink(); ?>" target="_blank">
		<!-- check for featured image -->
		<?php if ( preg_match_all( '/src="([^"]*)"/', $item->get_content(), $image ) ) {
				if ($image[1]) {
			echo '<img class="img-fluid" src="' . esc_url( $image[1][0] ) . '" />';
				}
			} ?>
		<div class=""><?php echo $itemCat; ?></div>
 <p><?php echo esc_html( $item->get_title() ); ?></p>
 <p class="date"><?php echo esc_html( $item->get_date('F j, Y') ); ?></p>
 




 </a>
 







                 
	
<?php echo '</div>'; ?>
        <?php endforeach; ?>
    <?php endif; ?>




		
		</div>
	</div>
</div>

<!-- close rss feed-->

	</main><!-- #main -->

<?php

get_footer();
